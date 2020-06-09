// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Polardb20170801.Models;

namespace AlibabaCloud.SDK.Polardb20170801
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"cn-qingdao", "polardb.aliyuncs.com"},
                {"cn-beijing", "polardb.aliyuncs.com"},
                {"cn-hangzhou", "polardb.aliyuncs.com"},
                {"cn-shanghai", "polardb.aliyuncs.com"},
                {"cn-shenzhen", "polardb.aliyuncs.com"},
                {"cn-hongkong", "polardb.aliyuncs.com"},
                {"ap-southeast-1", "polardb.aliyuncs.com"},
                {"us-west-1", "polardb.aliyuncs.com"},
                {"cn-hangzhou-finance", "polardb.aliyuncs.com"},
                {"cn-shanghai-finance-1", "polardb.aliyuncs.com"},
                {"us-east-1", "polardb.ap-northeast-1.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "polardb.aliyuncs.com"},
                {"cn-north-2-gov-1", "polardb.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("polardb", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DescribeDBClusterAuditLogCollectorResponse DescribeDBClusterAuditLogCollectorWithOptions(DescribeDBClusterAuditLogCollectorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAuditLogCollectorResponse>(DoRequest("DescribeDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterAuditLogCollectorResponse> DescribeDBClusterAuditLogCollectorWithOptionsAsync(DescribeDBClusterAuditLogCollectorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAuditLogCollectorResponse>(await DoRequestAsync("DescribeDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterAuditLogCollectorResponse DescribeDBClusterAuditLogCollector(DescribeDBClusterAuditLogCollectorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterAuditLogCollectorWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterAuditLogCollectorResponse> DescribeDBClusterAuditLogCollectorAsync(DescribeDBClusterAuditLogCollectorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterAuditLogCollectorWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterAuditLogCollectorResponse ModifyDBClusterAuditLogCollectorWithOptions(ModifyDBClusterAuditLogCollectorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterAuditLogCollectorResponse>(DoRequest("ModifyDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterAuditLogCollectorResponse> ModifyDBClusterAuditLogCollectorWithOptionsAsync(ModifyDBClusterAuditLogCollectorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterAuditLogCollectorResponse>(await DoRequestAsync("ModifyDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterAuditLogCollectorResponse ModifyDBClusterAuditLogCollector(ModifyDBClusterAuditLogCollectorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterAuditLogCollectorWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterAuditLogCollectorResponse> ModifyDBClusterAuditLogCollectorAsync(ModifyDBClusterAuditLogCollectorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterAuditLogCollectorWithOptionsAsync(request, runtime);
        }

        public DescribeDetachedBackupsResponse DescribeDetachedBackupsWithOptions(DescribeDetachedBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDetachedBackupsResponse>(DoRequest("DescribeDetachedBackups", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDetachedBackupsResponse> DescribeDetachedBackupsWithOptionsAsync(DescribeDetachedBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDetachedBackupsResponse>(await DoRequestAsync("DescribeDetachedBackups", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeDBClustersWithBackupsResponse DescribeDBClustersWithBackupsWithOptions(DescribeDBClustersWithBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClustersWithBackupsResponse>(DoRequest("DescribeDBClustersWithBackups", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClustersWithBackupsResponse> DescribeDBClustersWithBackupsWithOptionsAsync(DescribeDBClustersWithBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClustersWithBackupsResponse>(await DoRequestAsync("DescribeDBClustersWithBackups", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClustersWithBackupsResponse DescribeDBClustersWithBackups(DescribeDBClustersWithBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClustersWithBackupsWithOptions(request, runtime);
        }

        public async Task<DescribeDBClustersWithBackupsResponse> DescribeDBClustersWithBackupsAsync(DescribeDBClustersWithBackupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClustersWithBackupsWithOptionsAsync(request, runtime);
        }

        public DescribeLogBackupPolicyResponse DescribeLogBackupPolicyWithOptions(DescribeLogBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLogBackupPolicyResponse>(DoRequest("DescribeLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLogBackupPolicyResponse> DescribeLogBackupPolicyWithOptionsAsync(DescribeLogBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLogBackupPolicyResponse>(await DoRequestAsync("DescribeLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLogBackupPolicyResponse DescribeLogBackupPolicy(DescribeLogBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLogBackupPolicyWithOptions(request, runtime);
        }

        public async Task<DescribeLogBackupPolicyResponse> DescribeLogBackupPolicyAsync(DescribeLogBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLogBackupPolicyWithOptionsAsync(request, runtime);
        }

        public ModifyLogBackupPolicyResponse ModifyLogBackupPolicyWithOptions(ModifyLogBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLogBackupPolicyResponse>(DoRequest("ModifyLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyLogBackupPolicyResponse> ModifyLogBackupPolicyWithOptionsAsync(ModifyLogBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLogBackupPolicyResponse>(await DoRequestAsync("ModifyLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyLogBackupPolicyResponse ModifyLogBackupPolicy(ModifyLogBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyLogBackupPolicyWithOptions(request, runtime);
        }

        public async Task<ModifyLogBackupPolicyResponse> ModifyLogBackupPolicyAsync(ModifyLogBackupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyLogBackupPolicyWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterMonitorResponse ModifyDBClusterMonitorWithOptions(ModifyDBClusterMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterMonitorResponse>(DoRequest("ModifyDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterMonitorResponse> ModifyDBClusterMonitorWithOptionsAsync(ModifyDBClusterMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterMonitorResponse>(await DoRequestAsync("ModifyDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterMonitorResponse ModifyDBClusterMonitor(ModifyDBClusterMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterMonitorWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterMonitorResponse> ModifyDBClusterMonitorAsync(ModifyDBClusterMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterMonitorWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterMonitorResponse DescribeDBClusterMonitorWithOptions(DescribeDBClusterMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterMonitorResponse>(DoRequest("DescribeDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterMonitorResponse> DescribeDBClusterMonitorWithOptionsAsync(DescribeDBClusterMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterMonitorResponse>(await DoRequestAsync("DescribeDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterMonitorResponse DescribeDBClusterMonitor(DescribeDBClusterMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterMonitorWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterMonitorResponse> DescribeDBClusterMonitorAsync(DescribeDBClusterMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterMonitorWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterAvailableResourcesResponse DescribeDBClusterAvailableResourcesWithOptions(DescribeDBClusterAvailableResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAvailableResourcesResponse>(DoRequest("DescribeDBClusterAvailableResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterAvailableResourcesResponse> DescribeDBClusterAvailableResourcesWithOptionsAsync(DescribeDBClusterAvailableResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAvailableResourcesResponse>(await DoRequestAsync("DescribeDBClusterAvailableResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterAvailableResourcesResponse DescribeDBClusterAvailableResources(DescribeDBClusterAvailableResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterAvailableResourcesWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterAvailableResourcesResponse> DescribeDBClusterAvailableResourcesAsync(DescribeDBClusterAvailableResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterAvailableResourcesWithOptionsAsync(request, runtime);
        }

        public DescribeBackupLogsResponse DescribeBackupLogsWithOptions(DescribeBackupLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupLogsResponse>(DoRequest("DescribeBackupLogs", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBackupLogsResponse> DescribeBackupLogsWithOptionsAsync(DescribeBackupLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupLogsResponse>(await DoRequestAsync("DescribeBackupLogs", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBackupLogsResponse DescribeBackupLogs(DescribeBackupLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBackupLogsWithOptions(request, runtime);
        }

        public async Task<DescribeBackupLogsResponse> DescribeBackupLogsAsync(DescribeBackupLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBackupLogsWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterSSLResponse ModifyDBClusterSSLWithOptions(ModifyDBClusterSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterSSLResponse>(DoRequest("ModifyDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterSSLResponse> ModifyDBClusterSSLWithOptionsAsync(ModifyDBClusterSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterSSLResponse>(await DoRequestAsync("ModifyDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterSSLResponse ModifyDBClusterSSL(ModifyDBClusterSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterSSLWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterSSLResponse> ModifyDBClusterSSLAsync(ModifyDBClusterSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterSSLWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterSSLResponse DescribeDBClusterSSLWithOptions(DescribeDBClusterSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterSSLResponse>(DoRequest("DescribeDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterSSLResponse> DescribeDBClusterSSLWithOptionsAsync(DescribeDBClusterSSLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterSSLResponse>(await DoRequestAsync("DescribeDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterSSLResponse DescribeDBClusterSSL(DescribeDBClusterSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterSSLWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterSSLResponse> DescribeDBClusterSSLAsync(DescribeDBClusterSSLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterSSLWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterMigrationResponse DescribeDBClusterMigrationWithOptions(DescribeDBClusterMigrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterMigrationResponse>(DoRequest("DescribeDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterMigrationResponse> DescribeDBClusterMigrationWithOptionsAsync(DescribeDBClusterMigrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterMigrationResponse>(await DoRequestAsync("DescribeDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterMigrationResponse DescribeDBClusterMigration(DescribeDBClusterMigrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterMigrationWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterMigrationResponse> DescribeDBClusterMigrationAsync(DescribeDBClusterMigrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterMigrationWithOptionsAsync(request, runtime);
        }

        public CloseDBClusterMigrationResponse CloseDBClusterMigrationWithOptions(CloseDBClusterMigrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CloseDBClusterMigrationResponse>(DoRequest("CloseDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CloseDBClusterMigrationResponse> CloseDBClusterMigrationWithOptionsAsync(CloseDBClusterMigrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CloseDBClusterMigrationResponse>(await DoRequestAsync("CloseDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public CloseDBClusterMigrationResponse CloseDBClusterMigration(CloseDBClusterMigrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CloseDBClusterMigrationWithOptions(request, runtime);
        }

        public async Task<CloseDBClusterMigrationResponse> CloseDBClusterMigrationAsync(CloseDBClusterMigrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CloseDBClusterMigrationWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterMigrationResponse ModifyDBClusterMigrationWithOptions(ModifyDBClusterMigrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterMigrationResponse>(DoRequest("ModifyDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterMigrationResponse> ModifyDBClusterMigrationWithOptionsAsync(ModifyDBClusterMigrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterMigrationResponse>(await DoRequestAsync("ModifyDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterMigrationResponse ModifyDBClusterMigration(ModifyDBClusterMigrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterMigrationWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterMigrationResponse> ModifyDBClusterMigrationAsync(ModifyDBClusterMigrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterMigrationWithOptionsAsync(request, runtime);
        }

        public ModifyAutoRenewAttributeResponse ModifyAutoRenewAttributeWithOptions(ModifyAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoRenewAttributeResponse>(DoRequest("ModifyAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAutoRenewAttributeResponse> ModifyAutoRenewAttributeWithOptionsAsync(ModifyAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoRenewAttributeResponse>(await DoRequestAsync("ModifyAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAutoRenewAttributeResponse ModifyAutoRenewAttribute(ModifyAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAutoRenewAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyAutoRenewAttributeResponse> ModifyAutoRenewAttributeAsync(ModifyAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAutoRenewAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyDBNodeClassResponse ModifyDBNodeClassWithOptions(ModifyDBNodeClassRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBNodeClassResponse>(DoRequest("ModifyDBNodeClass", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBNodeClassResponse> ModifyDBNodeClassWithOptionsAsync(ModifyDBNodeClassRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBNodeClassResponse>(await DoRequestAsync("ModifyDBNodeClass", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBNodeClassResponse ModifyDBNodeClass(ModifyDBNodeClassRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBNodeClassWithOptions(request, runtime);
        }

        public async Task<ModifyDBNodeClassResponse> ModifyDBNodeClassAsync(ModifyDBNodeClassRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBNodeClassWithOptionsAsync(request, runtime);
        }

        public DescribeAutoRenewAttributeResponse DescribeAutoRenewAttributeWithOptions(DescribeAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoRenewAttributeResponse>(DoRequest("DescribeAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAutoRenewAttributeResponse> DescribeAutoRenewAttributeWithOptionsAsync(DescribeAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoRenewAttributeResponse>(await DoRequestAsync("DescribeAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAutoRenewAttributeResponse DescribeAutoRenewAttribute(DescribeAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAutoRenewAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeAutoRenewAttributeResponse> DescribeAutoRenewAttributeAsync(DescribeAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAutoRenewAttributeWithOptionsAsync(request, runtime);
        }

        public CreateDBNodesResponse CreateDBNodesWithOptions(CreateDBNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBNodesResponse>(DoRequest("CreateDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDBNodesResponse> CreateDBNodesWithOptionsAsync(CreateDBNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBNodesResponse>(await DoRequestAsync("CreateDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateDBNodesResponse CreateDBNodes(CreateDBNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDBNodesWithOptions(request, runtime);
        }

        public async Task<CreateDBNodesResponse> CreateDBNodesAsync(CreateDBNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDBNodesWithOptionsAsync(request, runtime);
        }

        public DeleteDBNodesResponse DeleteDBNodesWithOptions(DeleteDBNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBNodesResponse>(DoRequest("DeleteDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDBNodesResponse> DeleteDBNodesWithOptionsAsync(DeleteDBNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBNodesResponse>(await DoRequestAsync("DeleteDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDBNodesResponse DeleteDBNodes(DeleteDBNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDBNodesWithOptions(request, runtime);
        }

        public async Task<DeleteDBNodesResponse> DeleteDBNodesAsync(DeleteDBNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDBNodesWithOptionsAsync(request, runtime);
        }

        public UntagResourcesResponse UntagResourcesWithOptions(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(DoRequest("UntagResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UntagResourcesResponse> UntagResourcesWithOptionsAsync(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(await DoRequestAsync("UntagResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public TagResourcesResponse TagResourcesWithOptions(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(DoRequest("TagResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TagResourcesResponse> TagResourcesWithOptionsAsync(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(await DoRequestAsync("TagResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public ListTagResourcesResponse ListTagResourcesWithOptions(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(DoRequest("ListTagResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesWithOptionsAsync(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(await DoRequestAsync("ListTagResources", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public ModifyDBEndpointAddressResponse ModifyDBEndpointAddressWithOptions(ModifyDBEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBEndpointAddressResponse>(DoRequest("ModifyDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBEndpointAddressResponse> ModifyDBEndpointAddressWithOptionsAsync(ModifyDBEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBEndpointAddressResponse>(await DoRequestAsync("ModifyDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBEndpointAddressResponse ModifyDBEndpointAddress(ModifyDBEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBEndpointAddressWithOptions(request, runtime);
        }

        public async Task<ModifyDBEndpointAddressResponse> ModifyDBEndpointAddressAsync(ModifyDBEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBEndpointAddressWithOptionsAsync(request, runtime);
        }

        public ModifyDBDescriptionResponse ModifyDBDescriptionWithOptions(ModifyDBDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBDescriptionResponse>(DoRequest("ModifyDBDescription", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBDescriptionResponse> ModifyDBDescriptionWithOptionsAsync(ModifyDBDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBDescriptionResponse>(await DoRequestAsync("ModifyDBDescription", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public ModifyDBClusterParametersResponse ModifyDBClusterParametersWithOptions(ModifyDBClusterParametersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterParametersResponse>(DoRequest("ModifyDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterParametersResponse> ModifyDBClusterParametersWithOptionsAsync(ModifyDBClusterParametersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterParametersResponse>(await DoRequestAsync("ModifyDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterParametersResponse ModifyDBClusterParameters(ModifyDBClusterParametersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterParametersWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterParametersResponse> ModifyDBClusterParametersAsync(ModifyDBClusterParametersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterParametersWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterEndpointResponse ModifyDBClusterEndpointWithOptions(ModifyDBClusterEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterEndpointResponse>(DoRequest("ModifyDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterEndpointResponse> ModifyDBClusterEndpointWithOptionsAsync(ModifyDBClusterEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterEndpointResponse>(await DoRequestAsync("ModifyDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterEndpointResponse ModifyDBClusterEndpoint(ModifyDBClusterEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterEndpointWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterEndpointResponse> ModifyDBClusterEndpointAsync(ModifyDBClusterEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterEndpointWithOptionsAsync(request, runtime);
        }

        public ModifyAccountPasswordResponse ModifyAccountPasswordWithOptions(ModifyAccountPasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccountPasswordResponse>(DoRequest("ModifyAccountPassword", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAccountPasswordResponse> ModifyAccountPasswordWithOptionsAsync(ModifyAccountPasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccountPasswordResponse>(await DoRequestAsync("ModifyAccountPassword", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAccountPasswordResponse ModifyAccountPassword(ModifyAccountPasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAccountPasswordWithOptions(request, runtime);
        }

        public async Task<ModifyAccountPasswordResponse> ModifyAccountPasswordAsync(ModifyAccountPasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAccountPasswordWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterPerformanceResponse DescribeDBClusterPerformanceWithOptions(DescribeDBClusterPerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterPerformanceResponse>(DoRequest("DescribeDBClusterPerformance", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterPerformanceResponse> DescribeDBClusterPerformanceWithOptionsAsync(DescribeDBClusterPerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterPerformanceResponse>(await DoRequestAsync("DescribeDBClusterPerformance", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterPerformanceResponse DescribeDBClusterPerformance(DescribeDBClusterPerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterPerformanceWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterPerformanceResponse> DescribeDBClusterPerformanceAsync(DescribeDBClusterPerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterPerformanceWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterParametersResponse DescribeDBClusterParametersWithOptions(DescribeDBClusterParametersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterParametersResponse>(DoRequest("DescribeDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterParametersResponse> DescribeDBClusterParametersWithOptionsAsync(DescribeDBClusterParametersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterParametersResponse>(await DoRequestAsync("DescribeDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterParametersResponse DescribeDBClusterParameters(DescribeDBClusterParametersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterParametersWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterParametersResponse> DescribeDBClusterParametersAsync(DescribeDBClusterParametersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterParametersWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterEndpointsResponse DescribeDBClusterEndpointsWithOptions(DescribeDBClusterEndpointsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterEndpointsResponse>(DoRequest("DescribeDBClusterEndpoints", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterEndpointsResponse> DescribeDBClusterEndpointsWithOptionsAsync(DescribeDBClusterEndpointsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterEndpointsResponse>(await DoRequestAsync("DescribeDBClusterEndpoints", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterEndpointsResponse DescribeDBClusterEndpoints(DescribeDBClusterEndpointsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterEndpointsWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterEndpointsResponse> DescribeDBClusterEndpointsAsync(DescribeDBClusterEndpointsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterEndpointsWithOptionsAsync(request, runtime);
        }

        public DeleteDBEndpointAddressResponse DeleteDBEndpointAddressWithOptions(DeleteDBEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBEndpointAddressResponse>(DoRequest("DeleteDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDBEndpointAddressResponse> DeleteDBEndpointAddressWithOptionsAsync(DeleteDBEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBEndpointAddressResponse>(await DoRequestAsync("DeleteDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDBEndpointAddressResponse DeleteDBEndpointAddress(DeleteDBEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDBEndpointAddressWithOptions(request, runtime);
        }

        public async Task<DeleteDBEndpointAddressResponse> DeleteDBEndpointAddressAsync(DeleteDBEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDBEndpointAddressWithOptionsAsync(request, runtime);
        }

        public DeleteDBClusterEndpointResponse DeleteDBClusterEndpointWithOptions(DeleteDBClusterEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBClusterEndpointResponse>(DoRequest("DeleteDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDBClusterEndpointResponse> DeleteDBClusterEndpointWithOptionsAsync(DeleteDBClusterEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBClusterEndpointResponse>(await DoRequestAsync("DeleteDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDBClusterEndpointResponse DeleteDBClusterEndpoint(DeleteDBClusterEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDBClusterEndpointWithOptions(request, runtime);
        }

        public async Task<DeleteDBClusterEndpointResponse> DeleteDBClusterEndpointAsync(DeleteDBClusterEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDBClusterEndpointWithOptionsAsync(request, runtime);
        }

        public CreateDBEndpointAddressResponse CreateDBEndpointAddressWithOptions(CreateDBEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBEndpointAddressResponse>(DoRequest("CreateDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDBEndpointAddressResponse> CreateDBEndpointAddressWithOptionsAsync(CreateDBEndpointAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBEndpointAddressResponse>(await DoRequestAsync("CreateDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateDBEndpointAddressResponse CreateDBEndpointAddress(CreateDBEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDBEndpointAddressWithOptions(request, runtime);
        }

        public async Task<CreateDBEndpointAddressResponse> CreateDBEndpointAddressAsync(CreateDBEndpointAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDBEndpointAddressWithOptionsAsync(request, runtime);
        }

        public CreateDBClusterEndpointResponse CreateDBClusterEndpointWithOptions(CreateDBClusterEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBClusterEndpointResponse>(DoRequest("CreateDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDBClusterEndpointResponse> CreateDBClusterEndpointWithOptionsAsync(CreateDBClusterEndpointRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBClusterEndpointResponse>(await DoRequestAsync("CreateDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateDBClusterEndpointResponse CreateDBClusterEndpoint(CreateDBClusterEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDBClusterEndpointWithOptions(request, runtime);
        }

        public async Task<CreateDBClusterEndpointResponse> CreateDBClusterEndpointAsync(CreateDBClusterEndpointRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDBClusterEndpointWithOptionsAsync(request, runtime);
        }

        public RestartDBNodeResponse RestartDBNodeWithOptions(RestartDBNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartDBNodeResponse>(DoRequest("RestartDBNode", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RestartDBNodeResponse> RestartDBNodeWithOptionsAsync(RestartDBNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartDBNodeResponse>(await DoRequestAsync("RestartDBNode", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public RestartDBNodeResponse RestartDBNode(RestartDBNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestartDBNodeWithOptions(request, runtime);
        }

        public async Task<RestartDBNodeResponse> RestartDBNodeAsync(RestartDBNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestartDBNodeWithOptionsAsync(request, runtime);
        }

        public DescribeDBNodePerformanceResponse DescribeDBNodePerformanceWithOptions(DescribeDBNodePerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBNodePerformanceResponse>(DoRequest("DescribeDBNodePerformance", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBNodePerformanceResponse> DescribeDBNodePerformanceWithOptionsAsync(DescribeDBNodePerformanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBNodePerformanceResponse>(await DoRequestAsync("DescribeDBNodePerformance", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBNodePerformanceResponse DescribeDBNodePerformance(DescribeDBNodePerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBNodePerformanceWithOptions(request, runtime);
        }

        public async Task<DescribeDBNodePerformanceResponse> DescribeDBNodePerformanceAsync(DescribeDBNodePerformanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBNodePerformanceWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterAccessWhitelistResponse ModifyDBClusterAccessWhitelistWithOptions(ModifyDBClusterAccessWhitelistRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterAccessWhitelistResponse>(DoRequest("ModifyDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterAccessWhitelistResponse> ModifyDBClusterAccessWhitelistWithOptionsAsync(ModifyDBClusterAccessWhitelistRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterAccessWhitelistResponse>(await DoRequestAsync("ModifyDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterAccessWhitelistResponse ModifyDBClusterAccessWhitelist(ModifyDBClusterAccessWhitelistRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterAccessWhitelistWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterAccessWhitelistResponse> ModifyDBClusterAccessWhitelistAsync(ModifyDBClusterAccessWhitelistRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterAccessWhitelistWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterAccessWhitelistResponse DescribeDBClusterAccessWhitelistWithOptions(DescribeDBClusterAccessWhitelistRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAccessWhitelistResponse>(DoRequest("DescribeDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterAccessWhitelistResponse> DescribeDBClusterAccessWhitelistWithOptionsAsync(DescribeDBClusterAccessWhitelistRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAccessWhitelistResponse>(await DoRequestAsync("DescribeDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterAccessWhitelistResponse DescribeDBClusterAccessWhitelist(DescribeDBClusterAccessWhitelistRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterAccessWhitelistWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterAccessWhitelistResponse> DescribeDBClusterAccessWhitelistAsync(DescribeDBClusterAccessWhitelistRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterAccessWhitelistWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterMaintainTimeResponse ModifyDBClusterMaintainTimeWithOptions(ModifyDBClusterMaintainTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterMaintainTimeResponse>(DoRequest("ModifyDBClusterMaintainTime", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterMaintainTimeResponse> ModifyDBClusterMaintainTimeWithOptionsAsync(ModifyDBClusterMaintainTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterMaintainTimeResponse>(await DoRequestAsync("ModifyDBClusterMaintainTime", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterMaintainTimeResponse ModifyDBClusterMaintainTime(ModifyDBClusterMaintainTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterMaintainTimeWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterMaintainTimeResponse> ModifyDBClusterMaintainTimeAsync(ModifyDBClusterMaintainTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterMaintainTimeWithOptionsAsync(request, runtime);
        }

        public RevokeAccountPrivilegeResponse RevokeAccountPrivilegeWithOptions(RevokeAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeAccountPrivilegeResponse>(DoRequest("RevokeAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RevokeAccountPrivilegeResponse> RevokeAccountPrivilegeWithOptionsAsync(RevokeAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeAccountPrivilegeResponse>(await DoRequestAsync("RevokeAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public ResetAccountResponse ResetAccountWithOptions(ResetAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountResponse>(DoRequest("ResetAccount", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResetAccountResponse> ResetAccountWithOptionsAsync(ResetAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetAccountResponse>(await DoRequestAsync("ResetAccount", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public GrantAccountPrivilegeResponse GrantAccountPrivilegeWithOptions(GrantAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantAccountPrivilegeResponse>(DoRequest("GrantAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GrantAccountPrivilegeResponse> GrantAccountPrivilegeWithOptionsAsync(GrantAccountPrivilegeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantAccountPrivilegeResponse>(await DoRequestAsync("GrantAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeDatabasesResponse DescribeDatabasesWithOptions(DescribeDatabasesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDatabasesResponse>(DoRequest("DescribeDatabases", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDatabasesResponse> DescribeDatabasesWithOptionsAsync(DescribeDatabasesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDatabasesResponse>(await DoRequestAsync("DescribeDatabases", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DeleteDatabaseResponse DeleteDatabaseWithOptions(DeleteDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDatabaseResponse>(DoRequest("DeleteDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDatabaseResponse> DeleteDatabaseWithOptionsAsync(DeleteDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDatabaseResponse>(await DoRequestAsync("DeleteDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DeleteAccountResponse>(DoRequest("DeleteAccount", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAccountResponse> DeleteAccountWithOptionsAsync(DeleteAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccountResponse>(await DoRequestAsync("DeleteAccount", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public CreateDatabaseResponse CreateDatabaseWithOptions(CreateDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDatabaseResponse>(DoRequest("CreateDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDatabaseResponse> CreateDatabaseWithOptionsAsync(CreateDatabaseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDatabaseResponse>(await DoRequestAsync("CreateDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DeleteBackupResponse DeleteBackupWithOptions(DeleteBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBackupResponse>(DoRequest("DeleteBackup", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBackupResponse> DeleteBackupWithOptionsAsync(DeleteBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBackupResponse>(await DoRequestAsync("DeleteBackup", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeSlowLogsResponse DescribeSlowLogsWithOptions(DescribeSlowLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSlowLogsResponse>(DoRequest("DescribeSlowLogs", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSlowLogsResponse> DescribeSlowLogsWithOptionsAsync(DescribeSlowLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSlowLogsResponse>(await DoRequestAsync("DescribeSlowLogs", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DescribeSlowLogRecordsResponse>(DoRequest("DescribeSlowLogRecords", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSlowLogRecordsResponse> DescribeSlowLogRecordsWithOptionsAsync(DescribeSlowLogRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSlowLogRecordsResponse>(await DoRequestAsync("DescribeSlowLogRecords", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public FailoverDBClusterResponse FailoverDBClusterWithOptions(FailoverDBClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FailoverDBClusterResponse>(DoRequest("FailoverDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FailoverDBClusterResponse> FailoverDBClusterWithOptionsAsync(FailoverDBClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FailoverDBClusterResponse>(await DoRequestAsync("FailoverDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public FailoverDBClusterResponse FailoverDBCluster(FailoverDBClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FailoverDBClusterWithOptions(request, runtime);
        }

        public async Task<FailoverDBClusterResponse> FailoverDBClusterAsync(FailoverDBClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FailoverDBClusterWithOptionsAsync(request, runtime);
        }

        public ModifyDBClusterDescriptionResponse ModifyDBClusterDescriptionWithOptions(ModifyDBClusterDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterDescriptionResponse>(DoRequest("ModifyDBClusterDescription", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDBClusterDescriptionResponse> ModifyDBClusterDescriptionWithOptionsAsync(ModifyDBClusterDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDBClusterDescriptionResponse>(await DoRequestAsync("ModifyDBClusterDescription", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDBClusterDescriptionResponse ModifyDBClusterDescription(ModifyDBClusterDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDBClusterDescriptionWithOptions(request, runtime);
        }

        public async Task<ModifyDBClusterDescriptionResponse> ModifyDBClusterDescriptionAsync(ModifyDBClusterDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDBClusterDescriptionWithOptionsAsync(request, runtime);
        }

        public ModifyAccountDescriptionResponse ModifyAccountDescriptionWithOptions(ModifyAccountDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccountDescriptionResponse>(DoRequest("ModifyAccountDescription", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAccountDescriptionResponse> ModifyAccountDescriptionWithOptionsAsync(ModifyAccountDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccountDescriptionResponse>(await DoRequestAsync("ModifyAccountDescription", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeAccountsResponse DescribeAccountsWithOptions(DescribeAccountsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccountsResponse>(DoRequest("DescribeAccounts", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAccountsResponse> DescribeAccountsWithOptionsAsync(DescribeAccountsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccountsResponse>(await DoRequestAsync("DescribeAccounts", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DeleteDBClusterResponse DeleteDBClusterWithOptions(DeleteDBClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBClusterResponse>(DoRequest("DeleteDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDBClusterResponse> DeleteDBClusterWithOptionsAsync(DeleteDBClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDBClusterResponse>(await DoRequestAsync("DeleteDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDBClusterResponse DeleteDBCluster(DeleteDBClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDBClusterWithOptions(request, runtime);
        }

        public async Task<DeleteDBClusterResponse> DeleteDBClusterAsync(DeleteDBClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDBClusterWithOptionsAsync(request, runtime);
        }

        public CreateDBClusterResponse CreateDBClusterWithOptions(CreateDBClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBClusterResponse>(DoRequest("CreateDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDBClusterResponse> CreateDBClusterWithOptionsAsync(CreateDBClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDBClusterResponse>(await DoRequestAsync("CreateDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateDBClusterResponse CreateDBCluster(CreateDBClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDBClusterWithOptions(request, runtime);
        }

        public async Task<CreateDBClusterResponse> CreateDBClusterAsync(CreateDBClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDBClusterWithOptionsAsync(request, runtime);
        }

        public CreateBackupResponse CreateBackupWithOptions(CreateBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBackupResponse>(DoRequest("CreateBackup", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateBackupResponse> CreateBackupWithOptionsAsync(CreateBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBackupResponse>(await DoRequestAsync("CreateBackup", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<CreateAccountResponse>(DoRequest("CreateAccount", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAccountResponse> CreateAccountWithOptionsAsync(CreateAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccountResponse>(await DoRequestAsync("CreateAccount", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeBackupsResponse DescribeBackupsWithOptions(DescribeBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupsResponse>(DoRequest("DescribeBackups", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBackupsResponse> DescribeBackupsWithOptionsAsync(DescribeBackupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupsResponse>(await DoRequestAsync("DescribeBackups", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public ModifyBackupPolicyResponse ModifyBackupPolicyWithOptions(ModifyBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBackupPolicyResponse>(DoRequest("ModifyBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyBackupPolicyResponse> ModifyBackupPolicyWithOptionsAsync(ModifyBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBackupPolicyResponse>(await DoRequestAsync("ModifyBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeBackupPolicyResponse DescribeBackupPolicyWithOptions(DescribeBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupPolicyResponse>(DoRequest("DescribeBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBackupPolicyResponse> DescribeBackupPolicyWithOptionsAsync(DescribeBackupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBackupPolicyResponse>(await DoRequestAsync("DescribeBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
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

        public DescribeDBClustersResponse DescribeDBClustersWithOptions(DescribeDBClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClustersResponse>(DoRequest("DescribeDBClusters", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClustersResponse> DescribeDBClustersWithOptionsAsync(DescribeDBClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClustersResponse>(await DoRequestAsync("DescribeDBClusters", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClustersResponse DescribeDBClusters(DescribeDBClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClustersWithOptions(request, runtime);
        }

        public async Task<DescribeDBClustersResponse> DescribeDBClustersAsync(DescribeDBClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClustersWithOptionsAsync(request, runtime);
        }

        public DescribeDBClusterAttributeResponse DescribeDBClusterAttributeWithOptions(DescribeDBClusterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAttributeResponse>(DoRequest("DescribeDBClusterAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDBClusterAttributeResponse> DescribeDBClusterAttributeWithOptionsAsync(DescribeDBClusterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDBClusterAttributeResponse>(await DoRequestAsync("DescribeDBClusterAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDBClusterAttributeResponse DescribeDBClusterAttribute(DescribeDBClusterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDBClusterAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeDBClusterAttributeResponse> DescribeDBClusterAttributeAsync(DescribeDBClusterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDBClusterAttributeWithOptionsAsync(request, runtime);
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
