// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Rds20140815.Models;

namespace AlibabaCloud.SDK.Rds20140815
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"cn-qingdao", "rds.aliyuncs.com"},
                {"cn-beijing", "rds.aliyuncs.com"},
                {"cn-hangzhou", "rds.aliyuncs.com"},
                {"cn-shanghai", "rds.aliyuncs.com"},
                {"cn-shenzhen", "rds.aliyuncs.com"},
                {"cn-hongkong", "rds.aliyuncs.com"},
                {"ap-southeast-1", "rds.aliyuncs.com"},
                {"us-west-1", "rds.aliyuncs.com"},
                {"us-east-1", "rds.aliyuncs.com"},
                {"cn-shanghai-finance-1", "rds.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "rds.aliyuncs.com"},
                {"cn-north-2-gov-1", "rds.aliyuncs.com"},
                {"ap-northeast-2-pop", "rds.ap-northeast-1.aliyuncs.com"},
                {"cn-beijing-finance-1", "rds.aliyuncs.com"},
                {"cn-beijing-finance-pop", "rds.aliyuncs.com"},
                {"cn-beijing-gov-1", "rds.aliyuncs.com"},
                {"cn-beijing-nu16-b01", "rds.aliyuncs.com"},
                {"cn-edge-1", "rds.aliyuncs.com"},
                {"cn-fujian", "rds.aliyuncs.com"},
                {"cn-haidian-cm12-c01", "rds.aliyuncs.com"},
                {"cn-hangzhou-bj-b01", "rds.aliyuncs.com"},
                {"cn-hangzhou-finance", "rds.aliyuncs.com"},
                {"cn-hangzhou-internal-prod-1", "rds.aliyuncs.com"},
                {"cn-hangzhou-internal-test-1", "rds.aliyuncs.com"},
                {"cn-hangzhou-internal-test-2", "rds.aliyuncs.com"},
                {"cn-hangzhou-internal-test-3", "rds.aliyuncs.com"},
                {"cn-hangzhou-test-306", "rds.aliyuncs.com"},
                {"cn-hongkong-finance-pop", "rds.aliyuncs.com"},
                {"cn-qingdao-nebula", "rds.aliyuncs.com"},
                {"cn-shanghai-et15-b01", "rds.aliyuncs.com"},
                {"cn-shanghai-et2-b01", "rds.aliyuncs.com"},
                {"cn-shanghai-inner", "rds.aliyuncs.com"},
                {"cn-shanghai-internal-test-1", "rds.aliyuncs.com"},
                {"cn-shenzhen-inner", "rds.aliyuncs.com"},
                {"cn-shenzhen-st4-d01", "rds.aliyuncs.com"},
                {"cn-shenzhen-su18-b01", "rds.aliyuncs.com"},
                {"cn-wuhan", "rds.aliyuncs.com"},
                {"cn-yushanfang", "rds.aliyuncs.com"},
                {"cn-zhangbei-na61-b01", "rds.aliyuncs.com"},
                {"cn-zhangjiakou-na62-a01", "rds.aliyuncs.com"},
                {"cn-zhengzhou-nebula-1", "rds.aliyuncs.com"},
                {"eu-west-1-oxs", "rds.ap-northeast-1.aliyuncs.com"},
                {"rus-west-1-pop", "rds.ap-northeast-1.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("rds", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DescribeDedicatedHostImageCategoriesResponse DescribeDedicatedHostImageCategoriesWithOptions(DescribeDedicatedHostImageCategoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostImageCategoriesResponse>(DoRequest("DescribeDedicatedHostImageCategories", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDedicatedHostImageCategoriesResponse> DescribeDedicatedHostImageCategoriesWithOptionsAsync(DescribeDedicatedHostImageCategoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostImageCategoriesResponse>(await DoRequestAsync("DescribeDedicatedHostImageCategories", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDedicatedHostImageCategoriesResponse DescribeDedicatedHostImageCategories(DescribeDedicatedHostImageCategoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDedicatedHostImageCategoriesWithOptions(request, runtime);
        }

        public async Task<DescribeDedicatedHostImageCategoriesResponse> DescribeDedicatedHostImageCategoriesAsync(DescribeDedicatedHostImageCategoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDedicatedHostImageCategoriesWithOptionsAsync(request, runtime);
        }

        public DescribeCrossBackupMetaListResponse DescribeCrossBackupMetaListWithOptions(DescribeCrossBackupMetaListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossBackupMetaListResponse>(DoRequest("DescribeCrossBackupMetaList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCrossBackupMetaListResponse> DescribeCrossBackupMetaListWithOptionsAsync(DescribeCrossBackupMetaListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossBackupMetaListResponse>(await DoRequestAsync("DescribeCrossBackupMetaList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCrossBackupMetaListResponse DescribeCrossBackupMetaList(DescribeCrossBackupMetaListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCrossBackupMetaListWithOptions(request, runtime);
        }

        public async Task<DescribeCrossBackupMetaListResponse> DescribeCrossBackupMetaListAsync(DescribeCrossBackupMetaListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCrossBackupMetaListWithOptionsAsync(request, runtime);
        }

        public RestoreDdrTableResponse RestoreDdrTableWithOptions(RestoreDdrTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestoreDdrTableResponse>(DoRequest("RestoreDdrTable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RestoreDdrTableResponse> RestoreDdrTableWithOptionsAsync(RestoreDdrTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestoreDdrTableResponse>(await DoRequestAsync("RestoreDdrTable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RestoreDdrTableResponse RestoreDdrTable(RestoreDdrTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestoreDdrTableWithOptions(request, runtime);
        }

        public async Task<RestoreDdrTableResponse> RestoreDdrTableAsync(RestoreDdrTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestoreDdrTableWithOptionsAsync(request, runtime);
        }

        public ModifyDBProxyEndpointAddressResponse ModifyDBProxyEndpointAddressWithOptions(ModifyDBProxyEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyEndpointAddressResponse>(DoRequest("ModifyDBProxyEndpointAddress", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBProxyEndpointAddressResponse> ModifyDBProxyEndpointAddressWithOptionsAsync(ModifyDBProxyEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyEndpointAddressResponse>(await DoRequestAsync("ModifyDBProxyEndpointAddress", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBProxyEndpointAddressResponse ModifyDBProxyEndpointAddress(ModifyDBProxyEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBProxyEndpointAddressWithOptions(request, runtime);
        }

        public async Task<ModifyDBProxyEndpointAddressResponse> ModifyDBProxyEndpointAddressAsync(ModifyDBProxyEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBProxyEndpointAddressWithOptionsAsync(request, runtime);
        }

        public TerminateMigrateTaskResponse TerminateMigrateTaskWithOptions(TerminateMigrateTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminateMigrateTaskResponse>(DoRequest("TerminateMigrateTask", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TerminateMigrateTaskResponse> TerminateMigrateTaskWithOptionsAsync(TerminateMigrateTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminateMigrateTaskResponse>(await DoRequestAsync("TerminateMigrateTask", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public TerminateMigrateTaskResponse TerminateMigrateTask(TerminateMigrateTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TerminateMigrateTaskWithOptions(request, runtime);
        }

        public async Task<TerminateMigrateTaskResponse> TerminateMigrateTaskAsync(TerminateMigrateTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TerminateMigrateTaskWithOptionsAsync(request, runtime);
        }

        public DescribeLocalAvailableRecoveryTimeResponse DescribeLocalAvailableRecoveryTimeWithOptions(DescribeLocalAvailableRecoveryTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLocalAvailableRecoveryTimeResponse>(DoRequest("DescribeLocalAvailableRecoveryTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLocalAvailableRecoveryTimeResponse> DescribeLocalAvailableRecoveryTimeWithOptionsAsync(DescribeLocalAvailableRecoveryTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLocalAvailableRecoveryTimeResponse>(await DoRequestAsync("DescribeLocalAvailableRecoveryTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLocalAvailableRecoveryTimeResponse DescribeLocalAvailableRecoveryTime(DescribeLocalAvailableRecoveryTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLocalAvailableRecoveryTimeWithOptions(request, runtime);
        }

        public async Task<DescribeLocalAvailableRecoveryTimeResponse> DescribeLocalAvailableRecoveryTimeAsync(DescribeLocalAvailableRecoveryTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLocalAvailableRecoveryTimeWithOptionsAsync(request, runtime);
        }

        public DescribeAvailableZonesResponse DescribeAvailableZonesWithOptions(DescribeAvailableZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableZonesResponse>(DoRequest("DescribeAvailableZones", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAvailableZonesResponse> DescribeAvailableZonesWithOptionsAsync(DescribeAvailableZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableZonesResponse>(await DoRequestAsync("DescribeAvailableZones", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAvailableZonesResponse DescribeAvailableZones(DescribeAvailableZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAvailableZonesWithOptions(request, runtime);
        }

        public async Task<DescribeAvailableZonesResponse> DescribeAvailableZonesAsync(DescribeAvailableZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAvailableZonesWithOptionsAsync(request, runtime);
        }

        public DescribeAvailableClassesResponse DescribeAvailableClassesWithOptions(DescribeAvailableClassesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableClassesResponse>(DoRequest("DescribeAvailableClasses", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAvailableClassesResponse> DescribeAvailableClassesWithOptionsAsync(DescribeAvailableClassesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableClassesResponse>(await DoRequestAsync("DescribeAvailableClasses", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAvailableClassesResponse DescribeAvailableClasses(DescribeAvailableClassesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAvailableClassesWithOptions(request, runtime);
        }

        public async Task<DescribeAvailableClassesResponse> DescribeAvailableClassesAsync(DescribeAvailableClassesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAvailableClassesWithOptionsAsync(request, runtime);
        }

        public CreateDedicatedHostAccountResponse CreateDedicatedHostAccountWithOptions(CreateDedicatedHostAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostAccountResponse>(DoRequest("CreateDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDedicatedHostAccountResponse> CreateDedicatedHostAccountWithOptionsAsync(CreateDedicatedHostAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostAccountResponse>(await DoRequestAsync("CreateDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateDedicatedHostAccountResponse CreateDedicatedHostAccount(CreateDedicatedHostAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDedicatedHostAccountWithOptions(request, runtime);
        }

        public async Task<CreateDedicatedHostAccountResponse> CreateDedicatedHostAccountAsync(CreateDedicatedHostAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDedicatedHostAccountWithOptionsAsync(request, runtime);
        }

        public DeleteDedicatedHostAccountResponse DeleteDedicatedHostAccountWithOptions(DeleteDedicatedHostAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDedicatedHostAccountResponse>(DoRequest("DeleteDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDedicatedHostAccountResponse> DeleteDedicatedHostAccountWithOptionsAsync(DeleteDedicatedHostAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDedicatedHostAccountResponse>(await DoRequestAsync("DeleteDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDedicatedHostAccountResponse DeleteDedicatedHostAccount(DeleteDedicatedHostAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDedicatedHostAccountWithOptions(request, runtime);
        }

        public async Task<DeleteDedicatedHostAccountResponse> DeleteDedicatedHostAccountAsync(DeleteDedicatedHostAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDedicatedHostAccountWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostAccountResponse ModifyDedicatedHostAccountWithOptions(ModifyDedicatedHostAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAccountResponse>(DoRequest("ModifyDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostAccountResponse> ModifyDedicatedHostAccountWithOptionsAsync(ModifyDedicatedHostAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAccountResponse>(await DoRequestAsync("ModifyDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDedicatedHostAccountResponse ModifyDedicatedHostAccount(ModifyDedicatedHostAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDedicatedHostAccountWithOptions(request, runtime);
        }

        public async Task<ModifyDedicatedHostAccountResponse> ModifyDedicatedHostAccountAsync(ModifyDedicatedHostAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDedicatedHostAccountWithOptionsAsync(request, runtime);
        }

        public CreateDedicatedHostUserResponse CreateDedicatedHostUserWithOptions(CreateDedicatedHostUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostUserResponse>(DoRequest("CreateDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDedicatedHostUserResponse> CreateDedicatedHostUserWithOptionsAsync(CreateDedicatedHostUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostUserResponse>(await DoRequestAsync("CreateDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateDedicatedHostUserResponse CreateDedicatedHostUser(CreateDedicatedHostUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDedicatedHostUserWithOptions(request, runtime);
        }

        public async Task<CreateDedicatedHostUserResponse> CreateDedicatedHostUserAsync(CreateDedicatedHostUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDedicatedHostUserWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostUserResponse ModifyDedicatedHostUserWithOptions(ModifyDedicatedHostUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostUserResponse>(DoRequest("ModifyDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostUserResponse> ModifyDedicatedHostUserWithOptionsAsync(ModifyDedicatedHostUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostUserResponse>(await DoRequestAsync("ModifyDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDedicatedHostUserResponse ModifyDedicatedHostUser(ModifyDedicatedHostUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDedicatedHostUserWithOptions(request, runtime);
        }

        public async Task<ModifyDedicatedHostUserResponse> ModifyDedicatedHostUserAsync(ModifyDedicatedHostUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDedicatedHostUserWithOptionsAsync(request, runtime);
        }

        public DropDedicatedHostUserResponse DropDedicatedHostUserWithOptions(DropDedicatedHostUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DropDedicatedHostUserResponse>(DoRequest("DropDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DropDedicatedHostUserResponse> DropDedicatedHostUserWithOptionsAsync(DropDedicatedHostUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DropDedicatedHostUserResponse>(await DoRequestAsync("DropDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DropDedicatedHostUserResponse DropDedicatedHostUser(DropDedicatedHostUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DropDedicatedHostUserWithOptions(request, runtime);
        }

        public async Task<DropDedicatedHostUserResponse> DropDedicatedHostUserAsync(DropDedicatedHostUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DropDedicatedHostUserWithOptionsAsync(request, runtime);
        }

        public UpgradeDBProxyInstanceKernelVersionResponse UpgradeDBProxyInstanceKernelVersionWithOptions(UpgradeDBProxyInstanceKernelVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeDBProxyInstanceKernelVersionResponse>(DoRequest("UpgradeDBProxyInstanceKernelVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpgradeDBProxyInstanceKernelVersionResponse> UpgradeDBProxyInstanceKernelVersionWithOptionsAsync(UpgradeDBProxyInstanceKernelVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeDBProxyInstanceKernelVersionResponse>(await DoRequestAsync("UpgradeDBProxyInstanceKernelVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public UpgradeDBProxyInstanceKernelVersionResponse UpgradeDBProxyInstanceKernelVersion(UpgradeDBProxyInstanceKernelVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeDBProxyInstanceKernelVersionWithOptions(request, runtime);
        }

        public async Task<UpgradeDBProxyInstanceKernelVersionResponse> UpgradeDBProxyInstanceKernelVersionAsync(UpgradeDBProxyInstanceKernelVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeDBProxyInstanceKernelVersionWithOptionsAsync(request, runtime);
        }

        public StopDBInstanceResponse StopDBInstanceWithOptions(StopDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopDBInstanceResponse>(DoRequest("StopDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopDBInstanceResponse> StopDBInstanceWithOptionsAsync(StopDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopDBInstanceResponse>(await DoRequestAsync("StopDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public StopDBInstanceResponse StopDBInstance(StopDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopDBInstanceWithOptions(request, runtime);
        }

        public async Task<StopDBInstanceResponse> StopDBInstanceAsync(StopDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopDBInstanceWithOptionsAsync(request, runtime);
        }

        public StartDBInstanceResponse StartDBInstanceWithOptions(StartDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartDBInstanceResponse>(DoRequest("StartDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StartDBInstanceResponse> StartDBInstanceWithOptionsAsync(StartDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartDBInstanceResponse>(await DoRequestAsync("StartDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public StartDBInstanceResponse StartDBInstance(StartDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartDBInstanceWithOptions(request, runtime);
        }

        public async Task<StartDBInstanceResponse> StartDBInstanceAsync(StartDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartDBInstanceWithOptionsAsync(request, runtime);
        }

        public DescribeSignedEventActionsResponse DescribeSignedEventActionsWithOptions(DescribeSignedEventActionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSignedEventActionsResponse>(DoRequest("DescribeSignedEventActions", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSignedEventActionsResponse> DescribeSignedEventActionsWithOptionsAsync(DescribeSignedEventActionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSignedEventActionsResponse>(await DoRequestAsync("DescribeSignedEventActions", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSignedEventActionsResponse DescribeSignedEventActions(DescribeSignedEventActionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSignedEventActionsWithOptions(request, runtime);
        }

        public async Task<DescribeSignedEventActionsResponse> DescribeSignedEventActionsAsync(DescribeSignedEventActionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSignedEventActionsWithOptionsAsync(request, runtime);
        }

        public SignEventActionResponse SignEventActionWithOptions(SignEventActionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SignEventActionResponse>(DoRequest("SignEventAction", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SignEventActionResponse> SignEventActionWithOptionsAsync(SignEventActionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SignEventActionResponse>(await DoRequestAsync("SignEventAction", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public SignEventActionResponse SignEventAction(SignEventActionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SignEventActionWithOptions(request, runtime);
        }

        public async Task<SignEventActionResponse> SignEventActionAsync(SignEventActionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SignEventActionWithOptionsAsync(request, runtime);
        }

        public DescribeNextEventForSignResponse DescribeNextEventForSignWithOptions(DescribeNextEventForSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNextEventForSignResponse>(DoRequest("DescribeNextEventForSign", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNextEventForSignResponse> DescribeNextEventForSignWithOptionsAsync(DescribeNextEventForSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNextEventForSignResponse>(await DoRequestAsync("DescribeNextEventForSign", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNextEventForSignResponse DescribeNextEventForSign(DescribeNextEventForSignRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNextEventForSignWithOptions(request, runtime);
        }

        public async Task<DescribeNextEventForSignResponse> DescribeNextEventForSignAsync(DescribeNextEventForSignRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNextEventForSignWithOptionsAsync(request, runtime);
        }

        public ModifyActionEventVerifyPolicyResponse ModifyActionEventVerifyPolicyWithOptions(ModifyActionEventVerifyPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyActionEventVerifyPolicyResponse>(DoRequest("ModifyActionEventVerifyPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyActionEventVerifyPolicyResponse> ModifyActionEventVerifyPolicyWithOptionsAsync(ModifyActionEventVerifyPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyActionEventVerifyPolicyResponse>(await DoRequestAsync("ModifyActionEventVerifyPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyActionEventVerifyPolicyResponse ModifyActionEventVerifyPolicy(ModifyActionEventVerifyPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyActionEventVerifyPolicyWithOptions(request, runtime);
        }

        public async Task<ModifyActionEventVerifyPolicyResponse> ModifyActionEventVerifyPolicyAsync(ModifyActionEventVerifyPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyActionEventVerifyPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstancesOverviewResponse DescribeDBInstancesOverviewWithOptions(DescribeDBInstancesOverviewRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesOverviewResponse>(DoRequest("DescribeDBInstancesOverview", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstancesOverviewResponse> DescribeDBInstancesOverviewWithOptionsAsync(DescribeDBInstancesOverviewRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesOverviewResponse>(await DoRequestAsync("DescribeDBInstancesOverview", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstancesOverviewResponse DescribeDBInstancesOverview(DescribeDBInstancesOverviewRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstancesOverviewWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstancesOverviewResponse> DescribeDBInstancesOverviewAsync(DescribeDBInstancesOverviewRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstancesOverviewWithOptionsAsync(request, runtime);
        }

        public DescribeMigrateTaskByIdResponse DescribeMigrateTaskByIdWithOptions(DescribeMigrateTaskByIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMigrateTaskByIdResponse>(DoRequest("DescribeMigrateTaskById", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMigrateTaskByIdResponse> DescribeMigrateTaskByIdWithOptionsAsync(DescribeMigrateTaskByIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMigrateTaskByIdResponse>(await DoRequestAsync("DescribeMigrateTaskById", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMigrateTaskByIdResponse DescribeMigrateTaskById(DescribeMigrateTaskByIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMigrateTaskByIdWithOptions(request, runtime);
        }

        public async Task<DescribeMigrateTaskByIdResponse> DescribeMigrateTaskByIdAsync(DescribeMigrateTaskByIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMigrateTaskByIdWithOptionsAsync(request, runtime);
        }

        public DeleteBackupFileResponse DeleteBackupFileWithOptions(DeleteBackupFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBackupFileResponse>(DoRequest("DeleteBackupFile", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBackupFileResponse> DeleteBackupFileWithOptionsAsync(DeleteBackupFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBackupFileResponse>(await DoRequestAsync("DeleteBackupFile", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteBackupFileResponse DeleteBackupFile(DeleteBackupFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteBackupFileWithOptions(request, runtime);
        }

        public async Task<DeleteBackupFileResponse> DeleteBackupFileAsync(DeleteBackupFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteBackupFileWithOptionsAsync(request, runtime);
        }

        public DescribeDetachedBackupsResponse DescribeDetachedBackupsWithOptions(DescribeDetachedBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDetachedBackupsResponse>(DoRequest("DescribeDetachedBackups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDetachedBackupsResponse> DescribeDetachedBackupsWithOptionsAsync(DescribeDetachedBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDetachedBackupsResponse>(await DoRequestAsync("DescribeDetachedBackups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDetachedBackupsResponse DescribeDetachedBackups(DescribeDetachedBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDetachedBackupsWithOptions(request, runtime);
        }

        public async Task<DescribeDetachedBackupsResponse> DescribeDetachedBackupsAsync(DescribeDetachedBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDetachedBackupsWithOptionsAsync(request, runtime);
        }

        public EvaluateDedicatedHostInstanceResourceResponse EvaluateDedicatedHostInstanceResourceWithOptions(EvaluateDedicatedHostInstanceResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EvaluateDedicatedHostInstanceResourceResponse>(DoRequest("EvaluateDedicatedHostInstanceResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EvaluateDedicatedHostInstanceResourceResponse> EvaluateDedicatedHostInstanceResourceWithOptionsAsync(EvaluateDedicatedHostInstanceResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EvaluateDedicatedHostInstanceResourceResponse>(await DoRequestAsync("EvaluateDedicatedHostInstanceResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public EvaluateDedicatedHostInstanceResourceResponse EvaluateDedicatedHostInstanceResource(EvaluateDedicatedHostInstanceResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EvaluateDedicatedHostInstanceResourceWithOptions(request, runtime);
        }

        public async Task<EvaluateDedicatedHostInstanceResourceResponse> EvaluateDedicatedHostInstanceResourceAsync(EvaluateDedicatedHostInstanceResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EvaluateDedicatedHostInstanceResourceWithOptionsAsync(request, runtime);
        }

        public DescribeAvailableDedicatedHostClassesResponse DescribeAvailableDedicatedHostClassesWithOptions(DescribeAvailableDedicatedHostClassesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableDedicatedHostClassesResponse>(DoRequest("DescribeAvailableDedicatedHostClasses", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAvailableDedicatedHostClassesResponse> DescribeAvailableDedicatedHostClassesWithOptionsAsync(DescribeAvailableDedicatedHostClassesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableDedicatedHostClassesResponse>(await DoRequestAsync("DescribeAvailableDedicatedHostClasses", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAvailableDedicatedHostClassesResponse DescribeAvailableDedicatedHostClasses(DescribeAvailableDedicatedHostClassesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAvailableDedicatedHostClassesWithOptions(request, runtime);
        }

        public async Task<DescribeAvailableDedicatedHostClassesResponse> DescribeAvailableDedicatedHostClassesAsync(DescribeAvailableDedicatedHostClassesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAvailableDedicatedHostClassesWithOptionsAsync(request, runtime);
        }

        public DescribeAvailableDedicatedHostZonesResponse DescribeAvailableDedicatedHostZonesWithOptions(DescribeAvailableDedicatedHostZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableDedicatedHostZonesResponse>(DoRequest("DescribeAvailableDedicatedHostZones", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAvailableDedicatedHostZonesResponse> DescribeAvailableDedicatedHostZonesWithOptionsAsync(DescribeAvailableDedicatedHostZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableDedicatedHostZonesResponse>(await DoRequestAsync("DescribeAvailableDedicatedHostZones", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAvailableDedicatedHostZonesResponse DescribeAvailableDedicatedHostZones(DescribeAvailableDedicatedHostZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAvailableDedicatedHostZonesWithOptions(request, runtime);
        }

        public async Task<DescribeAvailableDedicatedHostZonesResponse> DescribeAvailableDedicatedHostZonesAsync(DescribeAvailableDedicatedHostZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAvailableDedicatedHostZonesWithOptionsAsync(request, runtime);
        }

        public ReleaseInstanceConnectionResponse ReleaseInstanceConnectionWithOptions(ReleaseInstanceConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseInstanceConnectionResponse>(DoRequest("ReleaseInstanceConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleaseInstanceConnectionResponse> ReleaseInstanceConnectionWithOptionsAsync(ReleaseInstanceConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseInstanceConnectionResponse>(await DoRequestAsync("ReleaseInstanceConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ReleaseInstanceConnectionResponse ReleaseInstanceConnection(ReleaseInstanceConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReleaseInstanceConnectionWithOptions(request, runtime);
        }

        public async Task<ReleaseInstanceConnectionResponse> ReleaseInstanceConnectionAsync(ReleaseInstanceConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReleaseInstanceConnectionWithOptionsAsync(request, runtime);
        }

        public UnlockAccountResponse UnlockAccountWithOptions(UnlockAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnlockAccountResponse>(DoRequest("UnlockAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnlockAccountResponse> UnlockAccountWithOptionsAsync(UnlockAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnlockAccountResponse>(await DoRequestAsync("UnlockAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public UnlockAccountResponse UnlockAccount(UnlockAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnlockAccountWithOptions(request, runtime);
        }

        public async Task<UnlockAccountResponse> UnlockAccountAsync(UnlockAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnlockAccountWithOptionsAsync(request, runtime);
        }

        public LockAccountResponse LockAccountWithOptions(LockAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<LockAccountResponse>(DoRequest("LockAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<LockAccountResponse> LockAccountWithOptionsAsync(LockAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<LockAccountResponse>(await DoRequestAsync("LockAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public LockAccountResponse LockAccount(LockAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return LockAccountWithOptions(request, runtime);
        }

        public async Task<LockAccountResponse> LockAccountAsync(LockAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await LockAccountWithOptionsAsync(request, runtime);
        }

        public ListTagResourcesResponse ListTagResourcesWithOptions(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(DoRequest("ListTagResources", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesWithOptionsAsync(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(await DoRequestAsync("ListTagResources", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ListTagResourcesResponse ListTagResources(ListTagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTagResourcesWithOptions(request, runtime);
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesAsync(ListTagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTagResourcesWithOptionsAsync(request, runtime);
        }

        public TagResourcesResponse TagResourcesWithOptions(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(DoRequest("TagResources", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TagResourcesResponse> TagResourcesWithOptionsAsync(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(await DoRequestAsync("TagResources", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public TagResourcesResponse TagResources(TagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TagResourcesWithOptions(request, runtime);
        }

        public async Task<TagResourcesResponse> TagResourcesAsync(TagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TagResourcesWithOptionsAsync(request, runtime);
        }

        public UntagResourcesResponse UntagResourcesWithOptions(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(DoRequest("UntagResources", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UntagResourcesResponse> UntagResourcesWithOptionsAsync(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(await DoRequestAsync("UntagResources", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public UntagResourcesResponse UntagResources(UntagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UntagResourcesWithOptions(request, runtime);
        }

        public async Task<UntagResourcesResponse> UntagResourcesAsync(UntagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UntagResourcesWithOptionsAsync(request, runtime);
        }

        public DescribeDedicatedHostGroupsResponse DescribeDedicatedHostGroupsWithOptions(DescribeDedicatedHostGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostGroupsResponse>(DoRequest("DescribeDedicatedHostGroups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDedicatedHostGroupsResponse> DescribeDedicatedHostGroupsWithOptionsAsync(DescribeDedicatedHostGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostGroupsResponse>(await DoRequestAsync("DescribeDedicatedHostGroups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDedicatedHostGroupsResponse DescribeDedicatedHostGroups(DescribeDedicatedHostGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDedicatedHostGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeDedicatedHostGroupsResponse> DescribeDedicatedHostGroupsAsync(DescribeDedicatedHostGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDedicatedHostGroupsWithOptionsAsync(request, runtime);
        }

        public CreateDedicatedHostGroupResponse CreateDedicatedHostGroupWithOptions(CreateDedicatedHostGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostGroupResponse>(DoRequest("CreateDedicatedHostGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDedicatedHostGroupResponse> CreateDedicatedHostGroupWithOptionsAsync(CreateDedicatedHostGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostGroupResponse>(await DoRequestAsync("CreateDedicatedHostGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateDedicatedHostGroupResponse CreateDedicatedHostGroup(CreateDedicatedHostGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDedicatedHostGroupWithOptions(request, runtime);
        }

        public async Task<CreateDedicatedHostGroupResponse> CreateDedicatedHostGroupAsync(CreateDedicatedHostGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDedicatedHostGroupWithOptionsAsync(request, runtime);
        }

        public DeleteDedicatedHostGroupResponse DeleteDedicatedHostGroupWithOptions(DeleteDedicatedHostGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDedicatedHostGroupResponse>(DoRequest("DeleteDedicatedHostGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDedicatedHostGroupResponse> DeleteDedicatedHostGroupWithOptionsAsync(DeleteDedicatedHostGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDedicatedHostGroupResponse>(await DoRequestAsync("DeleteDedicatedHostGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDedicatedHostGroupResponse DeleteDedicatedHostGroup(DeleteDedicatedHostGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDedicatedHostGroupWithOptions(request, runtime);
        }

        public async Task<DeleteDedicatedHostGroupResponse> DeleteDedicatedHostGroupAsync(DeleteDedicatedHostGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDedicatedHostGroupWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostGroupAttributeResponse ModifyDedicatedHostGroupAttributeWithOptions(ModifyDedicatedHostGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostGroupAttributeResponse>(DoRequest("ModifyDedicatedHostGroupAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostGroupAttributeResponse> ModifyDedicatedHostGroupAttributeWithOptionsAsync(ModifyDedicatedHostGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostGroupAttributeResponse>(await DoRequestAsync("ModifyDedicatedHostGroupAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDedicatedHostGroupAttributeResponse ModifyDedicatedHostGroupAttribute(ModifyDedicatedHostGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDedicatedHostGroupAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyDedicatedHostGroupAttributeResponse> ModifyDedicatedHostGroupAttributeAsync(ModifyDedicatedHostGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDedicatedHostGroupAttributeWithOptionsAsync(request, runtime);
        }

        public RestartDedicatedHostResponse RestartDedicatedHostWithOptions(RestartDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartDedicatedHostResponse>(DoRequest("RestartDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RestartDedicatedHostResponse> RestartDedicatedHostWithOptionsAsync(RestartDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartDedicatedHostResponse>(await DoRequestAsync("RestartDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RestartDedicatedHostResponse RestartDedicatedHost(RestartDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestartDedicatedHostWithOptions(request, runtime);
        }

        public async Task<RestartDedicatedHostResponse> RestartDedicatedHostAsync(RestartDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestartDedicatedHostWithOptionsAsync(request, runtime);
        }

        public ReplaceDedicatedHostResponse ReplaceDedicatedHostWithOptions(ReplaceDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReplaceDedicatedHostResponse>(DoRequest("ReplaceDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReplaceDedicatedHostResponse> ReplaceDedicatedHostWithOptionsAsync(ReplaceDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReplaceDedicatedHostResponse>(await DoRequestAsync("ReplaceDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ReplaceDedicatedHostResponse ReplaceDedicatedHost(ReplaceDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReplaceDedicatedHostWithOptions(request, runtime);
        }

        public async Task<ReplaceDedicatedHostResponse> ReplaceDedicatedHostAsync(ReplaceDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReplaceDedicatedHostWithOptionsAsync(request, runtime);
        }

        public DescribeDedicatedHostsResponse DescribeDedicatedHostsWithOptions(DescribeDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostsResponse>(DoRequest("DescribeDedicatedHosts", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDedicatedHostsResponse> DescribeDedicatedHostsWithOptionsAsync(DescribeDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostsResponse>(await DoRequestAsync("DescribeDedicatedHosts", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDedicatedHostsResponse DescribeDedicatedHosts(DescribeDedicatedHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDedicatedHostsWithOptions(request, runtime);
        }

        public async Task<DescribeDedicatedHostsResponse> DescribeDedicatedHostsAsync(DescribeDedicatedHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDedicatedHostsWithOptionsAsync(request, runtime);
        }

        public DescribeDedicatedHostAttributeResponse DescribeDedicatedHostAttributeWithOptions(DescribeDedicatedHostAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostAttributeResponse>(DoRequest("DescribeDedicatedHostAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDedicatedHostAttributeResponse> DescribeDedicatedHostAttributeWithOptionsAsync(DescribeDedicatedHostAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostAttributeResponse>(await DoRequestAsync("DescribeDedicatedHostAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDedicatedHostAttributeResponse DescribeDedicatedHostAttribute(DescribeDedicatedHostAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDedicatedHostAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeDedicatedHostAttributeResponse> DescribeDedicatedHostAttributeAsync(DescribeDedicatedHostAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDedicatedHostAttributeWithOptionsAsync(request, runtime);
        }

        public ClearDedicatedHostResponse ClearDedicatedHostWithOptions(ClearDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClearDedicatedHostResponse>(DoRequest("ClearDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ClearDedicatedHostResponse> ClearDedicatedHostWithOptionsAsync(ClearDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClearDedicatedHostResponse>(await DoRequestAsync("ClearDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ClearDedicatedHostResponse ClearDedicatedHost(ClearDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ClearDedicatedHostWithOptions(request, runtime);
        }

        public async Task<ClearDedicatedHostResponse> ClearDedicatedHostAsync(ClearDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ClearDedicatedHostWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostAttributeResponse ModifyDedicatedHostAttributeWithOptions(ModifyDedicatedHostAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAttributeResponse>(DoRequest("ModifyDedicatedHostAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostAttributeResponse> ModifyDedicatedHostAttributeWithOptionsAsync(ModifyDedicatedHostAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAttributeResponse>(await DoRequestAsync("ModifyDedicatedHostAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDedicatedHostAttributeResponse ModifyDedicatedHostAttribute(ModifyDedicatedHostAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDedicatedHostAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyDedicatedHostAttributeResponse> ModifyDedicatedHostAttributeAsync(ModifyDedicatedHostAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDedicatedHostAttributeWithOptionsAsync(request, runtime);
        }

        public MigrateDBInstanceResponse MigrateDBInstanceWithOptions(MigrateDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MigrateDBInstanceResponse>(DoRequest("MigrateDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<MigrateDBInstanceResponse> MigrateDBInstanceWithOptionsAsync(MigrateDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MigrateDBInstanceResponse>(await DoRequestAsync("MigrateDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public MigrateDBInstanceResponse MigrateDBInstance(MigrateDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return MigrateDBInstanceWithOptions(request, runtime);
        }

        public async Task<MigrateDBInstanceResponse> MigrateDBInstanceAsync(MigrateDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await MigrateDBInstanceWithOptionsAsync(request, runtime);
        }

        public CreateDedicatedHostResponse CreateDedicatedHostWithOptions(CreateDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostResponse>(DoRequest("CreateDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDedicatedHostResponse> CreateDedicatedHostWithOptionsAsync(CreateDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDedicatedHostResponse>(await DoRequestAsync("CreateDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateDedicatedHostResponse CreateDedicatedHost(CreateDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDedicatedHostWithOptions(request, runtime);
        }

        public async Task<CreateDedicatedHostResponse> CreateDedicatedHostAsync(CreateDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDedicatedHostWithOptionsAsync(request, runtime);
        }

        public RebuildDBInstanceResponse RebuildDBInstanceWithOptions(RebuildDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RebuildDBInstanceResponse>(DoRequest("RebuildDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RebuildDBInstanceResponse> RebuildDBInstanceWithOptionsAsync(RebuildDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RebuildDBInstanceResponse>(await DoRequestAsync("RebuildDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RebuildDBInstanceResponse RebuildDBInstance(RebuildDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RebuildDBInstanceWithOptions(request, runtime);
        }

        public async Task<RebuildDBInstanceResponse> RebuildDBInstanceAsync(RebuildDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RebuildDBInstanceWithOptionsAsync(request, runtime);
        }

        public DescribeDBProxyEndpointResponse DescribeDBProxyEndpointWithOptions(DescribeDBProxyEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBProxyEndpointResponse>(DoRequest("DescribeDBProxyEndpoint", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBProxyEndpointResponse> DescribeDBProxyEndpointWithOptionsAsync(DescribeDBProxyEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBProxyEndpointResponse>(await DoRequestAsync("DescribeDBProxyEndpoint", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBProxyEndpointResponse DescribeDBProxyEndpoint(DescribeDBProxyEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBProxyEndpointWithOptions(request, runtime);
        }

        public async Task<DescribeDBProxyEndpointResponse> DescribeDBProxyEndpointAsync(DescribeDBProxyEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBProxyEndpointWithOptionsAsync(request, runtime);
        }

        public DescribeDBProxyPerformanceResponse DescribeDBProxyPerformanceWithOptions(DescribeDBProxyPerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBProxyPerformanceResponse>(DoRequest("DescribeDBProxyPerformance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBProxyPerformanceResponse> DescribeDBProxyPerformanceWithOptionsAsync(DescribeDBProxyPerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBProxyPerformanceResponse>(await DoRequestAsync("DescribeDBProxyPerformance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBProxyPerformanceResponse DescribeDBProxyPerformance(DescribeDBProxyPerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBProxyPerformanceWithOptions(request, runtime);
        }

        public async Task<DescribeDBProxyPerformanceResponse> DescribeDBProxyPerformanceAsync(DescribeDBProxyPerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBProxyPerformanceWithOptionsAsync(request, runtime);
        }

        public DescribeDBProxyResponse DescribeDBProxyWithOptions(DescribeDBProxyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBProxyResponse>(DoRequest("DescribeDBProxy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBProxyResponse> DescribeDBProxyWithOptionsAsync(DescribeDBProxyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBProxyResponse>(await DoRequestAsync("DescribeDBProxy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBProxyResponse DescribeDBProxy(DescribeDBProxyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBProxyWithOptions(request, runtime);
        }

        public async Task<DescribeDBProxyResponse> DescribeDBProxyAsync(DescribeDBProxyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBProxyWithOptionsAsync(request, runtime);
        }

        public ModifyDBProxyEndpointResponse ModifyDBProxyEndpointWithOptions(ModifyDBProxyEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyEndpointResponse>(DoRequest("ModifyDBProxyEndpoint", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBProxyEndpointResponse> ModifyDBProxyEndpointWithOptionsAsync(ModifyDBProxyEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyEndpointResponse>(await DoRequestAsync("ModifyDBProxyEndpoint", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBProxyEndpointResponse ModifyDBProxyEndpoint(ModifyDBProxyEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBProxyEndpointWithOptions(request, runtime);
        }

        public async Task<ModifyDBProxyEndpointResponse> ModifyDBProxyEndpointAsync(ModifyDBProxyEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBProxyEndpointWithOptionsAsync(request, runtime);
        }

        public ModifyDBProxyInstanceResponse ModifyDBProxyInstanceWithOptions(ModifyDBProxyInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyInstanceResponse>(DoRequest("ModifyDBProxyInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBProxyInstanceResponse> ModifyDBProxyInstanceWithOptionsAsync(ModifyDBProxyInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyInstanceResponse>(await DoRequestAsync("ModifyDBProxyInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBProxyInstanceResponse ModifyDBProxyInstance(ModifyDBProxyInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBProxyInstanceWithOptions(request, runtime);
        }

        public async Task<ModifyDBProxyInstanceResponse> ModifyDBProxyInstanceAsync(ModifyDBProxyInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBProxyInstanceWithOptionsAsync(request, runtime);
        }

        public ModifyDBProxyResponse ModifyDBProxyWithOptions(ModifyDBProxyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyResponse>(DoRequest("ModifyDBProxy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBProxyResponse> ModifyDBProxyWithOptionsAsync(ModifyDBProxyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBProxyResponse>(await DoRequestAsync("ModifyDBProxy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBProxyResponse ModifyDBProxy(ModifyDBProxyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBProxyWithOptions(request, runtime);
        }

        public async Task<ModifyDBProxyResponse> ModifyDBProxyAsync(ModifyDBProxyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBProxyWithOptionsAsync(request, runtime);
        }

        public ModifyHASwitchConfigResponse ModifyHASwitchConfigWithOptions(ModifyHASwitchConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHASwitchConfigResponse>(DoRequest("ModifyHASwitchConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyHASwitchConfigResponse> ModifyHASwitchConfigWithOptionsAsync(ModifyHASwitchConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHASwitchConfigResponse>(await DoRequestAsync("ModifyHASwitchConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyHASwitchConfigResponse ModifyHASwitchConfig(ModifyHASwitchConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyHASwitchConfigWithOptions(request, runtime);
        }

        public async Task<ModifyHASwitchConfigResponse> ModifyHASwitchConfigAsync(ModifyHASwitchConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyHASwitchConfigWithOptionsAsync(request, runtime);
        }

        public DescribeHASwitchConfigResponse DescribeHASwitchConfigWithOptions(DescribeHASwitchConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHASwitchConfigResponse>(DoRequest("DescribeHASwitchConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeHASwitchConfigResponse> DescribeHASwitchConfigWithOptionsAsync(DescribeHASwitchConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHASwitchConfigResponse>(await DoRequestAsync("DescribeHASwitchConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeHASwitchConfigResponse DescribeHASwitchConfig(DescribeHASwitchConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeHASwitchConfigWithOptions(request, runtime);
        }

        public async Task<DescribeHASwitchConfigResponse> DescribeHASwitchConfigAsync(DescribeHASwitchConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeHASwitchConfigWithOptionsAsync(request, runtime);
        }

        public ModifyActionEventPolicyResponse ModifyActionEventPolicyWithOptions(ModifyActionEventPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyActionEventPolicyResponse>(DoRequest("ModifyActionEventPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyActionEventPolicyResponse> ModifyActionEventPolicyWithOptionsAsync(ModifyActionEventPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyActionEventPolicyResponse>(await DoRequestAsync("ModifyActionEventPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyActionEventPolicyResponse ModifyActionEventPolicy(ModifyActionEventPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyActionEventPolicyWithOptions(request, runtime);
        }

        public async Task<ModifyActionEventPolicyResponse> ModifyActionEventPolicyAsync(ModifyActionEventPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyActionEventPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeActionEventPolicyResponse DescribeActionEventPolicyWithOptions(DescribeActionEventPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeActionEventPolicyResponse>(DoRequest("DescribeActionEventPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeActionEventPolicyResponse> DescribeActionEventPolicyWithOptionsAsync(DescribeActionEventPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeActionEventPolicyResponse>(await DoRequestAsync("DescribeActionEventPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeActionEventPolicyResponse DescribeActionEventPolicy(DescribeActionEventPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeActionEventPolicyWithOptions(request, runtime);
        }

        public async Task<DescribeActionEventPolicyResponse> DescribeActionEventPolicyAsync(DescribeActionEventPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeActionEventPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeEventsResponse DescribeEventsWithOptions(DescribeEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventsResponse>(DoRequest("DescribeEvents", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEventsResponse> DescribeEventsWithOptionsAsync(DescribeEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventsResponse>(await DoRequestAsync("DescribeEvents", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEventsResponse DescribeEvents(DescribeEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEventsWithOptions(request, runtime);
        }

        public async Task<DescribeEventsResponse> DescribeEventsAsync(DescribeEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEventsWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstancesForCloneResponse DescribeDBInstancesForCloneWithOptions(DescribeDBInstancesForCloneRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesForCloneResponse>(DoRequest("DescribeDBInstancesForClone", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstancesForCloneResponse> DescribeDBInstancesForCloneWithOptionsAsync(DescribeDBInstancesForCloneRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesForCloneResponse>(await DoRequestAsync("DescribeDBInstancesForClone", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstancesForCloneResponse DescribeDBInstancesForClone(DescribeDBInstancesForCloneRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstancesForCloneWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstancesForCloneResponse> DescribeDBInstancesForCloneAsync(DescribeDBInstancesForCloneRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstancesForCloneWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public DescribeDTCSecurityIpHostsForSQLServerResponse DescribeDTCSecurityIpHostsForSQLServerWithOptions(DescribeDTCSecurityIpHostsForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDTCSecurityIpHostsForSQLServerResponse>(DoRequest("DescribeDTCSecurityIpHostsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public async Task<DescribeDTCSecurityIpHostsForSQLServerResponse> DescribeDTCSecurityIpHostsForSQLServerWithOptionsAsync(DescribeDTCSecurityIpHostsForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDTCSecurityIpHostsForSQLServerResponse>(await DoRequestAsync("DescribeDTCSecurityIpHostsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public DescribeDTCSecurityIpHostsForSQLServerResponse DescribeDTCSecurityIpHostsForSQLServer(DescribeDTCSecurityIpHostsForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDTCSecurityIpHostsForSQLServerWithOptions(request, runtime);
        }

        /**
         * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public async Task<DescribeDTCSecurityIpHostsForSQLServerResponse> DescribeDTCSecurityIpHostsForSQLServerAsync(DescribeDTCSecurityIpHostsForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDTCSecurityIpHostsForSQLServerWithOptionsAsync(request, runtime);
        }

        /**
         * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &SecurityIpHosts=192.168.1.100,k3ecstest
          * &WhiteListGroupName=test1
          * &<公共请求参数>
          * ```
          * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public ModifyDTCSecurityIpHostsForSQLServerResponse ModifyDTCSecurityIpHostsForSQLServerWithOptions(ModifyDTCSecurityIpHostsForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDTCSecurityIpHostsForSQLServerResponse>(DoRequest("ModifyDTCSecurityIpHostsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &SecurityIpHosts=192.168.1.100,k3ecstest
          * &WhiteListGroupName=test1
          * &<公共请求参数>
          * ```
          * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public async Task<ModifyDTCSecurityIpHostsForSQLServerResponse> ModifyDTCSecurityIpHostsForSQLServerWithOptionsAsync(ModifyDTCSecurityIpHostsForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDTCSecurityIpHostsForSQLServerResponse>(await DoRequestAsync("ModifyDTCSecurityIpHostsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &SecurityIpHosts=192.168.1.100,k3ecstest
          * &WhiteListGroupName=test1
          * &<公共请求参数>
          * ```
          * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public ModifyDTCSecurityIpHostsForSQLServerResponse ModifyDTCSecurityIpHostsForSQLServer(ModifyDTCSecurityIpHostsForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDTCSecurityIpHostsForSQLServerWithOptions(request, runtime);
        }

        /**
         * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &SecurityIpHosts=192.168.1.100,k3ecstest
          * &WhiteListGroupName=test1
          * &<公共请求参数>
          * ```
          * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public async Task<ModifyDTCSecurityIpHostsForSQLServerResponse> ModifyDTCSecurityIpHostsForSQLServerAsync(ModifyDTCSecurityIpHostsForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDTCSecurityIpHostsForSQLServerWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
          * &DBInstanceId=rm-uf6wjk5xxxxxxx	
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public DescribeDBInstanceIpHostnameResponse DescribeDBInstanceIpHostnameWithOptions(DescribeDBInstanceIpHostnameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceIpHostnameResponse>(DoRequest("DescribeDBInstanceIpHostname", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
          * &DBInstanceId=rm-uf6wjk5xxxxxxx	
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public async Task<DescribeDBInstanceIpHostnameResponse> DescribeDBInstanceIpHostnameWithOptionsAsync(DescribeDBInstanceIpHostnameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceIpHostnameResponse>(await DoRequestAsync("DescribeDBInstanceIpHostname", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
          * &DBInstanceId=rm-uf6wjk5xxxxxxx	
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public DescribeDBInstanceIpHostnameResponse DescribeDBInstanceIpHostname(DescribeDBInstanceIpHostnameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceIpHostnameWithOptions(request, runtime);
        }

        /**
         * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
          * &DBInstanceId=rm-uf6wjk5xxxxxxx	
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
          * 仅适用于如下版本实例：
          * * SQL Server 2012/2016企业版高可用版
          * * SQL Server 2012/2016标准版
        
         */
        public async Task<DescribeDBInstanceIpHostnameResponse> DescribeDBInstanceIpHostnameAsync(DescribeDBInstanceIpHostnameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceIpHostnameWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceAutoUpgradeMinorVersionResponse ModifyDBInstanceAutoUpgradeMinorVersionWithOptions(ModifyDBInstanceAutoUpgradeMinorVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceAutoUpgradeMinorVersionResponse>(DoRequest("ModifyDBInstanceAutoUpgradeMinorVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceAutoUpgradeMinorVersionResponse> ModifyDBInstanceAutoUpgradeMinorVersionWithOptionsAsync(ModifyDBInstanceAutoUpgradeMinorVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceAutoUpgradeMinorVersionResponse>(await DoRequestAsync("ModifyDBInstanceAutoUpgradeMinorVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceAutoUpgradeMinorVersionResponse ModifyDBInstanceAutoUpgradeMinorVersion(ModifyDBInstanceAutoUpgradeMinorVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceAutoUpgradeMinorVersionWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceAutoUpgradeMinorVersionResponse> ModifyDBInstanceAutoUpgradeMinorVersionAsync(ModifyDBInstanceAutoUpgradeMinorVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceAutoUpgradeMinorVersionWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description: 
         */
        public DescribeAvailableCrossRegionResponse DescribeAvailableCrossRegionWithOptions(DescribeAvailableCrossRegionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableCrossRegionResponse>(DoRequest("DescribeAvailableCrossRegion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description: 
         */
        public async Task<DescribeAvailableCrossRegionResponse> DescribeAvailableCrossRegionWithOptionsAsync(DescribeAvailableCrossRegionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableCrossRegionResponse>(await DoRequestAsync("DescribeAvailableCrossRegion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description: 
         */
        public DescribeAvailableCrossRegionResponse DescribeAvailableCrossRegion(DescribeAvailableCrossRegionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAvailableCrossRegionWithOptions(request, runtime);
        }

        /**
         * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description: 
         */
        public async Task<DescribeAvailableCrossRegionResponse> DescribeAvailableCrossRegionAsync(DescribeAvailableCrossRegionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAvailableCrossRegionWithOptionsAsync(request, runtime);
        }

        public CheckCreateDdrDBInstanceResponse CheckCreateDdrDBInstanceWithOptions(CheckCreateDdrDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckCreateDdrDBInstanceResponse>(DoRequest("CheckCreateDdrDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckCreateDdrDBInstanceResponse> CheckCreateDdrDBInstanceWithOptionsAsync(CheckCreateDdrDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckCreateDdrDBInstanceResponse>(await DoRequestAsync("CheckCreateDdrDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CheckCreateDdrDBInstanceResponse CheckCreateDdrDBInstance(CheckCreateDdrDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckCreateDdrDBInstanceWithOptions(request, runtime);
        }

        public async Task<CheckCreateDdrDBInstanceResponse> CheckCreateDdrDBInstanceAsync(CheckCreateDdrDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckCreateDdrDBInstanceWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
          * &CrossBackupId=14377
          * &<公共请求参数>
          * ```
          * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeAvailableRecoveryTimeResponse DescribeAvailableRecoveryTimeWithOptions(DescribeAvailableRecoveryTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableRecoveryTimeResponse>(DoRequest("DescribeAvailableRecoveryTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
          * &CrossBackupId=14377
          * &<公共请求参数>
          * ```
          * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeAvailableRecoveryTimeResponse> DescribeAvailableRecoveryTimeWithOptionsAsync(DescribeAvailableRecoveryTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableRecoveryTimeResponse>(await DoRequestAsync("DescribeAvailableRecoveryTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
          * &CrossBackupId=14377
          * &<公共请求参数>
          * ```
          * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeAvailableRecoveryTimeResponse DescribeAvailableRecoveryTime(DescribeAvailableRecoveryTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAvailableRecoveryTimeWithOptions(request, runtime);
        }

        /**
         * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
          * &CrossBackupId=14377
          * &<公共请求参数>
          * ```
          * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeAvailableRecoveryTimeResponse> DescribeAvailableRecoveryTimeAsync(DescribeAvailableRecoveryTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAvailableRecoveryTimeWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &StartTime=2019-05-30T12:10Z
          * &EndTime=2019-06-15T12:10Z
          * &<公共请求参数>
          * ```
          * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeCrossRegionLogBackupFilesResponse DescribeCrossRegionLogBackupFilesWithOptions(DescribeCrossRegionLogBackupFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossRegionLogBackupFilesResponse>(DoRequest("DescribeCrossRegionLogBackupFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &StartTime=2019-05-30T12:10Z
          * &EndTime=2019-06-15T12:10Z
          * &<公共请求参数>
          * ```
          * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeCrossRegionLogBackupFilesResponse> DescribeCrossRegionLogBackupFilesWithOptionsAsync(DescribeCrossRegionLogBackupFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossRegionLogBackupFilesResponse>(await DoRequestAsync("DescribeCrossRegionLogBackupFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &StartTime=2019-05-30T12:10Z
          * &EndTime=2019-06-15T12:10Z
          * &<公共请求参数>
          * ```
          * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeCrossRegionLogBackupFilesResponse DescribeCrossRegionLogBackupFiles(DescribeCrossRegionLogBackupFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCrossRegionLogBackupFilesWithOptions(request, runtime);
        }

        /**
         * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &StartTime=2019-05-30T12:10Z
          * &EndTime=2019-06-15T12:10Z
          * &<公共请求参数>
          * ```
          * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeCrossRegionLogBackupFilesResponse> DescribeCrossRegionLogBackupFilesAsync(DescribeCrossRegionLogBackupFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCrossRegionLogBackupFilesWithOptionsAsync(request, runtime);
        }

        /**
         * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public ModifyInstanceCrossBackupPolicyResponse ModifyInstanceCrossBackupPolicyWithOptions(ModifyInstanceCrossBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceCrossBackupPolicyResponse>(DoRequest("ModifyInstanceCrossBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<ModifyInstanceCrossBackupPolicyResponse> ModifyInstanceCrossBackupPolicyWithOptionsAsync(ModifyInstanceCrossBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceCrossBackupPolicyResponse>(await DoRequestAsync("ModifyInstanceCrossBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public ModifyInstanceCrossBackupPolicyResponse ModifyInstanceCrossBackupPolicy(ModifyInstanceCrossBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceCrossBackupPolicyWithOptions(request, runtime);
        }

        /**
         * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<ModifyInstanceCrossBackupPolicyResponse> ModifyInstanceCrossBackupPolicyAsync(ModifyInstanceCrossBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceCrossBackupPolicyWithOptionsAsync(request, runtime);
        }

        /**
         * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Intranet
          * &PayType=Prepaid
          * &RestoreType=0
          * &SecurityIPList=127.0.0.1
          * &BackupSetId=14358
          * &<公共请求参数>
          * ```
          * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public CreateDdrInstanceResponse CreateDdrInstanceWithOptions(CreateDdrInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDdrInstanceResponse>(DoRequest("CreateDdrInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Intranet
          * &PayType=Prepaid
          * &RestoreType=0
          * &SecurityIPList=127.0.0.1
          * &BackupSetId=14358
          * &<公共请求参数>
          * ```
          * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<CreateDdrInstanceResponse> CreateDdrInstanceWithOptionsAsync(CreateDdrInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDdrInstanceResponse>(await DoRequestAsync("CreateDdrInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Intranet
          * &PayType=Prepaid
          * &RestoreType=0
          * &SecurityIPList=127.0.0.1
          * &BackupSetId=14358
          * &<公共请求参数>
          * ```
          * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public CreateDdrInstanceResponse CreateDdrInstance(CreateDdrInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDdrInstanceWithOptions(request, runtime);
        }

        /**
         * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Intranet
          * &PayType=Prepaid
          * &RestoreType=0
          * &SecurityIPList=127.0.0.1
          * &BackupSetId=14358
          * &<公共请求参数>
          * ```
          * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<CreateDdrInstanceResponse> CreateDdrInstanceAsync(CreateDdrInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDdrInstanceWithOptionsAsync(request, runtime);
        }

        public DescribeCrossRegionBackupDBInstanceResponse DescribeCrossRegionBackupDBInstanceWithOptions(DescribeCrossRegionBackupDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossRegionBackupDBInstanceResponse>(DoRequest("DescribeCrossRegionBackupDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCrossRegionBackupDBInstanceResponse> DescribeCrossRegionBackupDBInstanceWithOptionsAsync(DescribeCrossRegionBackupDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossRegionBackupDBInstanceResponse>(await DoRequestAsync("DescribeCrossRegionBackupDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCrossRegionBackupDBInstanceResponse DescribeCrossRegionBackupDBInstance(DescribeCrossRegionBackupDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCrossRegionBackupDBInstanceWithOptions(request, runtime);
        }

        public async Task<DescribeCrossRegionBackupDBInstanceResponse> DescribeCrossRegionBackupDBInstanceAsync(DescribeCrossRegionBackupDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCrossRegionBackupDBInstanceWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeInstanceCrossBackupPolicyResponse DescribeInstanceCrossBackupPolicyWithOptions(DescribeInstanceCrossBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceCrossBackupPolicyResponse>(DoRequest("DescribeInstanceCrossBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeInstanceCrossBackupPolicyResponse> DescribeInstanceCrossBackupPolicyWithOptionsAsync(DescribeInstanceCrossBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceCrossBackupPolicyResponse>(await DoRequestAsync("DescribeInstanceCrossBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeInstanceCrossBackupPolicyResponse DescribeInstanceCrossBackupPolicy(DescribeInstanceCrossBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceCrossBackupPolicyWithOptions(request, runtime);
        }

        /**
         * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &<公共请求参数>
          * ```
          * description:   * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeInstanceCrossBackupPolicyResponse> DescribeInstanceCrossBackupPolicyAsync(DescribeInstanceCrossBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceCrossBackupPolicyWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &CrossBackupId=14562
          * &<公共请求参数>
          * ```
          * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeCrossRegionBackupsResponse DescribeCrossRegionBackupsWithOptions(DescribeCrossRegionBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossRegionBackupsResponse>(DoRequest("DescribeCrossRegionBackups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &CrossBackupId=14562
          * &<公共请求参数>
          * ```
          * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeCrossRegionBackupsResponse> DescribeCrossRegionBackupsWithOptionsAsync(DescribeCrossRegionBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCrossRegionBackupsResponse>(await DoRequestAsync("DescribeCrossRegionBackups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &CrossBackupId=14562
          * &<公共请求参数>
          * ```
          * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public DescribeCrossRegionBackupsResponse DescribeCrossRegionBackups(DescribeCrossRegionBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCrossRegionBackupsWithOptions(request, runtime);
        }

        /**
         * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
          * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
          * &CrossBackupId=14562
          * &<公共请求参数>
          * ```
          * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
          * 仅适用于如下实例：
          * * MySQL 5.7高可用本地SSD盘版
          * * MySQL 5.6
        
         */
        public async Task<DescribeCrossRegionBackupsResponse> DescribeCrossRegionBackupsAsync(DescribeCrossRegionBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCrossRegionBackupsWithOptionsAsync(request, runtime);
        }

        public DescribeReadDBInstanceDelayResponse DescribeReadDBInstanceDelayWithOptions(DescribeReadDBInstanceDelayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeReadDBInstanceDelayResponse>(DoRequest("DescribeReadDBInstanceDelay", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeReadDBInstanceDelayResponse> DescribeReadDBInstanceDelayWithOptionsAsync(DescribeReadDBInstanceDelayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeReadDBInstanceDelayResponse>(await DoRequestAsync("DescribeReadDBInstanceDelay", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeReadDBInstanceDelayResponse DescribeReadDBInstanceDelay(DescribeReadDBInstanceDelayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeReadDBInstanceDelayWithOptions(request, runtime);
        }

        public async Task<DescribeReadDBInstanceDelayResponse> DescribeReadDBInstanceDelayAsync(DescribeReadDBInstanceDelayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeReadDBInstanceDelayWithOptionsAsync(request, runtime);
        }

        public RestoreTableResponse RestoreTableWithOptions(RestoreTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestoreTableResponse>(DoRequest("RestoreTable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RestoreTableResponse> RestoreTableWithOptionsAsync(RestoreTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestoreTableResponse>(await DoRequestAsync("RestoreTable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RestoreTableResponse RestoreTable(RestoreTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestoreTableWithOptions(request, runtime);
        }

        public async Task<RestoreTableResponse> RestoreTableAsync(RestoreTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestoreTableWithOptionsAsync(request, runtime);
        }

        public CreateParameterGroupResponse CreateParameterGroupWithOptions(CreateParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateParameterGroupResponse>(DoRequest("CreateParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateParameterGroupResponse> CreateParameterGroupWithOptionsAsync(CreateParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateParameterGroupResponse>(await DoRequestAsync("CreateParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateParameterGroupResponse CreateParameterGroup(CreateParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateParameterGroupWithOptions(request, runtime);
        }

        public async Task<CreateParameterGroupResponse> CreateParameterGroupAsync(CreateParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateParameterGroupWithOptionsAsync(request, runtime);
        }

        public DescribeParameterGroupsResponse DescribeParameterGroupsWithOptions(DescribeParameterGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParameterGroupsResponse>(DoRequest("DescribeParameterGroups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeParameterGroupsResponse> DescribeParameterGroupsWithOptionsAsync(DescribeParameterGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParameterGroupsResponse>(await DoRequestAsync("DescribeParameterGroups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeParameterGroupsResponse DescribeParameterGroups(DescribeParameterGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeParameterGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeParameterGroupsResponse> DescribeParameterGroupsAsync(DescribeParameterGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeParameterGroupsWithOptionsAsync(request, runtime);
        }

        public CloneParameterGroupResponse CloneParameterGroupWithOptions(CloneParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CloneParameterGroupResponse>(DoRequest("CloneParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CloneParameterGroupResponse> CloneParameterGroupWithOptionsAsync(CloneParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CloneParameterGroupResponse>(await DoRequestAsync("CloneParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CloneParameterGroupResponse CloneParameterGroup(CloneParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CloneParameterGroupWithOptions(request, runtime);
        }

        public async Task<CloneParameterGroupResponse> CloneParameterGroupAsync(CloneParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CloneParameterGroupWithOptionsAsync(request, runtime);
        }

        public DescribeParameterGroupResponse DescribeParameterGroupWithOptions(DescribeParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParameterGroupResponse>(DoRequest("DescribeParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeParameterGroupResponse> DescribeParameterGroupWithOptionsAsync(DescribeParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParameterGroupResponse>(await DoRequestAsync("DescribeParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeParameterGroupResponse DescribeParameterGroup(DescribeParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeParameterGroupWithOptions(request, runtime);
        }

        public async Task<DescribeParameterGroupResponse> DescribeParameterGroupAsync(DescribeParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeParameterGroupWithOptionsAsync(request, runtime);
        }

        public ModifyParameterGroupResponse ModifyParameterGroupWithOptions(ModifyParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyParameterGroupResponse>(DoRequest("ModifyParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyParameterGroupResponse> ModifyParameterGroupWithOptionsAsync(ModifyParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyParameterGroupResponse>(await DoRequestAsync("ModifyParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyParameterGroupResponse ModifyParameterGroup(ModifyParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyParameterGroupWithOptions(request, runtime);
        }

        public async Task<ModifyParameterGroupResponse> ModifyParameterGroupAsync(ModifyParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyParameterGroupWithOptionsAsync(request, runtime);
        }

        public DeleteParameterGroupResponse DeleteParameterGroupWithOptions(DeleteParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteParameterGroupResponse>(DoRequest("DeleteParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteParameterGroupResponse> DeleteParameterGroupWithOptionsAsync(DeleteParameterGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteParameterGroupResponse>(await DoRequestAsync("DeleteParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteParameterGroupResponse DeleteParameterGroup(DeleteParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteParameterGroupWithOptions(request, runtime);
        }

        public async Task<DeleteParameterGroupResponse> DeleteParameterGroupAsync(DeleteParameterGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteParameterGroupWithOptionsAsync(request, runtime);
        }

        public ModifySQLCollectorRetentionResponse ModifySQLCollectorRetentionWithOptions(ModifySQLCollectorRetentionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySQLCollectorRetentionResponse>(DoRequest("ModifySQLCollectorRetention", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySQLCollectorRetentionResponse> ModifySQLCollectorRetentionWithOptionsAsync(ModifySQLCollectorRetentionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySQLCollectorRetentionResponse>(await DoRequestAsync("ModifySQLCollectorRetention", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifySQLCollectorRetentionResponse ModifySQLCollectorRetention(ModifySQLCollectorRetentionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySQLCollectorRetentionWithOptions(request, runtime);
        }

        public async Task<ModifySQLCollectorRetentionResponse> ModifySQLCollectorRetentionAsync(ModifySQLCollectorRetentionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySQLCollectorRetentionWithOptionsAsync(request, runtime);
        }

        public DescribeSQLCollectorRetentionResponse DescribeSQLCollectorRetentionWithOptions(DescribeSQLCollectorRetentionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLCollectorRetentionResponse>(DoRequest("DescribeSQLCollectorRetention", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSQLCollectorRetentionResponse> DescribeSQLCollectorRetentionWithOptionsAsync(DescribeSQLCollectorRetentionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLCollectorRetentionResponse>(await DoRequestAsync("DescribeSQLCollectorRetention", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSQLCollectorRetentionResponse DescribeSQLCollectorRetention(DescribeSQLCollectorRetentionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSQLCollectorRetentionWithOptions(request, runtime);
        }

        public async Task<DescribeSQLCollectorRetentionResponse> DescribeSQLCollectorRetentionAsync(DescribeSQLCollectorRetentionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSQLCollectorRetentionWithOptionsAsync(request, runtime);
        }

        public CheckInstanceExistResponse CheckInstanceExistWithOptions(CheckInstanceExistRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckInstanceExistResponse>(DoRequest("CheckInstanceExist", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckInstanceExistResponse> CheckInstanceExistWithOptionsAsync(CheckInstanceExistRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckInstanceExistResponse>(await DoRequestAsync("CheckInstanceExist", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CheckInstanceExistResponse CheckInstanceExist(CheckInstanceExistRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckInstanceExistWithOptions(request, runtime);
        }

        public async Task<CheckInstanceExistResponse> CheckInstanceExistAsync(CheckInstanceExistRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckInstanceExistWithOptionsAsync(request, runtime);
        }

        public DescribeLogBackupFilesResponse DescribeLogBackupFilesWithOptions(DescribeLogBackupFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLogBackupFilesResponse>(DoRequest("DescribeLogBackupFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLogBackupFilesResponse> DescribeLogBackupFilesWithOptionsAsync(DescribeLogBackupFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLogBackupFilesResponse>(await DoRequestAsync("DescribeLogBackupFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLogBackupFilesResponse DescribeLogBackupFiles(DescribeLogBackupFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLogBackupFilesWithOptions(request, runtime);
        }

        public async Task<DescribeLogBackupFilesResponse> DescribeLogBackupFilesAsync(DescribeLogBackupFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLogBackupFilesWithOptionsAsync(request, runtime);
        }

        /**
         * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
          * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &<Common request parameters>
          * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
          * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
          * > 
          * * Safe mode cannot be switched to normal mode.
          * * This operation is not applicable to SQL Server and MariaDB instances. 
        
         */
        public MigrateSecurityIPModeResponse MigrateSecurityIPModeWithOptions(MigrateSecurityIPModeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MigrateSecurityIPModeResponse>(DoRequest("MigrateSecurityIPMode", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
          * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &<Common request parameters>
          * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
          * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
          * > 
          * * Safe mode cannot be switched to normal mode.
          * * This operation is not applicable to SQL Server and MariaDB instances. 
        
         */
        public async Task<MigrateSecurityIPModeResponse> MigrateSecurityIPModeWithOptionsAsync(MigrateSecurityIPModeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MigrateSecurityIPModeResponse>(await DoRequestAsync("MigrateSecurityIPMode", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
          * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &<Common request parameters>
          * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
          * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
          * > 
          * * Safe mode cannot be switched to normal mode.
          * * This operation is not applicable to SQL Server and MariaDB instances. 
        
         */
        public MigrateSecurityIPModeResponse MigrateSecurityIPMode(MigrateSecurityIPModeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return MigrateSecurityIPModeWithOptions(request, runtime);
        }

        /**
         * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
          * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &<Common request parameters>
          * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
          * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
          * > 
          * * Safe mode cannot be switched to normal mode.
          * * This operation is not applicable to SQL Server and MariaDB instances. 
        
         */
        public async Task<MigrateSecurityIPModeResponse> MigrateSecurityIPModeAsync(MigrateSecurityIPModeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await MigrateSecurityIPModeWithOptionsAsync(request, runtime);
        }

        public SwitchDBInstanceVpcResponse SwitchDBInstanceVpcWithOptions(SwitchDBInstanceVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SwitchDBInstanceVpcResponse>(DoRequest("SwitchDBInstanceVpc", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SwitchDBInstanceVpcResponse> SwitchDBInstanceVpcWithOptionsAsync(SwitchDBInstanceVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SwitchDBInstanceVpcResponse>(await DoRequestAsync("SwitchDBInstanceVpc", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public SwitchDBInstanceVpcResponse SwitchDBInstanceVpc(SwitchDBInstanceVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SwitchDBInstanceVpcWithOptions(request, runtime);
        }

        public async Task<SwitchDBInstanceVpcResponse> SwitchDBInstanceVpcAsync(SwitchDBInstanceVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SwitchDBInstanceVpcWithOptionsAsync(request, runtime);
        }

        public DescribeCollationTimeZonesResponse DescribeCollationTimeZonesWithOptions(DescribeCollationTimeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCollationTimeZonesResponse>(DoRequest("DescribeCollationTimeZones", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCollationTimeZonesResponse> DescribeCollationTimeZonesWithOptionsAsync(DescribeCollationTimeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCollationTimeZonesResponse>(await DoRequestAsync("DescribeCollationTimeZones", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCollationTimeZonesResponse DescribeCollationTimeZones(DescribeCollationTimeZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCollationTimeZonesWithOptions(request, runtime);
        }

        public async Task<DescribeCollationTimeZonesResponse> DescribeCollationTimeZonesAsync(DescribeCollationTimeZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCollationTimeZonesWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceKeywordsResponse DescribeInstanceKeywordsWithOptions(DescribeInstanceKeywordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceKeywordsResponse>(DoRequest("DescribeInstanceKeywords", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceKeywordsResponse> DescribeInstanceKeywordsWithOptionsAsync(DescribeInstanceKeywordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceKeywordsResponse>(await DoRequestAsync("DescribeInstanceKeywords", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceKeywordsResponse DescribeInstanceKeywords(DescribeInstanceKeywordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceKeywordsWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceKeywordsResponse> DescribeInstanceKeywordsAsync(DescribeInstanceKeywordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceKeywordsWithOptionsAsync(request, runtime);
        }

        public ModifyCollationTimeZoneResponse ModifyCollationTimeZoneWithOptions(ModifyCollationTimeZoneRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCollationTimeZoneResponse>(DoRequest("ModifyCollationTimeZone", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCollationTimeZoneResponse> ModifyCollationTimeZoneWithOptionsAsync(ModifyCollationTimeZoneRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCollationTimeZoneResponse>(await DoRequestAsync("ModifyCollationTimeZone", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCollationTimeZoneResponse ModifyCollationTimeZone(ModifyCollationTimeZoneRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCollationTimeZoneWithOptions(request, runtime);
        }

        public async Task<ModifyCollationTimeZoneResponse> ModifyCollationTimeZoneAsync(ModifyCollationTimeZoneRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCollationTimeZoneWithOptionsAsync(request, runtime);
        }

        public DescribeBackupDatabaseResponse DescribeBackupDatabaseWithOptions(DescribeBackupDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupDatabaseResponse>(DoRequest("DescribeBackupDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBackupDatabaseResponse> DescribeBackupDatabaseWithOptionsAsync(DescribeBackupDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupDatabaseResponse>(await DoRequestAsync("DescribeBackupDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBackupDatabaseResponse DescribeBackupDatabase(DescribeBackupDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBackupDatabaseWithOptions(request, runtime);
        }

        public async Task<DescribeBackupDatabaseResponse> DescribeBackupDatabaseAsync(DescribeBackupDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBackupDatabaseWithOptionsAsync(request, runtime);
        }

        public CopyDatabaseBetweenInstancesResponse CopyDatabaseBetweenInstancesWithOptions(CopyDatabaseBetweenInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyDatabaseBetweenInstancesResponse>(DoRequest("CopyDatabaseBetweenInstances", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CopyDatabaseBetweenInstancesResponse> CopyDatabaseBetweenInstancesWithOptionsAsync(CopyDatabaseBetweenInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyDatabaseBetweenInstancesResponse>(await DoRequestAsync("CopyDatabaseBetweenInstances", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CopyDatabaseBetweenInstancesResponse CopyDatabaseBetweenInstances(CopyDatabaseBetweenInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CopyDatabaseBetweenInstancesWithOptions(request, runtime);
        }

        public async Task<CopyDatabaseBetweenInstancesResponse> CopyDatabaseBetweenInstancesAsync(CopyDatabaseBetweenInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CopyDatabaseBetweenInstancesWithOptionsAsync(request, runtime);
        }

        public RecoveryDBInstanceResponse RecoveryDBInstanceWithOptions(RecoveryDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecoveryDBInstanceResponse>(DoRequest("RecoveryDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecoveryDBInstanceResponse> RecoveryDBInstanceWithOptionsAsync(RecoveryDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecoveryDBInstanceResponse>(await DoRequestAsync("RecoveryDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RecoveryDBInstanceResponse RecoveryDBInstance(RecoveryDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RecoveryDBInstanceWithOptions(request, runtime);
        }

        public async Task<RecoveryDBInstanceResponse> RecoveryDBInstanceAsync(RecoveryDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RecoveryDBInstanceWithOptionsAsync(request, runtime);
        }

        public DescribeAvailableResourceResponse DescribeAvailableResourceWithOptions(DescribeAvailableResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableResourceResponse>(DoRequest("DescribeAvailableResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAvailableResourceResponse> DescribeAvailableResourceWithOptionsAsync(DescribeAvailableResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableResourceResponse>(await DoRequestAsync("DescribeAvailableResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAvailableResourceResponse DescribeAvailableResource(DescribeAvailableResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAvailableResourceWithOptions(request, runtime);
        }

        public async Task<DescribeAvailableResourceResponse> DescribeAvailableResourceAsync(DescribeAvailableResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAvailableResourceWithOptionsAsync(request, runtime);
        }

        public DestroyDBInstanceResponse DestroyDBInstanceWithOptions(DestroyDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DestroyDBInstanceResponse>(DoRequest("DestroyDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DestroyDBInstanceResponse> DestroyDBInstanceWithOptionsAsync(DestroyDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DestroyDBInstanceResponse>(await DoRequestAsync("DestroyDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DestroyDBInstanceResponse DestroyDBInstance(DestroyDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DestroyDBInstanceWithOptions(request, runtime);
        }

        public async Task<DestroyDBInstanceResponse> DestroyDBInstanceAsync(DestroyDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DestroyDBInstanceWithOptionsAsync(request, runtime);
        }

        public ModifyReadonlyInstanceDelayReplicationTimeResponse ModifyReadonlyInstanceDelayReplicationTimeWithOptions(ModifyReadonlyInstanceDelayReplicationTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReadonlyInstanceDelayReplicationTimeResponse>(DoRequest("ModifyReadonlyInstanceDelayReplicationTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyReadonlyInstanceDelayReplicationTimeResponse> ModifyReadonlyInstanceDelayReplicationTimeWithOptionsAsync(ModifyReadonlyInstanceDelayReplicationTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReadonlyInstanceDelayReplicationTimeResponse>(await DoRequestAsync("ModifyReadonlyInstanceDelayReplicationTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyReadonlyInstanceDelayReplicationTimeResponse ModifyReadonlyInstanceDelayReplicationTime(ModifyReadonlyInstanceDelayReplicationTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyReadonlyInstanceDelayReplicationTimeWithOptions(request, runtime);
        }

        public async Task<ModifyReadonlyInstanceDelayReplicationTimeResponse> ModifyReadonlyInstanceDelayReplicationTimeAsync(ModifyReadonlyInstanceDelayReplicationTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyReadonlyInstanceDelayReplicationTimeWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceProxyConfigurationResponse DescribeDBInstanceProxyConfigurationWithOptions(DescribeDBInstanceProxyConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceProxyConfigurationResponse>(DoRequest("DescribeDBInstanceProxyConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceProxyConfigurationResponse> DescribeDBInstanceProxyConfigurationWithOptionsAsync(DescribeDBInstanceProxyConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceProxyConfigurationResponse>(await DoRequestAsync("DescribeDBInstanceProxyConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceProxyConfigurationResponse DescribeDBInstanceProxyConfiguration(DescribeDBInstanceProxyConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceProxyConfigurationWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceProxyConfigurationResponse> DescribeDBInstanceProxyConfigurationAsync(DescribeDBInstanceProxyConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceProxyConfigurationWithOptionsAsync(request, runtime);
        }

        public CreateOnlineDatabaseTaskResponse CreateOnlineDatabaseTaskWithOptions(CreateOnlineDatabaseTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateOnlineDatabaseTaskResponse>(DoRequest("CreateOnlineDatabaseTask", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateOnlineDatabaseTaskResponse> CreateOnlineDatabaseTaskWithOptionsAsync(CreateOnlineDatabaseTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateOnlineDatabaseTaskResponse>(await DoRequestAsync("CreateOnlineDatabaseTask", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateOnlineDatabaseTaskResponse CreateOnlineDatabaseTask(CreateOnlineDatabaseTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateOnlineDatabaseTaskWithOptions(request, runtime);
        }

        public async Task<CreateOnlineDatabaseTaskResponse> CreateOnlineDatabaseTaskAsync(CreateOnlineDatabaseTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateOnlineDatabaseTaskWithOptionsAsync(request, runtime);
        }

        public UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersionWithOptions(UpgradeDBInstanceKernelVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeDBInstanceKernelVersionResponse>(DoRequest("UpgradeDBInstanceKernelVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpgradeDBInstanceKernelVersionResponse> UpgradeDBInstanceKernelVersionWithOptionsAsync(UpgradeDBInstanceKernelVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeDBInstanceKernelVersionResponse>(await DoRequestAsync("UpgradeDBInstanceKernelVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersion(UpgradeDBInstanceKernelVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeDBInstanceKernelVersionWithOptions(request, runtime);
        }

        public async Task<UpgradeDBInstanceKernelVersionResponse> UpgradeDBInstanceKernelVersionAsync(UpgradeDBInstanceKernelVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeDBInstanceKernelVersionWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceProxyConfigurationResponse ModifyDBInstanceProxyConfigurationWithOptions(ModifyDBInstanceProxyConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceProxyConfigurationResponse>(DoRequest("ModifyDBInstanceProxyConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceProxyConfigurationResponse> ModifyDBInstanceProxyConfigurationWithOptionsAsync(ModifyDBInstanceProxyConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceProxyConfigurationResponse>(await DoRequestAsync("ModifyDBInstanceProxyConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceProxyConfigurationResponse ModifyDBInstanceProxyConfiguration(ModifyDBInstanceProxyConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceProxyConfigurationWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceProxyConfigurationResponse> ModifyDBInstanceProxyConfigurationAsync(ModifyDBInstanceProxyConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceProxyConfigurationWithOptionsAsync(request, runtime);
        }

        public DescribeSecurityGroupConfigurationResponse DescribeSecurityGroupConfigurationWithOptions(DescribeSecurityGroupConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupConfigurationResponse>(DoRequest("DescribeSecurityGroupConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSecurityGroupConfigurationResponse> DescribeSecurityGroupConfigurationWithOptionsAsync(DescribeSecurityGroupConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupConfigurationResponse>(await DoRequestAsync("DescribeSecurityGroupConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSecurityGroupConfigurationResponse DescribeSecurityGroupConfiguration(DescribeSecurityGroupConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSecurityGroupConfigurationWithOptions(request, runtime);
        }

        public async Task<DescribeSecurityGroupConfigurationResponse> DescribeSecurityGroupConfigurationAsync(DescribeSecurityGroupConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSecurityGroupConfigurationWithOptionsAsync(request, runtime);
        }

        public ModifySecurityGroupConfigurationResponse ModifySecurityGroupConfigurationWithOptions(ModifySecurityGroupConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupConfigurationResponse>(DoRequest("ModifySecurityGroupConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySecurityGroupConfigurationResponse> ModifySecurityGroupConfigurationWithOptionsAsync(ModifySecurityGroupConfigurationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupConfigurationResponse>(await DoRequestAsync("ModifySecurityGroupConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifySecurityGroupConfigurationResponse ModifySecurityGroupConfiguration(ModifySecurityGroupConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySecurityGroupConfigurationWithOptions(request, runtime);
        }

        public async Task<ModifySecurityGroupConfigurationResponse> ModifySecurityGroupConfigurationAsync(ModifySecurityGroupConfigurationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySecurityGroupConfigurationWithOptionsAsync(request, runtime);
        }

        public DescribeOssDownloadsForSQLServerResponse DescribeOssDownloadsForSQLServerWithOptions(DescribeOssDownloadsForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeOssDownloadsForSQLServerResponse>(DoRequest("DescribeOssDownloadsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeOssDownloadsForSQLServerResponse> DescribeOssDownloadsForSQLServerWithOptionsAsync(DescribeOssDownloadsForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeOssDownloadsForSQLServerResponse>(await DoRequestAsync("DescribeOssDownloadsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeOssDownloadsForSQLServerResponse DescribeOssDownloadsForSQLServer(DescribeOssDownloadsForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeOssDownloadsForSQLServerWithOptions(request, runtime);
        }

        public async Task<DescribeOssDownloadsForSQLServerResponse> DescribeOssDownloadsForSQLServerAsync(DescribeOssDownloadsForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeOssDownloadsForSQLServerWithOptionsAsync(request, runtime);
        }

        public DescribeMigrateTasksForSQLServerResponse DescribeMigrateTasksForSQLServerWithOptions(DescribeMigrateTasksForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMigrateTasksForSQLServerResponse>(DoRequest("DescribeMigrateTasksForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMigrateTasksForSQLServerResponse> DescribeMigrateTasksForSQLServerWithOptionsAsync(DescribeMigrateTasksForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMigrateTasksForSQLServerResponse>(await DoRequestAsync("DescribeMigrateTasksForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMigrateTasksForSQLServerResponse DescribeMigrateTasksForSQLServer(DescribeMigrateTasksForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMigrateTasksForSQLServerWithOptions(request, runtime);
        }

        public async Task<DescribeMigrateTasksForSQLServerResponse> DescribeMigrateTasksForSQLServerAsync(DescribeMigrateTasksForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMigrateTasksForSQLServerWithOptionsAsync(request, runtime);
        }

        public CreateMigrateTaskForSQLServerResponse CreateMigrateTaskForSQLServerWithOptions(CreateMigrateTaskForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMigrateTaskForSQLServerResponse>(DoRequest("CreateMigrateTaskForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMigrateTaskForSQLServerResponse> CreateMigrateTaskForSQLServerWithOptionsAsync(CreateMigrateTaskForSQLServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMigrateTaskForSQLServerResponse>(await DoRequestAsync("CreateMigrateTaskForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateMigrateTaskForSQLServerResponse CreateMigrateTaskForSQLServer(CreateMigrateTaskForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMigrateTaskForSQLServerWithOptions(request, runtime);
        }

        public async Task<CreateMigrateTaskForSQLServerResponse> CreateMigrateTaskForSQLServerAsync(CreateMigrateTaskForSQLServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMigrateTaskForSQLServerWithOptionsAsync(request, runtime);
        }

        public CreateMigrateTaskResponse CreateMigrateTaskWithOptions(CreateMigrateTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMigrateTaskResponse>(DoRequest("CreateMigrateTask", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMigrateTaskResponse> CreateMigrateTaskWithOptionsAsync(CreateMigrateTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMigrateTaskResponse>(await DoRequestAsync("CreateMigrateTask", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateMigrateTaskResponse CreateMigrateTask(CreateMigrateTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMigrateTaskWithOptions(request, runtime);
        }

        public async Task<CreateMigrateTaskResponse> CreateMigrateTaskAsync(CreateMigrateTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMigrateTaskWithOptionsAsync(request, runtime);
        }

        public DescribeOssDownloadsResponse DescribeOssDownloadsWithOptions(DescribeOssDownloadsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeOssDownloadsResponse>(DoRequest("DescribeOssDownloads", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeOssDownloadsResponse> DescribeOssDownloadsWithOptionsAsync(DescribeOssDownloadsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeOssDownloadsResponse>(await DoRequestAsync("DescribeOssDownloads", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeOssDownloadsResponse DescribeOssDownloads(DescribeOssDownloadsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeOssDownloadsWithOptions(request, runtime);
        }

        public async Task<DescribeOssDownloadsResponse> DescribeOssDownloadsAsync(DescribeOssDownloadsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeOssDownloadsWithOptionsAsync(request, runtime);
        }

        public DescribeMigrateTasksResponse DescribeMigrateTasksWithOptions(DescribeMigrateTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMigrateTasksResponse>(DoRequest("DescribeMigrateTasks", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMigrateTasksResponse> DescribeMigrateTasksWithOptionsAsync(DescribeMigrateTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMigrateTasksResponse>(await DoRequestAsync("DescribeMigrateTasks", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMigrateTasksResponse DescribeMigrateTasks(DescribeMigrateTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMigrateTasksWithOptions(request, runtime);
        }

        public async Task<DescribeMigrateTasksResponse> DescribeMigrateTasksAsync(DescribeMigrateTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMigrateTasksWithOptionsAsync(request, runtime);
        }

        public CopyDatabaseResponse CopyDatabaseWithOptions(CopyDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyDatabaseResponse>(DoRequest("CopyDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CopyDatabaseResponse> CopyDatabaseWithOptionsAsync(CopyDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyDatabaseResponse>(await DoRequestAsync("CopyDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CopyDatabaseResponse CopyDatabase(CopyDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CopyDatabaseWithOptions(request, runtime);
        }

        public async Task<CopyDatabaseResponse> CopyDatabaseAsync(CopyDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CopyDatabaseWithOptionsAsync(request, runtime);
        }

        public ResetAccountResponse ResetAccountWithOptions(ResetAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountResponse>(DoRequest("ResetAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResetAccountResponse> ResetAccountWithOptionsAsync(ResetAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountResponse>(await DoRequestAsync("ResetAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ResetAccountResponse ResetAccount(ResetAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResetAccountWithOptions(request, runtime);
        }

        public async Task<ResetAccountResponse> ResetAccountAsync(ResetAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResetAccountWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstancesAsCsvResponse DescribeDBInstancesAsCsvWithOptions(DescribeDBInstancesAsCsvRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesAsCsvResponse>(DoRequest("DescribeDBInstancesAsCsv", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstancesAsCsvResponse> DescribeDBInstancesAsCsvWithOptionsAsync(DescribeDBInstancesAsCsvRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesAsCsvResponse>(await DoRequestAsync("DescribeDBInstancesAsCsv", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstancesAsCsvResponse DescribeDBInstancesAsCsv(DescribeDBInstancesAsCsvRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstancesAsCsvWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstancesAsCsvResponse> DescribeDBInstancesAsCsvAsync(DescribeDBInstancesAsCsvRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstancesAsCsvWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceNetworkExpireTimeResponse ModifyDBInstanceNetworkExpireTimeWithOptions(ModifyDBInstanceNetworkExpireTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceNetworkExpireTimeResponse>(DoRequest("ModifyDBInstanceNetworkExpireTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceNetworkExpireTimeResponse> ModifyDBInstanceNetworkExpireTimeWithOptionsAsync(ModifyDBInstanceNetworkExpireTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceNetworkExpireTimeResponse>(await DoRequestAsync("ModifyDBInstanceNetworkExpireTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceNetworkExpireTimeResponse ModifyDBInstanceNetworkExpireTime(ModifyDBInstanceNetworkExpireTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceNetworkExpireTimeWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceNetworkExpireTimeResponse> ModifyDBInstanceNetworkExpireTimeAsync(ModifyDBInstanceNetworkExpireTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceNetworkExpireTimeWithOptionsAsync(request, runtime);
        }

        public ModifyResourceGroupResponse ModifyResourceGroupWithOptions(ModifyResourceGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyResourceGroupResponse>(DoRequest("ModifyResourceGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyResourceGroupResponse> ModifyResourceGroupWithOptionsAsync(ModifyResourceGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyResourceGroupResponse>(await DoRequestAsync("ModifyResourceGroup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyResourceGroupResponse ModifyResourceGroup(ModifyResourceGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyResourceGroupWithOptions(request, runtime);
        }

        public async Task<ModifyResourceGroupResponse> ModifyResourceGroupAsync(ModifyResourceGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyResourceGroupWithOptionsAsync(request, runtime);
        }

        public DescribeRenewalPriceResponse DescribeRenewalPriceWithOptions(DescribeRenewalPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRenewalPriceResponse>(DoRequest("DescribeRenewalPrice", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRenewalPriceResponse> DescribeRenewalPriceWithOptionsAsync(DescribeRenewalPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRenewalPriceResponse>(await DoRequestAsync("DescribeRenewalPrice", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRenewalPriceResponse DescribeRenewalPrice(DescribeRenewalPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRenewalPriceWithOptions(request, runtime);
        }

        public async Task<DescribeRenewalPriceResponse> DescribeRenewalPriceAsync(DescribeRenewalPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRenewalPriceWithOptionsAsync(request, runtime);
        }

        public DescribePriceResponse DescribePriceWithOptions(DescribePriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePriceResponse>(DoRequest("DescribePrice", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribePriceResponse> DescribePriceWithOptionsAsync(DescribePriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePriceResponse>(await DoRequestAsync("DescribePrice", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribePriceResponse DescribePrice(DescribePriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePriceWithOptions(request, runtime);
        }

        public async Task<DescribePriceResponse> DescribePriceAsync(DescribePriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePriceWithOptionsAsync(request, runtime);
        }

        public RenewInstanceResponse RenewInstanceWithOptions(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(DoRequest("RenewInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RenewInstanceResponse> RenewInstanceWithOptionsAsync(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(await DoRequestAsync("RenewInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RenewInstanceResponse RenewInstance(RenewInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RenewInstanceWithOptions(request, runtime);
        }

        public async Task<RenewInstanceResponse> RenewInstanceAsync(RenewInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RenewInstanceWithOptionsAsync(request, runtime);
        }

        public CheckRecoveryConditionsResponse CheckRecoveryConditionsWithOptions(CheckRecoveryConditionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckRecoveryConditionsResponse>(DoRequest("CheckRecoveryConditions", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckRecoveryConditionsResponse> CheckRecoveryConditionsWithOptionsAsync(CheckRecoveryConditionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckRecoveryConditionsResponse>(await DoRequestAsync("CheckRecoveryConditions", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CheckRecoveryConditionsResponse CheckRecoveryConditions(CheckRecoveryConditionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckRecoveryConditionsWithOptions(request, runtime);
        }

        public async Task<CheckRecoveryConditionsResponse> CheckRecoveryConditionsAsync(CheckRecoveryConditionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckRecoveryConditionsWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceAutoRenewalAttributeResponse ModifyInstanceAutoRenewalAttributeWithOptions(ModifyInstanceAutoRenewalAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoRenewalAttributeResponse>(DoRequest("ModifyInstanceAutoRenewalAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceAutoRenewalAttributeResponse> ModifyInstanceAutoRenewalAttributeWithOptionsAsync(ModifyInstanceAutoRenewalAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoRenewalAttributeResponse>(await DoRequestAsync("ModifyInstanceAutoRenewalAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceAutoRenewalAttributeResponse ModifyInstanceAutoRenewalAttribute(ModifyInstanceAutoRenewalAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceAutoRenewalAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceAutoRenewalAttributeResponse> ModifyInstanceAutoRenewalAttributeAsync(ModifyInstanceAutoRenewalAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceAutoRenewalAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceAutoRenewalAttributeResponse DescribeInstanceAutoRenewalAttributeWithOptions(DescribeInstanceAutoRenewalAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAutoRenewalAttributeResponse>(DoRequest("DescribeInstanceAutoRenewalAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceAutoRenewalAttributeResponse> DescribeInstanceAutoRenewalAttributeWithOptionsAsync(DescribeInstanceAutoRenewalAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAutoRenewalAttributeResponse>(await DoRequestAsync("DescribeInstanceAutoRenewalAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceAutoRenewalAttributeResponse DescribeInstanceAutoRenewalAttribute(DescribeInstanceAutoRenewalAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceAutoRenewalAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceAutoRenewalAttributeResponse> DescribeInstanceAutoRenewalAttributeAsync(DescribeInstanceAutoRenewalAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceAutoRenewalAttributeWithOptionsAsync(request, runtime);
        }

        public ReleaseReadWriteSplittingConnectionResponse ReleaseReadWriteSplittingConnectionWithOptions(ReleaseReadWriteSplittingConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseReadWriteSplittingConnectionResponse>(DoRequest("ReleaseReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleaseReadWriteSplittingConnectionResponse> ReleaseReadWriteSplittingConnectionWithOptionsAsync(ReleaseReadWriteSplittingConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseReadWriteSplittingConnectionResponse>(await DoRequestAsync("ReleaseReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ReleaseReadWriteSplittingConnectionResponse ReleaseReadWriteSplittingConnection(ReleaseReadWriteSplittingConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReleaseReadWriteSplittingConnectionWithOptions(request, runtime);
        }

        public async Task<ReleaseReadWriteSplittingConnectionResponse> ReleaseReadWriteSplittingConnectionAsync(ReleaseReadWriteSplittingConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReleaseReadWriteSplittingConnectionWithOptionsAsync(request, runtime);
        }

        public ModifyReadWriteSplittingConnectionResponse ModifyReadWriteSplittingConnectionWithOptions(ModifyReadWriteSplittingConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReadWriteSplittingConnectionResponse>(DoRequest("ModifyReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyReadWriteSplittingConnectionResponse> ModifyReadWriteSplittingConnectionWithOptionsAsync(ModifyReadWriteSplittingConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReadWriteSplittingConnectionResponse>(await DoRequestAsync("ModifyReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyReadWriteSplittingConnectionResponse ModifyReadWriteSplittingConnection(ModifyReadWriteSplittingConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyReadWriteSplittingConnectionWithOptions(request, runtime);
        }

        public async Task<ModifyReadWriteSplittingConnectionResponse> ModifyReadWriteSplittingConnectionAsync(ModifyReadWriteSplittingConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyReadWriteSplittingConnectionWithOptionsAsync(request, runtime);
        }

        public CalculateDBInstanceWeightResponse CalculateDBInstanceWeightWithOptions(CalculateDBInstanceWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CalculateDBInstanceWeightResponse>(DoRequest("CalculateDBInstanceWeight", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CalculateDBInstanceWeightResponse> CalculateDBInstanceWeightWithOptionsAsync(CalculateDBInstanceWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CalculateDBInstanceWeightResponse>(await DoRequestAsync("CalculateDBInstanceWeight", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CalculateDBInstanceWeightResponse CalculateDBInstanceWeight(CalculateDBInstanceWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CalculateDBInstanceWeightWithOptions(request, runtime);
        }

        public async Task<CalculateDBInstanceWeightResponse> CalculateDBInstanceWeightAsync(CalculateDBInstanceWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CalculateDBInstanceWeightWithOptionsAsync(request, runtime);
        }

        public AllocateReadWriteSplittingConnectionResponse AllocateReadWriteSplittingConnectionWithOptions(AllocateReadWriteSplittingConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateReadWriteSplittingConnectionResponse>(DoRequest("AllocateReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateReadWriteSplittingConnectionResponse> AllocateReadWriteSplittingConnectionWithOptionsAsync(AllocateReadWriteSplittingConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateReadWriteSplittingConnectionResponse>(await DoRequestAsync("AllocateReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public AllocateReadWriteSplittingConnectionResponse AllocateReadWriteSplittingConnection(AllocateReadWriteSplittingConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateReadWriteSplittingConnectionWithOptions(request, runtime);
        }

        public async Task<AllocateReadWriteSplittingConnectionResponse> AllocateReadWriteSplittingConnectionAsync(AllocateReadWriteSplittingConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateReadWriteSplittingConnectionWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstancePayTypeResponse ModifyDBInstancePayTypeWithOptions(ModifyDBInstancePayTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstancePayTypeResponse>(DoRequest("ModifyDBInstancePayType", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstancePayTypeResponse> ModifyDBInstancePayTypeWithOptionsAsync(ModifyDBInstancePayTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstancePayTypeResponse>(await DoRequestAsync("ModifyDBInstancePayType", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstancePayTypeResponse ModifyDBInstancePayType(ModifyDBInstancePayTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstancePayTypeWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstancePayTypeResponse> ModifyDBInstancePayTypeAsync(ModifyDBInstancePayTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstancePayTypeWithOptionsAsync(request, runtime);
        }

        public DescribeCharacterSetNameResponse DescribeCharacterSetNameWithOptions(DescribeCharacterSetNameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCharacterSetNameResponse>(DoRequest("DescribeCharacterSetName", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCharacterSetNameResponse> DescribeCharacterSetNameWithOptionsAsync(DescribeCharacterSetNameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCharacterSetNameResponse>(await DoRequestAsync("DescribeCharacterSetName", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCharacterSetNameResponse DescribeCharacterSetName(DescribeCharacterSetNameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCharacterSetNameWithOptions(request, runtime);
        }

        public async Task<DescribeCharacterSetNameResponse> DescribeCharacterSetNameAsync(DescribeCharacterSetNameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCharacterSetNameWithOptionsAsync(request, runtime);
        }

        public DeleteBackupResponse DeleteBackupWithOptions(DeleteBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBackupResponse>(DoRequest("DeleteBackup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBackupResponse> DeleteBackupWithOptionsAsync(DeleteBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBackupResponse>(await DoRequestAsync("DeleteBackup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteBackupResponse DeleteBackup(DeleteBackupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteBackupWithOptions(request, runtime);
        }

        public async Task<DeleteBackupResponse> DeleteBackupAsync(DeleteBackupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteBackupWithOptionsAsync(request, runtime);
        }

        public DescribeDiagnosticReportListResponse DescribeDiagnosticReportListWithOptions(DescribeDiagnosticReportListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDiagnosticReportListResponse>(DoRequest("DescribeDiagnosticReportList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDiagnosticReportListResponse> DescribeDiagnosticReportListWithOptionsAsync(DescribeDiagnosticReportListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDiagnosticReportListResponse>(await DoRequestAsync("DescribeDiagnosticReportList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDiagnosticReportListResponse DescribeDiagnosticReportList(DescribeDiagnosticReportListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDiagnosticReportListWithOptions(request, runtime);
        }

        public async Task<DescribeDiagnosticReportListResponse> DescribeDiagnosticReportListAsync(DescribeDiagnosticReportListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDiagnosticReportListWithOptionsAsync(request, runtime);
        }

        public CreateDiagnosticReportResponse CreateDiagnosticReportWithOptions(CreateDiagnosticReportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDiagnosticReportResponse>(DoRequest("CreateDiagnosticReport", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDiagnosticReportResponse> CreateDiagnosticReportWithOptionsAsync(CreateDiagnosticReportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDiagnosticReportResponse>(await DoRequestAsync("CreateDiagnosticReport", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateDiagnosticReportResponse CreateDiagnosticReport(CreateDiagnosticReportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDiagnosticReportWithOptions(request, runtime);
        }

        public async Task<CreateDiagnosticReportResponse> CreateDiagnosticReportAsync(CreateDiagnosticReportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDiagnosticReportWithOptionsAsync(request, runtime);
        }

        public CloneDBInstanceResponse CloneDBInstanceWithOptions(CloneDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CloneDBInstanceResponse>(DoRequest("CloneDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CloneDBInstanceResponse> CloneDBInstanceWithOptionsAsync(CloneDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CloneDBInstanceResponse>(await DoRequestAsync("CloneDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CloneDBInstanceResponse CloneDBInstance(CloneDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CloneDBInstanceWithOptions(request, runtime);
        }

        public async Task<CloneDBInstanceResponse> CloneDBInstanceAsync(CloneDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CloneDBInstanceWithOptionsAsync(request, runtime);
        }

        /**
         * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeTags
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 调用本接口时限制条件如下：
          * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
          * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
        
         */
        public DescribeTagsResponse DescribeTagsWithOptions(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(DoRequest("DescribeTags", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeTags
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 调用本接口时限制条件如下：
          * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
          * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
        
         */
        public async Task<DescribeTagsResponse> DescribeTagsWithOptionsAsync(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(await DoRequestAsync("DescribeTags", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeTags
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 调用本接口时限制条件如下：
          * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
          * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
        
         */
        public DescribeTagsResponse DescribeTags(DescribeTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTagsWithOptions(request, runtime);
        }

        /**
         * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=DescribeTags
          * &RegionId=cn-hangzhou
          * &<公共请求参数>
          * ```
          * description:   * 调用本接口时限制条件如下：
          * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
          * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
        
         */
        public async Task<DescribeTagsResponse> DescribeTagsAsync(DescribeTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTagsWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceByTagsResponse DescribeDBInstanceByTagsWithOptions(DescribeDBInstanceByTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceByTagsResponse>(DoRequest("DescribeDBInstanceByTags", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceByTagsResponse> DescribeDBInstanceByTagsWithOptionsAsync(DescribeDBInstanceByTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceByTagsResponse>(await DoRequestAsync("DescribeDBInstanceByTags", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceByTagsResponse DescribeDBInstanceByTags(DescribeDBInstanceByTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceByTagsWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceByTagsResponse> DescribeDBInstanceByTagsAsync(DescribeDBInstanceByTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceByTagsWithOptionsAsync(request, runtime);
        }

        public RevokeOperatorPermissionResponse RevokeOperatorPermissionWithOptions(RevokeOperatorPermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeOperatorPermissionResponse>(DoRequest("RevokeOperatorPermission", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RevokeOperatorPermissionResponse> RevokeOperatorPermissionWithOptionsAsync(RevokeOperatorPermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeOperatorPermissionResponse>(await DoRequestAsync("RevokeOperatorPermission", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RevokeOperatorPermissionResponse RevokeOperatorPermission(RevokeOperatorPermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RevokeOperatorPermissionWithOptions(request, runtime);
        }

        public async Task<RevokeOperatorPermissionResponse> RevokeOperatorPermissionAsync(RevokeOperatorPermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RevokeOperatorPermissionWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceTDEResponse ModifyDBInstanceTDEWithOptions(ModifyDBInstanceTDERequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceTDEResponse>(DoRequest("ModifyDBInstanceTDE", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceTDEResponse> ModifyDBInstanceTDEWithOptionsAsync(ModifyDBInstanceTDERequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceTDEResponse>(await DoRequestAsync("ModifyDBInstanceTDE", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceTDEResponse ModifyDBInstanceTDE(ModifyDBInstanceTDERequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceTDEWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceTDEResponse> ModifyDBInstanceTDEAsync(ModifyDBInstanceTDERequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceTDEWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceSSLResponse ModifyDBInstanceSSLWithOptions(ModifyDBInstanceSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceSSLResponse>(DoRequest("ModifyDBInstanceSSL", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceSSLResponse> ModifyDBInstanceSSLWithOptionsAsync(ModifyDBInstanceSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceSSLResponse>(await DoRequestAsync("ModifyDBInstanceSSL", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceSSLResponse ModifyDBInstanceSSL(ModifyDBInstanceSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceSSLWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceSSLResponse> ModifyDBInstanceSSLAsync(ModifyDBInstanceSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceSSLWithOptionsAsync(request, runtime);
        }

        public GrantOperatorPermissionResponse GrantOperatorPermissionWithOptions(GrantOperatorPermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantOperatorPermissionResponse>(DoRequest("GrantOperatorPermission", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GrantOperatorPermissionResponse> GrantOperatorPermissionWithOptionsAsync(GrantOperatorPermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantOperatorPermissionResponse>(await DoRequestAsync("GrantOperatorPermission", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public GrantOperatorPermissionResponse GrantOperatorPermission(GrantOperatorPermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GrantOperatorPermissionWithOptions(request, runtime);
        }

        public async Task<GrantOperatorPermissionResponse> GrantOperatorPermissionAsync(GrantOperatorPermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GrantOperatorPermissionWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceTDEResponse DescribeDBInstanceTDEWithOptions(DescribeDBInstanceTDERequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceTDEResponse>(DoRequest("DescribeDBInstanceTDE", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceTDEResponse> DescribeDBInstanceTDEWithOptionsAsync(DescribeDBInstanceTDERequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceTDEResponse>(await DoRequestAsync("DescribeDBInstanceTDE", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceTDEResponse DescribeDBInstanceTDE(DescribeDBInstanceTDERequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceTDEWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceTDEResponse> DescribeDBInstanceTDEAsync(DescribeDBInstanceTDERequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceTDEWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceSSLResponse DescribeDBInstanceSSLWithOptions(DescribeDBInstanceSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceSSLResponse>(DoRequest("DescribeDBInstanceSSL", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceSSLResponse> DescribeDBInstanceSSLWithOptionsAsync(DescribeDBInstanceSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceSSLResponse>(await DoRequestAsync("DescribeDBInstanceSSL", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceSSLResponse DescribeDBInstanceSSL(DescribeDBInstanceSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceSSLWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceSSLResponse> DescribeDBInstanceSSLAsync(DescribeDBInstanceSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceSSLWithOptionsAsync(request, runtime);
        }

        public DescribeSQLLogFilesResponse DescribeSQLLogFilesWithOptions(DescribeSQLLogFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogFilesResponse>(DoRequest("DescribeSQLLogFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSQLLogFilesResponse> DescribeSQLLogFilesWithOptionsAsync(DescribeSQLLogFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogFilesResponse>(await DoRequestAsync("DescribeSQLLogFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSQLLogFilesResponse DescribeSQLLogFiles(DescribeSQLLogFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSQLLogFilesWithOptions(request, runtime);
        }

        public async Task<DescribeSQLLogFilesResponse> DescribeSQLLogFilesAsync(DescribeSQLLogFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSQLLogFilesWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceMonitorResponse ModifyDBInstanceMonitorWithOptions(ModifyDBInstanceMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceMonitorResponse>(DoRequest("ModifyDBInstanceMonitor", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceMonitorResponse> ModifyDBInstanceMonitorWithOptionsAsync(ModifyDBInstanceMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceMonitorResponse>(await DoRequestAsync("ModifyDBInstanceMonitor", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceMonitorResponse ModifyDBInstanceMonitor(ModifyDBInstanceMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceMonitorWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceMonitorResponse> ModifyDBInstanceMonitorAsync(ModifyDBInstanceMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceMonitorWithOptionsAsync(request, runtime);
        }

        public SwitchDBInstanceHAResponse SwitchDBInstanceHAWithOptions(SwitchDBInstanceHARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SwitchDBInstanceHAResponse>(DoRequest("SwitchDBInstanceHA", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SwitchDBInstanceHAResponse> SwitchDBInstanceHAWithOptionsAsync(SwitchDBInstanceHARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SwitchDBInstanceHAResponse>(await DoRequestAsync("SwitchDBInstanceHA", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public SwitchDBInstanceHAResponse SwitchDBInstanceHA(SwitchDBInstanceHARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SwitchDBInstanceHAWithOptions(request, runtime);
        }

        public async Task<SwitchDBInstanceHAResponse> SwitchDBInstanceHAAsync(SwitchDBInstanceHARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SwitchDBInstanceHAWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceMonitorResponse DescribeDBInstanceMonitorWithOptions(DescribeDBInstanceMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceMonitorResponse>(DoRequest("DescribeDBInstanceMonitor", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceMonitorResponse> DescribeDBInstanceMonitorWithOptionsAsync(DescribeDBInstanceMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceMonitorResponse>(await DoRequestAsync("DescribeDBInstanceMonitor", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceMonitorResponse DescribeDBInstanceMonitor(DescribeDBInstanceMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceMonitorWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceMonitorResponse> DescribeDBInstanceMonitorAsync(DescribeDBInstanceMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceMonitorWithOptionsAsync(request, runtime);
        }

        public DescribeSQLCollectorPolicyResponse DescribeSQLCollectorPolicyWithOptions(DescribeSQLCollectorPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLCollectorPolicyResponse>(DoRequest("DescribeSQLCollectorPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSQLCollectorPolicyResponse> DescribeSQLCollectorPolicyWithOptionsAsync(DescribeSQLCollectorPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLCollectorPolicyResponse>(await DoRequestAsync("DescribeSQLCollectorPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSQLCollectorPolicyResponse DescribeSQLCollectorPolicy(DescribeSQLCollectorPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSQLCollectorPolicyWithOptions(request, runtime);
        }

        public async Task<DescribeSQLCollectorPolicyResponse> DescribeSQLCollectorPolicyAsync(DescribeSQLCollectorPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSQLCollectorPolicyWithOptionsAsync(request, runtime);
        }

        public ModifySQLCollectorPolicyResponse ModifySQLCollectorPolicyWithOptions(ModifySQLCollectorPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySQLCollectorPolicyResponse>(DoRequest("ModifySQLCollectorPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySQLCollectorPolicyResponse> ModifySQLCollectorPolicyWithOptionsAsync(ModifySQLCollectorPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySQLCollectorPolicyResponse>(await DoRequestAsync("ModifySQLCollectorPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifySQLCollectorPolicyResponse ModifySQLCollectorPolicy(ModifySQLCollectorPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySQLCollectorPolicyWithOptions(request, runtime);
        }

        public async Task<ModifySQLCollectorPolicyResponse> ModifySQLCollectorPolicyAsync(ModifySQLCollectorPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySQLCollectorPolicyWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceHAConfigResponse ModifyDBInstanceHAConfigWithOptions(ModifyDBInstanceHAConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceHAConfigResponse>(DoRequest("ModifyDBInstanceHAConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceHAConfigResponse> ModifyDBInstanceHAConfigWithOptionsAsync(ModifyDBInstanceHAConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceHAConfigResponse>(await DoRequestAsync("ModifyDBInstanceHAConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceHAConfigResponse ModifyDBInstanceHAConfig(ModifyDBInstanceHAConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceHAConfigWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceHAConfigResponse> ModifyDBInstanceHAConfigAsync(ModifyDBInstanceHAConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceHAConfigWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceHAConfigResponse DescribeDBInstanceHAConfigWithOptions(DescribeDBInstanceHAConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceHAConfigResponse>(DoRequest("DescribeDBInstanceHAConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceHAConfigResponse> DescribeDBInstanceHAConfigWithOptionsAsync(DescribeDBInstanceHAConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceHAConfigResponse>(await DoRequestAsync("DescribeDBInstanceHAConfig", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceHAConfigResponse DescribeDBInstanceHAConfig(DescribeDBInstanceHAConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceHAConfigWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceHAConfigResponse> DescribeDBInstanceHAConfigAsync(DescribeDBInstanceHAConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceHAConfigWithOptionsAsync(request, runtime);
        }

        public DescribeSQLReportsResponse DescribeSQLReportsWithOptions(DescribeSQLReportsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLReportsResponse>(DoRequest("DescribeSQLReports", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSQLReportsResponse> DescribeSQLReportsWithOptionsAsync(DescribeSQLReportsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLReportsResponse>(await DoRequestAsync("DescribeSQLReports", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSQLReportsResponse DescribeSQLReports(DescribeSQLReportsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSQLReportsWithOptions(request, runtime);
        }

        public async Task<DescribeSQLReportsResponse> DescribeSQLReportsAsync(DescribeSQLReportsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSQLReportsWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceIPArrayListResponse DescribeDBInstanceIPArrayListWithOptions(DescribeDBInstanceIPArrayListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceIPArrayListResponse>(DoRequest("DescribeDBInstanceIPArrayList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceIPArrayListResponse> DescribeDBInstanceIPArrayListWithOptionsAsync(DescribeDBInstanceIPArrayListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceIPArrayListResponse>(await DoRequestAsync("DescribeDBInstanceIPArrayList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceIPArrayListResponse DescribeDBInstanceIPArrayList(DescribeDBInstanceIPArrayListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceIPArrayListWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceIPArrayListResponse> DescribeDBInstanceIPArrayListAsync(DescribeDBInstanceIPArrayListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceIPArrayListWithOptionsAsync(request, runtime);
        }

        public DescribeSQLLogReportListResponse DescribeSQLLogReportListWithOptions(DescribeSQLLogReportListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogReportListResponse>(DoRequest("DescribeSQLLogReportList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSQLLogReportListResponse> DescribeSQLLogReportListWithOptionsAsync(DescribeSQLLogReportListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogReportListResponse>(await DoRequestAsync("DescribeSQLLogReportList", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSQLLogReportListResponse DescribeSQLLogReportList(DescribeSQLLogReportListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSQLLogReportListWithOptions(request, runtime);
        }

        public async Task<DescribeSQLLogReportListResponse> DescribeSQLLogReportListAsync(DescribeSQLLogReportListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSQLLogReportListWithOptionsAsync(request, runtime);
        }

        public ResetAccountForPGResponse ResetAccountForPGWithOptions(ResetAccountForPGRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountForPGResponse>(DoRequest("ResetAccountForPG", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResetAccountForPGResponse> ResetAccountForPGWithOptionsAsync(ResetAccountForPGRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountForPGResponse>(await DoRequestAsync("ResetAccountForPG", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ResetAccountForPGResponse ResetAccountForPG(ResetAccountForPGRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResetAccountForPGWithOptions(request, runtime);
        }

        public async Task<ResetAccountForPGResponse> ResetAccountForPGAsync(ResetAccountForPGRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResetAccountForPGWithOptionsAsync(request, runtime);
        }

        public UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersionWithOptions(UpgradeDBInstanceEngineVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeDBInstanceEngineVersionResponse>(DoRequest("UpgradeDBInstanceEngineVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpgradeDBInstanceEngineVersionResponse> UpgradeDBInstanceEngineVersionWithOptionsAsync(UpgradeDBInstanceEngineVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeDBInstanceEngineVersionResponse>(await DoRequestAsync("UpgradeDBInstanceEngineVersion", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersion(UpgradeDBInstanceEngineVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeDBInstanceEngineVersionWithOptions(request, runtime);
        }

        public async Task<UpgradeDBInstanceEngineVersionResponse> UpgradeDBInstanceEngineVersionAsync(UpgradeDBInstanceEngineVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeDBInstanceEngineVersionWithOptionsAsync(request, runtime);
        }

        public RevokeAccountPrivilegeResponse RevokeAccountPrivilegeWithOptions(RevokeAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeAccountPrivilegeResponse>(DoRequest("RevokeAccountPrivilege", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RevokeAccountPrivilegeResponse> RevokeAccountPrivilegeWithOptionsAsync(RevokeAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeAccountPrivilegeResponse>(await DoRequestAsync("RevokeAccountPrivilege", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RevokeAccountPrivilegeResponse RevokeAccountPrivilege(RevokeAccountPrivilegeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RevokeAccountPrivilegeWithOptions(request, runtime);
        }

        public async Task<RevokeAccountPrivilegeResponse> RevokeAccountPrivilegeAsync(RevokeAccountPrivilegeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RevokeAccountPrivilegeWithOptionsAsync(request, runtime);
        }

        public RestartDBInstanceResponse RestartDBInstanceWithOptions(RestartDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartDBInstanceResponse>(DoRequest("RestartDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RestartDBInstanceResponse> RestartDBInstanceWithOptionsAsync(RestartDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartDBInstanceResponse>(await DoRequestAsync("RestartDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public RestartDBInstanceResponse RestartDBInstance(RestartDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestartDBInstanceWithOptions(request, runtime);
        }

        public async Task<RestartDBInstanceResponse> RestartDBInstanceAsync(RestartDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestartDBInstanceWithOptionsAsync(request, runtime);
        }

        public ResetAccountPasswordResponse ResetAccountPasswordWithOptions(ResetAccountPasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountPasswordResponse>(DoRequest("ResetAccountPassword", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResetAccountPasswordResponse> ResetAccountPasswordWithOptionsAsync(ResetAccountPasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountPasswordResponse>(await DoRequestAsync("ResetAccountPassword", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ResetAccountPasswordResponse ResetAccountPassword(ResetAccountPasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResetAccountPasswordWithOptions(request, runtime);
        }

        public async Task<ResetAccountPasswordResponse> ResetAccountPasswordAsync(ResetAccountPasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResetAccountPasswordWithOptionsAsync(request, runtime);
        }

        /**
         * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &Tag.1.key=test
          * &<公共请求参数>
          * ```
          * description:   * 限制条件如下：
          * * 单次最多支持解绑10个标签；
          * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
          * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
          * * 必须传入至少一组标签或者单独的一个标签键。
        
         */
        public RemoveTagsFromResourceResponse RemoveTagsFromResourceWithOptions(RemoveTagsFromResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsFromResourceResponse>(DoRequest("RemoveTagsFromResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &Tag.1.key=test
          * &<公共请求参数>
          * ```
          * description:   * 限制条件如下：
          * * 单次最多支持解绑10个标签；
          * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
          * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
          * * 必须传入至少一组标签或者单独的一个标签键。
        
         */
        public async Task<RemoveTagsFromResourceResponse> RemoveTagsFromResourceWithOptionsAsync(RemoveTagsFromResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsFromResourceResponse>(await DoRequestAsync("RemoveTagsFromResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &Tag.1.key=test
          * &<公共请求参数>
          * ```
          * description:   * 限制条件如下：
          * * 单次最多支持解绑10个标签；
          * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
          * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
          * * 必须传入至少一组标签或者单独的一个标签键。
        
         */
        public RemoveTagsFromResourceResponse RemoveTagsFromResource(RemoveTagsFromResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveTagsFromResourceWithOptions(request, runtime);
        }

        /**
         * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
          * &DBInstanceId=rm-uf6wjk5xxxxxxx
          * &RegionId=cn-hangzhou
          * &Tag.1.key=test
          * &<公共请求参数>
          * ```
          * description:   * 限制条件如下：
          * * 单次最多支持解绑10个标签；
          * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
          * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
          * * 必须传入至少一组标签或者单独的一个标签键。
        
         */
        public async Task<RemoveTagsFromResourceResponse> RemoveTagsFromResourceAsync(RemoveTagsFromResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveTagsFromResourceWithOptionsAsync(request, runtime);
        }

        public PurgeDBInstanceLogResponse PurgeDBInstanceLogWithOptions(PurgeDBInstanceLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PurgeDBInstanceLogResponse>(DoRequest("PurgeDBInstanceLog", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PurgeDBInstanceLogResponse> PurgeDBInstanceLogWithOptionsAsync(PurgeDBInstanceLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PurgeDBInstanceLogResponse>(await DoRequestAsync("PurgeDBInstanceLog", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public PurgeDBInstanceLogResponse PurgeDBInstanceLog(PurgeDBInstanceLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PurgeDBInstanceLogWithOptions(request, runtime);
        }

        public async Task<PurgeDBInstanceLogResponse> PurgeDBInstanceLogAsync(PurgeDBInstanceLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PurgeDBInstanceLogWithOptionsAsync(request, runtime);
        }

        public ModifySecurityIpsResponse ModifySecurityIpsWithOptions(ModifySecurityIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityIpsResponse>(DoRequest("ModifySecurityIps", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySecurityIpsResponse> ModifySecurityIpsWithOptionsAsync(ModifySecurityIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityIpsResponse>(await DoRequestAsync("ModifySecurityIps", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifySecurityIpsResponse ModifySecurityIps(ModifySecurityIpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySecurityIpsWithOptions(request, runtime);
        }

        public async Task<ModifySecurityIpsResponse> ModifySecurityIpsAsync(ModifySecurityIpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySecurityIpsWithOptionsAsync(request, runtime);
        }

        public ModifyParameterResponse ModifyParameterWithOptions(ModifyParameterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyParameterResponse>(DoRequest("ModifyParameter", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyParameterResponse> ModifyParameterWithOptionsAsync(ModifyParameterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyParameterResponse>(await DoRequestAsync("ModifyParameter", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyParameterResponse ModifyParameter(ModifyParameterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyParameterWithOptions(request, runtime);
        }

        public async Task<ModifyParameterResponse> ModifyParameterAsync(ModifyParameterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyParameterWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceSpecResponse ModifyDBInstanceSpecWithOptions(ModifyDBInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceSpecResponse>(DoRequest("ModifyDBInstanceSpec", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceSpecResponse> ModifyDBInstanceSpecWithOptionsAsync(ModifyDBInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceSpecResponse>(await DoRequestAsync("ModifyDBInstanceSpec", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(ModifyDBInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceSpecWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceSpecResponse> ModifyDBInstanceSpecAsync(ModifyDBInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceSpecWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceMaintainTimeResponse ModifyDBInstanceMaintainTimeWithOptions(ModifyDBInstanceMaintainTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceMaintainTimeResponse>(DoRequest("ModifyDBInstanceMaintainTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceMaintainTimeResponse> ModifyDBInstanceMaintainTimeWithOptionsAsync(ModifyDBInstanceMaintainTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceMaintainTimeResponse>(await DoRequestAsync("ModifyDBInstanceMaintainTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceMaintainTimeResponse ModifyDBInstanceMaintainTime(ModifyDBInstanceMaintainTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceMaintainTimeWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceMaintainTimeResponse> ModifyDBInstanceMaintainTimeAsync(ModifyDBInstanceMaintainTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceMaintainTimeWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescriptionWithOptions(ModifyDBInstanceDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceDescriptionResponse>(DoRequest("ModifyDBInstanceDescription", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceDescriptionResponse> ModifyDBInstanceDescriptionWithOptionsAsync(ModifyDBInstanceDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceDescriptionResponse>(await DoRequestAsync("ModifyDBInstanceDescription", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescription(ModifyDBInstanceDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceDescriptionWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceDescriptionResponse> ModifyDBInstanceDescriptionAsync(ModifyDBInstanceDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceDescriptionWithOptionsAsync(request, runtime);
        }

        public ModifyDBDescriptionResponse ModifyDBDescriptionWithOptions(ModifyDBDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBDescriptionResponse>(DoRequest("ModifyDBDescription", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBDescriptionResponse> ModifyDBDescriptionWithOptionsAsync(ModifyDBDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBDescriptionResponse>(await DoRequestAsync("ModifyDBDescription", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBDescriptionResponse ModifyDBDescription(ModifyDBDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBDescriptionWithOptions(request, runtime);
        }

        public async Task<ModifyDBDescriptionResponse> ModifyDBDescriptionAsync(ModifyDBDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBDescriptionWithOptionsAsync(request, runtime);
        }

        public ModifyBackupPolicyResponse ModifyBackupPolicyWithOptions(ModifyBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBackupPolicyResponse>(DoRequest("ModifyBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyBackupPolicyResponse> ModifyBackupPolicyWithOptionsAsync(ModifyBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBackupPolicyResponse>(await DoRequestAsync("ModifyBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyBackupPolicyResponse ModifyBackupPolicy(ModifyBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyBackupPolicyWithOptions(request, runtime);
        }

        public async Task<ModifyBackupPolicyResponse> ModifyBackupPolicyAsync(ModifyBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyBackupPolicyWithOptionsAsync(request, runtime);
        }

        public ModifyAccountDescriptionResponse ModifyAccountDescriptionWithOptions(ModifyAccountDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccountDescriptionResponse>(DoRequest("ModifyAccountDescription", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAccountDescriptionResponse> ModifyAccountDescriptionWithOptionsAsync(ModifyAccountDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccountDescriptionResponse>(await DoRequestAsync("ModifyAccountDescription", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAccountDescriptionResponse ModifyAccountDescription(ModifyAccountDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAccountDescriptionWithOptions(request, runtime);
        }

        public async Task<ModifyAccountDescriptionResponse> ModifyAccountDescriptionAsync(ModifyAccountDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAccountDescriptionWithOptionsAsync(request, runtime);
        }

        public MigrateToOtherZoneResponse MigrateToOtherZoneWithOptions(MigrateToOtherZoneRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MigrateToOtherZoneResponse>(DoRequest("MigrateToOtherZone", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<MigrateToOtherZoneResponse> MigrateToOtherZoneWithOptionsAsync(MigrateToOtherZoneRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MigrateToOtherZoneResponse>(await DoRequestAsync("MigrateToOtherZone", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public MigrateToOtherZoneResponse MigrateToOtherZone(MigrateToOtherZoneRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return MigrateToOtherZoneWithOptions(request, runtime);
        }

        public async Task<MigrateToOtherZoneResponse> MigrateToOtherZoneAsync(MigrateToOtherZoneRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await MigrateToOtherZoneWithOptionsAsync(request, runtime);
        }

        public ImportDatabaseBetweenInstancesResponse ImportDatabaseBetweenInstancesWithOptions(ImportDatabaseBetweenInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportDatabaseBetweenInstancesResponse>(DoRequest("ImportDatabaseBetweenInstances", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ImportDatabaseBetweenInstancesResponse> ImportDatabaseBetweenInstancesWithOptionsAsync(ImportDatabaseBetweenInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportDatabaseBetweenInstancesResponse>(await DoRequestAsync("ImportDatabaseBetweenInstances", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ImportDatabaseBetweenInstancesResponse ImportDatabaseBetweenInstances(ImportDatabaseBetweenInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ImportDatabaseBetweenInstancesWithOptions(request, runtime);
        }

        public async Task<ImportDatabaseBetweenInstancesResponse> ImportDatabaseBetweenInstancesAsync(ImportDatabaseBetweenInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ImportDatabaseBetweenInstancesWithOptionsAsync(request, runtime);
        }

        public GrantAccountPrivilegeResponse GrantAccountPrivilegeWithOptions(GrantAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantAccountPrivilegeResponse>(DoRequest("GrantAccountPrivilege", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GrantAccountPrivilegeResponse> GrantAccountPrivilegeWithOptionsAsync(GrantAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantAccountPrivilegeResponse>(await DoRequestAsync("GrantAccountPrivilege", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public GrantAccountPrivilegeResponse GrantAccountPrivilege(GrantAccountPrivilegeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GrantAccountPrivilegeWithOptions(request, runtime);
        }

        public async Task<GrantAccountPrivilegeResponse> GrantAccountPrivilegeAsync(GrantAccountPrivilegeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GrantAccountPrivilegeWithOptionsAsync(request, runtime);
        }

        public DescribeTasksResponse DescribeTasksWithOptions(DescribeTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTasksResponse>(DoRequest("DescribeTasks", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTasksResponse> DescribeTasksWithOptionsAsync(DescribeTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTasksResponse>(await DoRequestAsync("DescribeTasks", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTasksResponse DescribeTasks(DescribeTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTasksWithOptions(request, runtime);
        }

        public async Task<DescribeTasksResponse> DescribeTasksAsync(DescribeTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTasksWithOptionsAsync(request, runtime);
        }

        public DescribeSQLLogReportsResponse DescribeSQLLogReportsWithOptions(DescribeSQLLogReportsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogReportsResponse>(DoRequest("DescribeSQLLogReports", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSQLLogReportsResponse> DescribeSQLLogReportsWithOptionsAsync(DescribeSQLLogReportsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogReportsResponse>(await DoRequestAsync("DescribeSQLLogReports", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSQLLogReportsResponse DescribeSQLLogReports(DescribeSQLLogReportsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSQLLogReportsWithOptions(request, runtime);
        }

        public async Task<DescribeSQLLogReportsResponse> DescribeSQLLogReportsAsync(DescribeSQLLogReportsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSQLLogReportsWithOptionsAsync(request, runtime);
        }

        public DescribeSQLLogRecordsResponse DescribeSQLLogRecordsWithOptions(DescribeSQLLogRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogRecordsResponse>(DoRequest("DescribeSQLLogRecords", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSQLLogRecordsResponse> DescribeSQLLogRecordsWithOptionsAsync(DescribeSQLLogRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSQLLogRecordsResponse>(await DoRequestAsync("DescribeSQLLogRecords", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSQLLogRecordsResponse DescribeSQLLogRecords(DescribeSQLLogRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSQLLogRecordsWithOptions(request, runtime);
        }

        public async Task<DescribeSQLLogRecordsResponse> DescribeSQLLogRecordsAsync(DescribeSQLLogRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSQLLogRecordsWithOptionsAsync(request, runtime);
        }

        public DescribeSlowLogsResponse DescribeSlowLogsWithOptions(DescribeSlowLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSlowLogsResponse>(DoRequest("DescribeSlowLogs", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSlowLogsResponse> DescribeSlowLogsWithOptionsAsync(DescribeSlowLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSlowLogsResponse>(await DoRequestAsync("DescribeSlowLogs", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSlowLogsResponse DescribeSlowLogs(DescribeSlowLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSlowLogsWithOptions(request, runtime);
        }

        public async Task<DescribeSlowLogsResponse> DescribeSlowLogsAsync(DescribeSlowLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSlowLogsWithOptionsAsync(request, runtime);
        }

        public DescribeSlowLogRecordsResponse DescribeSlowLogRecordsWithOptions(DescribeSlowLogRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSlowLogRecordsResponse>(DoRequest("DescribeSlowLogRecords", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSlowLogRecordsResponse> DescribeSlowLogRecordsWithOptionsAsync(DescribeSlowLogRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSlowLogRecordsResponse>(await DoRequestAsync("DescribeSlowLogRecords", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSlowLogRecordsResponse DescribeSlowLogRecords(DescribeSlowLogRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSlowLogRecordsWithOptions(request, runtime);
        }

        public async Task<DescribeSlowLogRecordsResponse> DescribeSlowLogRecordsAsync(DescribeSlowLogRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSlowLogRecordsWithOptionsAsync(request, runtime);
        }

        public DescribeResourceUsageResponse DescribeResourceUsageWithOptions(DescribeResourceUsageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceUsageResponse>(DoRequest("DescribeResourceUsage", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeResourceUsageResponse> DescribeResourceUsageWithOptionsAsync(DescribeResourceUsageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceUsageResponse>(await DoRequestAsync("DescribeResourceUsage", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeResourceUsageResponse DescribeResourceUsage(DescribeResourceUsageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourceUsageWithOptions(request, runtime);
        }

        public async Task<DescribeResourceUsageResponse> DescribeResourceUsageAsync(DescribeResourceUsageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourceUsageWithOptionsAsync(request, runtime);
        }

        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRegionsResponse DescribeRegions(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRegionsWithOptions(request, runtime);
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsAsync(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRegionsWithOptionsAsync(request, runtime);
        }

        public DescribeParameterTemplatesResponse DescribeParameterTemplatesWithOptions(DescribeParameterTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParameterTemplatesResponse>(DoRequest("DescribeParameterTemplates", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeParameterTemplatesResponse> DescribeParameterTemplatesWithOptionsAsync(DescribeParameterTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParameterTemplatesResponse>(await DoRequestAsync("DescribeParameterTemplates", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeParameterTemplatesResponse DescribeParameterTemplates(DescribeParameterTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeParameterTemplatesWithOptions(request, runtime);
        }

        public async Task<DescribeParameterTemplatesResponse> DescribeParameterTemplatesAsync(DescribeParameterTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeParameterTemplatesWithOptionsAsync(request, runtime);
        }

        public DescribeParametersResponse DescribeParametersWithOptions(DescribeParametersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParametersResponse>(DoRequest("DescribeParameters", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeParametersResponse> DescribeParametersWithOptionsAsync(DescribeParametersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeParametersResponse>(await DoRequestAsync("DescribeParameters", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeParametersResponse DescribeParameters(DescribeParametersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeParametersWithOptions(request, runtime);
        }

        public async Task<DescribeParametersResponse> DescribeParametersAsync(DescribeParametersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeParametersWithOptionsAsync(request, runtime);
        }

        public DescribeModifyParameterLogResponse DescribeModifyParameterLogWithOptions(DescribeModifyParameterLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeModifyParameterLogResponse>(DoRequest("DescribeModifyParameterLog", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeModifyParameterLogResponse> DescribeModifyParameterLogWithOptionsAsync(DescribeModifyParameterLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeModifyParameterLogResponse>(await DoRequestAsync("DescribeModifyParameterLog", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeModifyParameterLogResponse DescribeModifyParameterLog(DescribeModifyParameterLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeModifyParameterLogWithOptions(request, runtime);
        }

        public async Task<DescribeModifyParameterLogResponse> DescribeModifyParameterLogAsync(DescribeModifyParameterLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeModifyParameterLogWithOptionsAsync(request, runtime);
        }

        public DescribeErrorLogsResponse DescribeErrorLogsWithOptions(DescribeErrorLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeErrorLogsResponse>(DoRequest("DescribeErrorLogs", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeErrorLogsResponse> DescribeErrorLogsWithOptionsAsync(DescribeErrorLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeErrorLogsResponse>(await DoRequestAsync("DescribeErrorLogs", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeErrorLogsResponse DescribeErrorLogs(DescribeErrorLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeErrorLogsWithOptions(request, runtime);
        }

        public async Task<DescribeErrorLogsResponse> DescribeErrorLogsAsync(DescribeErrorLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeErrorLogsWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstancePerformanceResponse DescribeDBInstancePerformanceWithOptions(DescribeDBInstancePerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancePerformanceResponse>(DoRequest("DescribeDBInstancePerformance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstancePerformanceResponse> DescribeDBInstancePerformanceWithOptionsAsync(DescribeDBInstancePerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancePerformanceResponse>(await DoRequestAsync("DescribeDBInstancePerformance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstancePerformanceResponse DescribeDBInstancePerformance(DescribeDBInstancePerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstancePerformanceWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstancePerformanceResponse> DescribeDBInstancePerformanceAsync(DescribeDBInstancePerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstancePerformanceWithOptionsAsync(request, runtime);
        }

        public DescribeDatabasesResponse DescribeDatabasesWithOptions(DescribeDatabasesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDatabasesResponse>(DoRequest("DescribeDatabases", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDatabasesResponse> DescribeDatabasesWithOptionsAsync(DescribeDatabasesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDatabasesResponse>(await DoRequestAsync("DescribeDatabases", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDatabasesResponse DescribeDatabases(DescribeDatabasesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDatabasesWithOptions(request, runtime);
        }

        public async Task<DescribeDatabasesResponse> DescribeDatabasesAsync(DescribeDatabasesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDatabasesWithOptionsAsync(request, runtime);
        }

        public DescribeBinlogFilesResponse DescribeBinlogFilesWithOptions(DescribeBinlogFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBinlogFilesResponse>(DoRequest("DescribeBinlogFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBinlogFilesResponse> DescribeBinlogFilesWithOptionsAsync(DescribeBinlogFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBinlogFilesResponse>(await DoRequestAsync("DescribeBinlogFiles", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBinlogFilesResponse DescribeBinlogFiles(DescribeBinlogFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBinlogFilesWithOptions(request, runtime);
        }

        public async Task<DescribeBinlogFilesResponse> DescribeBinlogFilesAsync(DescribeBinlogFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBinlogFilesWithOptionsAsync(request, runtime);
        }

        public DescribeBackupTasksResponse DescribeBackupTasksWithOptions(DescribeBackupTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupTasksResponse>(DoRequest("DescribeBackupTasks", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBackupTasksResponse> DescribeBackupTasksWithOptionsAsync(DescribeBackupTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupTasksResponse>(await DoRequestAsync("DescribeBackupTasks", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBackupTasksResponse DescribeBackupTasks(DescribeBackupTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBackupTasksWithOptions(request, runtime);
        }

        public async Task<DescribeBackupTasksResponse> DescribeBackupTasksAsync(DescribeBackupTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBackupTasksWithOptionsAsync(request, runtime);
        }

        public DescribeBackupsResponse DescribeBackupsWithOptions(DescribeBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupsResponse>(DoRequest("DescribeBackups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBackupsResponse> DescribeBackupsWithOptionsAsync(DescribeBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupsResponse>(await DoRequestAsync("DescribeBackups", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBackupsResponse DescribeBackups(DescribeBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBackupsWithOptions(request, runtime);
        }

        public async Task<DescribeBackupsResponse> DescribeBackupsAsync(DescribeBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBackupsWithOptionsAsync(request, runtime);
        }

        public DescribeBackupPolicyResponse DescribeBackupPolicyWithOptions(DescribeBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupPolicyResponse>(DoRequest("DescribeBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBackupPolicyResponse> DescribeBackupPolicyWithOptionsAsync(DescribeBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupPolicyResponse>(await DoRequestAsync("DescribeBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBackupPolicyResponse DescribeBackupPolicy(DescribeBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBackupPolicyWithOptions(request, runtime);
        }

        public async Task<DescribeBackupPolicyResponse> DescribeBackupPolicyAsync(DescribeBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBackupPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeAccountsResponse DescribeAccountsWithOptions(DescribeAccountsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccountsResponse>(DoRequest("DescribeAccounts", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAccountsResponse> DescribeAccountsWithOptionsAsync(DescribeAccountsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccountsResponse>(await DoRequestAsync("DescribeAccounts", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAccountsResponse DescribeAccounts(DescribeAccountsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAccountsWithOptions(request, runtime);
        }

        public async Task<DescribeAccountsResponse> DescribeAccountsAsync(DescribeAccountsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAccountsWithOptionsAsync(request, runtime);
        }

        public DescibeImportsFromDatabaseResponse DescibeImportsFromDatabaseWithOptions(DescibeImportsFromDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescibeImportsFromDatabaseResponse>(DoRequest("DescibeImportsFromDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescibeImportsFromDatabaseResponse> DescibeImportsFromDatabaseWithOptionsAsync(DescibeImportsFromDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescibeImportsFromDatabaseResponse>(await DoRequestAsync("DescibeImportsFromDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescibeImportsFromDatabaseResponse DescibeImportsFromDatabase(DescibeImportsFromDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescibeImportsFromDatabaseWithOptions(request, runtime);
        }

        public async Task<DescibeImportsFromDatabaseResponse> DescibeImportsFromDatabaseAsync(DescibeImportsFromDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescibeImportsFromDatabaseWithOptionsAsync(request, runtime);
        }

        public DeleteDBInstanceResponse DeleteDBInstanceWithOptions(DeleteDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBInstanceResponse>(DoRequest("DeleteDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDBInstanceResponse> DeleteDBInstanceWithOptionsAsync(DeleteDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBInstanceResponse>(await DoRequestAsync("DeleteDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDBInstanceResponse DeleteDBInstance(DeleteDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDBInstanceWithOptions(request, runtime);
        }

        public async Task<DeleteDBInstanceResponse> DeleteDBInstanceAsync(DeleteDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDBInstanceWithOptionsAsync(request, runtime);
        }

        public DeleteDatabaseResponse DeleteDatabaseWithOptions(DeleteDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDatabaseResponse>(DoRequest("DeleteDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDatabaseResponse> DeleteDatabaseWithOptionsAsync(DeleteDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDatabaseResponse>(await DoRequestAsync("DeleteDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDatabaseResponse DeleteDatabase(DeleteDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDatabaseWithOptions(request, runtime);
        }

        public async Task<DeleteDatabaseResponse> DeleteDatabaseAsync(DeleteDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDatabaseWithOptionsAsync(request, runtime);
        }

        public DeleteAccountResponse DeleteAccountWithOptions(DeleteAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccountResponse>(DoRequest("DeleteAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAccountResponse> DeleteAccountWithOptionsAsync(DeleteAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccountResponse>(await DoRequestAsync("DeleteAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAccountResponse DeleteAccount(DeleteAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAccountWithOptions(request, runtime);
        }

        public async Task<DeleteAccountResponse> DeleteAccountAsync(DeleteAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAccountWithOptionsAsync(request, runtime);
        }

        public CreateTempDBInstanceResponse CreateTempDBInstanceWithOptions(CreateTempDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTempDBInstanceResponse>(DoRequest("CreateTempDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateTempDBInstanceResponse> CreateTempDBInstanceWithOptionsAsync(CreateTempDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTempDBInstanceResponse>(await DoRequestAsync("CreateTempDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateTempDBInstanceResponse CreateTempDBInstance(CreateTempDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateTempDBInstanceWithOptions(request, runtime);
        }

        public async Task<CreateTempDBInstanceResponse> CreateTempDBInstanceAsync(CreateTempDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateTempDBInstanceWithOptionsAsync(request, runtime);
        }

        public CreateDatabaseResponse CreateDatabaseWithOptions(CreateDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDatabaseResponse>(DoRequest("CreateDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDatabaseResponse> CreateDatabaseWithOptionsAsync(CreateDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDatabaseResponse>(await DoRequestAsync("CreateDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateDatabaseResponse CreateDatabase(CreateDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDatabaseWithOptions(request, runtime);
        }

        public async Task<CreateDatabaseResponse> CreateDatabaseAsync(CreateDatabaseRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDatabaseWithOptionsAsync(request, runtime);
        }

        public CreateBackupResponse CreateBackupWithOptions(CreateBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBackupResponse>(DoRequest("CreateBackup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateBackupResponse> CreateBackupWithOptionsAsync(CreateBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBackupResponse>(await DoRequestAsync("CreateBackup", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateBackupResponse CreateBackup(CreateBackupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateBackupWithOptions(request, runtime);
        }

        public async Task<CreateBackupResponse> CreateBackupAsync(CreateBackupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateBackupWithOptionsAsync(request, runtime);
        }

        public CreateAccountResponse CreateAccountWithOptions(CreateAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccountResponse>(DoRequest("CreateAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAccountResponse> CreateAccountWithOptionsAsync(CreateAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccountResponse>(await DoRequestAsync("CreateAccount", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateAccountResponse CreateAccount(CreateAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAccountWithOptions(request, runtime);
        }

        public async Task<CreateAccountResponse> CreateAccountAsync(CreateAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAccountWithOptionsAsync(request, runtime);
        }

        public CheckDBNameAvailableResponse CheckDBNameAvailableWithOptions(CheckDBNameAvailableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckDBNameAvailableResponse>(DoRequest("CheckDBNameAvailable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckDBNameAvailableResponse> CheckDBNameAvailableWithOptionsAsync(CheckDBNameAvailableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckDBNameAvailableResponse>(await DoRequestAsync("CheckDBNameAvailable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CheckDBNameAvailableResponse CheckDBNameAvailable(CheckDBNameAvailableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckDBNameAvailableWithOptions(request, runtime);
        }

        public async Task<CheckDBNameAvailableResponse> CheckDBNameAvailableAsync(CheckDBNameAvailableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckDBNameAvailableWithOptionsAsync(request, runtime);
        }

        public CheckAccountNameAvailableResponse CheckAccountNameAvailableWithOptions(CheckAccountNameAvailableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckAccountNameAvailableResponse>(DoRequest("CheckAccountNameAvailable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckAccountNameAvailableResponse> CheckAccountNameAvailableWithOptionsAsync(CheckAccountNameAvailableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckAccountNameAvailableResponse>(await DoRequestAsync("CheckAccountNameAvailable", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CheckAccountNameAvailableResponse CheckAccountNameAvailable(CheckAccountNameAvailableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckAccountNameAvailableWithOptions(request, runtime);
        }

        public async Task<CheckAccountNameAvailableResponse> CheckAccountNameAvailableAsync(CheckAccountNameAvailableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckAccountNameAvailableWithOptionsAsync(request, runtime);
        }

        public CancelImportResponse CancelImportWithOptions(CancelImportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelImportResponse>(DoRequest("CancelImport", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelImportResponse> CancelImportWithOptionsAsync(CancelImportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelImportResponse>(await DoRequestAsync("CancelImport", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CancelImportResponse CancelImport(CancelImportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelImportWithOptions(request, runtime);
        }

        public async Task<CancelImportResponse> CancelImportAsync(CancelImportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelImportWithOptionsAsync(request, runtime);
        }

        public AddTagsToResourceResponse AddTagsToResourceWithOptions(AddTagsToResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTagsToResourceResponse>(DoRequest("AddTagsToResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddTagsToResourceResponse> AddTagsToResourceWithOptionsAsync(AddTagsToResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTagsToResourceResponse>(await DoRequestAsync("AddTagsToResource", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public AddTagsToResourceResponse AddTagsToResource(AddTagsToResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddTagsToResourceWithOptions(request, runtime);
        }

        public async Task<AddTagsToResourceResponse> AddTagsToResourceAsync(AddTagsToResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddTagsToResourceWithOptionsAsync(request, runtime);
        }

        public SwitchDBInstanceNetTypeResponse SwitchDBInstanceNetTypeWithOptions(SwitchDBInstanceNetTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SwitchDBInstanceNetTypeResponse>(DoRequest("SwitchDBInstanceNetType", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SwitchDBInstanceNetTypeResponse> SwitchDBInstanceNetTypeWithOptionsAsync(SwitchDBInstanceNetTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SwitchDBInstanceNetTypeResponse>(await DoRequestAsync("SwitchDBInstanceNetType", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public SwitchDBInstanceNetTypeResponse SwitchDBInstanceNetType(SwitchDBInstanceNetTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SwitchDBInstanceNetTypeWithOptions(request, runtime);
        }

        public async Task<SwitchDBInstanceNetTypeResponse> SwitchDBInstanceNetTypeAsync(SwitchDBInstanceNetTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SwitchDBInstanceNetTypeWithOptionsAsync(request, runtime);
        }

        public ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnectionWithOptions(ReleaseInstancePublicConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseInstancePublicConnectionResponse>(DoRequest("ReleaseInstancePublicConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleaseInstancePublicConnectionResponse> ReleaseInstancePublicConnectionWithOptionsAsync(ReleaseInstancePublicConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseInstancePublicConnectionResponse>(await DoRequestAsync("ReleaseInstancePublicConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnection(ReleaseInstancePublicConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReleaseInstancePublicConnectionWithOptions(request, runtime);
        }

        public async Task<ReleaseInstancePublicConnectionResponse> ReleaseInstancePublicConnectionAsync(ReleaseInstancePublicConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReleaseInstancePublicConnectionWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceNetworkTypeResponse ModifyDBInstanceNetworkTypeWithOptions(ModifyDBInstanceNetworkTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceNetworkTypeResponse>(DoRequest("ModifyDBInstanceNetworkType", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceNetworkTypeResponse> ModifyDBInstanceNetworkTypeWithOptionsAsync(ModifyDBInstanceNetworkTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceNetworkTypeResponse>(await DoRequestAsync("ModifyDBInstanceNetworkType", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceNetworkTypeResponse ModifyDBInstanceNetworkType(ModifyDBInstanceNetworkTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceNetworkTypeWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceNetworkTypeResponse> ModifyDBInstanceNetworkTypeAsync(ModifyDBInstanceNetworkTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceNetworkTypeWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionStringWithOptions(ModifyDBInstanceConnectionStringRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceConnectionStringResponse>(DoRequest("ModifyDBInstanceConnectionString", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceConnectionStringResponse> ModifyDBInstanceConnectionStringWithOptionsAsync(ModifyDBInstanceConnectionStringRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceConnectionStringResponse>(await DoRequestAsync("ModifyDBInstanceConnectionString", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionString(ModifyDBInstanceConnectionStringRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceConnectionStringWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceConnectionStringResponse> ModifyDBInstanceConnectionStringAsync(ModifyDBInstanceConnectionStringRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceConnectionStringWithOptionsAsync(request, runtime);
        }

        public ModifyDBInstanceConnectionModeResponse ModifyDBInstanceConnectionModeWithOptions(ModifyDBInstanceConnectionModeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceConnectionModeResponse>(DoRequest("ModifyDBInstanceConnectionMode", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBInstanceConnectionModeResponse> ModifyDBInstanceConnectionModeWithOptionsAsync(ModifyDBInstanceConnectionModeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBInstanceConnectionModeResponse>(await DoRequestAsync("ModifyDBInstanceConnectionMode", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBInstanceConnectionModeResponse ModifyDBInstanceConnectionMode(ModifyDBInstanceConnectionModeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBInstanceConnectionModeWithOptions(request, runtime);
        }

        public async Task<ModifyDBInstanceConnectionModeResponse> ModifyDBInstanceConnectionModeAsync(ModifyDBInstanceConnectionModeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBInstanceConnectionModeWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceNetInfoResponse DescribeDBInstanceNetInfoWithOptions(DescribeDBInstanceNetInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceNetInfoResponse>(DoRequest("DescribeDBInstanceNetInfo", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceNetInfoResponse> DescribeDBInstanceNetInfoWithOptionsAsync(DescribeDBInstanceNetInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceNetInfoResponse>(await DoRequestAsync("DescribeDBInstanceNetInfo", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceNetInfoResponse DescribeDBInstanceNetInfo(DescribeDBInstanceNetInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceNetInfoWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceNetInfoResponse> DescribeDBInstanceNetInfoAsync(DescribeDBInstanceNetInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceNetInfoWithOptionsAsync(request, runtime);
        }

        public CreateReadOnlyDBInstanceResponse CreateReadOnlyDBInstanceWithOptions(CreateReadOnlyDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateReadOnlyDBInstanceResponse>(DoRequest("CreateReadOnlyDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateReadOnlyDBInstanceResponse> CreateReadOnlyDBInstanceWithOptionsAsync(CreateReadOnlyDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateReadOnlyDBInstanceResponse>(await DoRequestAsync("CreateReadOnlyDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateReadOnlyDBInstanceResponse CreateReadOnlyDBInstance(CreateReadOnlyDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateReadOnlyDBInstanceWithOptions(request, runtime);
        }

        public async Task<CreateReadOnlyDBInstanceResponse> CreateReadOnlyDBInstanceAsync(CreateReadOnlyDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateReadOnlyDBInstanceWithOptionsAsync(request, runtime);
        }

        /**
         * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Internet
          * &PayType=Postpaid
          * &SecurityIPList=10.23.12.27/24
          * &<公共请求参数>
          * ```
          * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
          * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
        
         */
        public CreateDBInstanceResponse CreateDBInstanceWithOptions(CreateDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBInstanceResponse>(DoRequest("CreateDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Internet
          * &PayType=Postpaid
          * &SecurityIPList=10.23.12.27/24
          * &<公共请求参数>
          * ```
          * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
          * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
        
         */
        public async Task<CreateDBInstanceResponse> CreateDBInstanceWithOptionsAsync(CreateDBInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBInstanceResponse>(await DoRequestAsync("CreateDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Internet
          * &PayType=Postpaid
          * &SecurityIPList=10.23.12.27/24
          * &<公共请求参数>
          * ```
          * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
          * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
        
         */
        public CreateDBInstanceResponse CreateDBInstance(CreateDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDBInstanceWithOptions(request, runtime);
        }

        /**
         * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
          * request demo:   * ```
          * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
          * &RegionId=cn-hangzhou
          * &Engine=MySQL
          * &EngineVersion=5.6
          * &DBInstanceClass=rds.mysql.s1.small
          * &DBInstanceStorage=20
          * &DBInstanceNetType=Internet
          * &PayType=Postpaid
          * &SecurityIPList=10.23.12.27/24
          * &<公共请求参数>
          * ```
          * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
          * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
        
         */
        public async Task<CreateDBInstanceResponse> CreateDBInstanceAsync(CreateDBInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDBInstanceWithOptionsAsync(request, runtime);
        }

        public AllocateInstancePublicConnectionResponse AllocateInstancePublicConnectionWithOptions(AllocateInstancePublicConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateInstancePublicConnectionResponse>(DoRequest("AllocateInstancePublicConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateInstancePublicConnectionResponse> AllocateInstancePublicConnectionWithOptionsAsync(AllocateInstancePublicConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateInstancePublicConnectionResponse>(await DoRequestAsync("AllocateInstancePublicConnection", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public AllocateInstancePublicConnectionResponse AllocateInstancePublicConnection(AllocateInstancePublicConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateInstancePublicConnectionWithOptions(request, runtime);
        }

        public async Task<AllocateInstancePublicConnectionResponse> AllocateInstancePublicConnectionAsync(AllocateInstancePublicConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateInstancePublicConnectionWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstancesByPerformanceResponse DescribeDBInstancesByPerformanceWithOptions(DescribeDBInstancesByPerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesByPerformanceResponse>(DoRequest("DescribeDBInstancesByPerformance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstancesByPerformanceResponse> DescribeDBInstancesByPerformanceWithOptionsAsync(DescribeDBInstancesByPerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesByPerformanceResponse>(await DoRequestAsync("DescribeDBInstancesByPerformance", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstancesByPerformanceResponse DescribeDBInstancesByPerformance(DescribeDBInstancesByPerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstancesByPerformanceWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstancesByPerformanceResponse> DescribeDBInstancesByPerformanceAsync(DescribeDBInstancesByPerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstancesByPerformanceWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstancesByExpireTimeResponse DescribeDBInstancesByExpireTimeWithOptions(DescribeDBInstancesByExpireTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesByExpireTimeResponse>(DoRequest("DescribeDBInstancesByExpireTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstancesByExpireTimeResponse> DescribeDBInstancesByExpireTimeWithOptionsAsync(DescribeDBInstancesByExpireTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesByExpireTimeResponse>(await DoRequestAsync("DescribeDBInstancesByExpireTime", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstancesByExpireTimeResponse DescribeDBInstancesByExpireTime(DescribeDBInstancesByExpireTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstancesByExpireTimeWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstancesByExpireTimeResponse> DescribeDBInstancesByExpireTimeAsync(DescribeDBInstancesByExpireTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstancesByExpireTimeWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstancesResponse DescribeDBInstancesWithOptions(DescribeDBInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesResponse>(DoRequest("DescribeDBInstances", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstancesResponse> DescribeDBInstancesWithOptionsAsync(DescribeDBInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstancesResponse>(await DoRequestAsync("DescribeDBInstances", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstancesResponse DescribeDBInstances(DescribeDBInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstancesResponse> DescribeDBInstancesAsync(DescribeDBInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeWithOptions(DescribeDBInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceAttributeResponse>(DoRequest("DescribeDBInstanceAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBInstanceAttributeResponse> DescribeDBInstanceAttributeWithOptionsAsync(DescribeDBInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBInstanceAttributeResponse>(await DoRequestAsync("DescribeDBInstanceAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBInstanceAttributeResponse DescribeDBInstanceAttribute(DescribeDBInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBInstanceAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeDBInstanceAttributeResponse> DescribeDBInstanceAttributeAsync(DescribeDBInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBInstanceAttributeWithOptionsAsync(request, runtime);
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
