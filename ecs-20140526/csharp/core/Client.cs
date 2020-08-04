// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Ecs20140526.Models;

namespace AlibabaCloud.SDK.Ecs20140526
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"cn-qingdao", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-beijing", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hangzhou", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shanghai", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shenzhen", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hongkong", "ecs-cn-hangzhou.aliyuncs.com"},
                {"ap-southeast-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"us-west-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"us-east-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shanghai-finance-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-north-2-gov-1", "ecs.aliyuncs.com"},
                {"ap-northeast-2-pop", "ecs.ap-northeast-1.aliyuncs.com"},
                {"cn-beijing-finance-1", "ecs.aliyuncs.com"},
                {"cn-beijing-finance-pop", "ecs.aliyuncs.com"},
                {"cn-beijing-gov-1", "ecs.aliyuncs.com"},
                {"cn-beijing-nu16-b01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-edge-1", "ecs.cn-qingdao-nebula.aliyuncs.com"},
                {"cn-fujian", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-haidian-cm12-c01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hangzhou-bj-b01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hangzhou-finance", "ecs.aliyuncs.com"},
                {"cn-hangzhou-internal-prod-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hangzhou-internal-test-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hangzhou-internal-test-2", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hangzhou-internal-test-3", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hangzhou-test-306", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-hongkong-finance-pop", "ecs.aliyuncs.com"},
                {"cn-shanghai-et15-b01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shanghai-et2-b01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shanghai-inner", "ecs.aliyuncs.com"},
                {"cn-shanghai-internal-test-1", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shenzhen-inner", "ecs.aliyuncs.com"},
                {"cn-shenzhen-st4-d01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-shenzhen-su18-b01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-wuhan", "ecs.aliyuncs.com"},
                {"cn-yushanfang", "ecs.aliyuncs.com"},
                {"cn-zhangbei-na61-b01", "ecs-cn-hangzhou.aliyuncs.com"},
                {"cn-zhangjiakou-na62-a01", "ecs.cn-zhangjiakou.aliyuncs.com"},
                {"cn-zhengzhou-nebula-1", "ecs.cn-qingdao-nebula.aliyuncs.com"},
                {"eu-west-1-oxs", "ecs.cn-shenzhen-cloudstone.aliyuncs.com"},
                {"rus-west-1-pop", "ecs.ap-northeast-1.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("ecs", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DescribeDeploymentSetSupportedInstanceTypeFamilyResponse DescribeDeploymentSetSupportedInstanceTypeFamilyWithOptions(DescribeDeploymentSetSupportedInstanceTypeFamilyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDeploymentSetSupportedInstanceTypeFamilyResponse>(DoRequest("DescribeDeploymentSetSupportedInstanceTypeFamily", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDeploymentSetSupportedInstanceTypeFamilyResponse> DescribeDeploymentSetSupportedInstanceTypeFamilyWithOptionsAsync(DescribeDeploymentSetSupportedInstanceTypeFamilyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDeploymentSetSupportedInstanceTypeFamilyResponse>(await DoRequestAsync("DescribeDeploymentSetSupportedInstanceTypeFamily", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDeploymentSetSupportedInstanceTypeFamilyResponse DescribeDeploymentSetSupportedInstanceTypeFamily(DescribeDeploymentSetSupportedInstanceTypeFamilyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDeploymentSetSupportedInstanceTypeFamilyWithOptions(request, runtime);
        }

        public async Task<DescribeDeploymentSetSupportedInstanceTypeFamilyResponse> DescribeDeploymentSetSupportedInstanceTypeFamilyAsync(DescribeDeploymentSetSupportedInstanceTypeFamilyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDeploymentSetSupportedInstanceTypeFamilyWithOptionsAsync(request, runtime);
        }

        public DescribeNetworkInterfaceAttributeResponse DescribeNetworkInterfaceAttributeWithOptions(DescribeNetworkInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkInterfaceAttributeResponse>(DoRequest("DescribeNetworkInterfaceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNetworkInterfaceAttributeResponse> DescribeNetworkInterfaceAttributeWithOptionsAsync(DescribeNetworkInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkInterfaceAttributeResponse>(await DoRequestAsync("DescribeNetworkInterfaceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNetworkInterfaceAttributeResponse DescribeNetworkInterfaceAttribute(DescribeNetworkInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNetworkInterfaceAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeNetworkInterfaceAttributeResponse> DescribeNetworkInterfaceAttributeAsync(DescribeNetworkInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNetworkInterfaceAttributeWithOptionsAsync(request, runtime);
        }

        public CopySnapshotResponse CopySnapshotWithOptions(CopySnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopySnapshotResponse>(DoRequest("CopySnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CopySnapshotResponse> CopySnapshotWithOptionsAsync(CopySnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopySnapshotResponse>(await DoRequestAsync("CopySnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CopySnapshotResponse CopySnapshot(CopySnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CopySnapshotWithOptions(request, runtime);
        }

        public async Task<CopySnapshotResponse> CopySnapshotAsync(CopySnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CopySnapshotWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostsChargeTypeResponse ModifyDedicatedHostsChargeTypeWithOptions(ModifyDedicatedHostsChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostsChargeTypeResponse>(DoRequest("ModifyDedicatedHostsChargeType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostsChargeTypeResponse> ModifyDedicatedHostsChargeTypeWithOptionsAsync(ModifyDedicatedHostsChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostsChargeTypeResponse>(await DoRequestAsync("ModifyDedicatedHostsChargeType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDedicatedHostsChargeTypeResponse ModifyDedicatedHostsChargeType(ModifyDedicatedHostsChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDedicatedHostsChargeTypeWithOptions(request, runtime);
        }

        public async Task<ModifyDedicatedHostsChargeTypeResponse> ModifyDedicatedHostsChargeTypeAsync(ModifyDedicatedHostsChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDedicatedHostsChargeTypeWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceMetadataOptionsResponse ModifyInstanceMetadataOptionsWithOptions(ModifyInstanceMetadataOptionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceMetadataOptionsResponse>(DoRequest("ModifyInstanceMetadataOptions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceMetadataOptionsResponse> ModifyInstanceMetadataOptionsWithOptionsAsync(ModifyInstanceMetadataOptionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceMetadataOptionsResponse>(await DoRequestAsync("ModifyInstanceMetadataOptions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceMetadataOptionsResponse ModifyInstanceMetadataOptions(ModifyInstanceMetadataOptionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceMetadataOptionsWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceMetadataOptionsResponse> ModifyInstanceMetadataOptionsAsync(ModifyInstanceMetadataOptionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceMetadataOptionsWithOptionsAsync(request, runtime);
        }

        public DescribeImageFromFamilyResponse DescribeImageFromFamilyWithOptions(DescribeImageFromFamilyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageFromFamilyResponse>(DoRequest("DescribeImageFromFamily", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeImageFromFamilyResponse> DescribeImageFromFamilyWithOptionsAsync(DescribeImageFromFamilyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageFromFamilyResponse>(await DoRequestAsync("DescribeImageFromFamily", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeImageFromFamilyResponse DescribeImageFromFamily(DescribeImageFromFamilyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeImageFromFamilyWithOptions(request, runtime);
        }

        public async Task<DescribeImageFromFamilyResponse> DescribeImageFromFamilyAsync(DescribeImageFromFamilyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeImageFromFamilyWithOptionsAsync(request, runtime);
        }

        public StopInstancesResponse StopInstancesWithOptions(StopInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInstancesResponse>(DoRequest("StopInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopInstancesResponse> StopInstancesWithOptionsAsync(StopInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInstancesResponse>(await DoRequestAsync("StopInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public StopInstancesResponse StopInstances(StopInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopInstancesWithOptions(request, runtime);
        }

        public async Task<StopInstancesResponse> StopInstancesAsync(StopInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopInstancesWithOptionsAsync(request, runtime);
        }

        public StartInstancesResponse StartInstancesWithOptions(StartInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartInstancesResponse>(DoRequest("StartInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StartInstancesResponse> StartInstancesWithOptionsAsync(StartInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartInstancesResponse>(await DoRequestAsync("StartInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public StartInstancesResponse StartInstances(StartInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartInstancesWithOptions(request, runtime);
        }

        public async Task<StartInstancesResponse> StartInstancesAsync(StartInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartInstancesWithOptionsAsync(request, runtime);
        }

        public RebootInstancesResponse RebootInstancesWithOptions(RebootInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RebootInstancesResponse>(DoRequest("RebootInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RebootInstancesResponse> RebootInstancesWithOptionsAsync(RebootInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RebootInstancesResponse>(await DoRequestAsync("RebootInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RebootInstancesResponse RebootInstances(RebootInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RebootInstancesWithOptions(request, runtime);
        }

        public async Task<RebootInstancesResponse> RebootInstancesAsync(RebootInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RebootInstancesWithOptionsAsync(request, runtime);
        }

        public RedeployDedicatedHostResponse RedeployDedicatedHostWithOptions(RedeployDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RedeployDedicatedHostResponse>(DoRequest("RedeployDedicatedHost", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RedeployDedicatedHostResponse> RedeployDedicatedHostWithOptionsAsync(RedeployDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RedeployDedicatedHostResponse>(await DoRequestAsync("RedeployDedicatedHost", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RedeployDedicatedHostResponse RedeployDedicatedHost(RedeployDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RedeployDedicatedHostWithOptions(request, runtime);
        }

        public async Task<RedeployDedicatedHostResponse> RedeployDedicatedHostAsync(RedeployDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RedeployDedicatedHostWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceMaintenanceAttributesResponse ModifyInstanceMaintenanceAttributesWithOptions(ModifyInstanceMaintenanceAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceMaintenanceAttributesResponse>(DoRequest("ModifyInstanceMaintenanceAttributes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceMaintenanceAttributesResponse> ModifyInstanceMaintenanceAttributesWithOptionsAsync(ModifyInstanceMaintenanceAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceMaintenanceAttributesResponse>(await DoRequestAsync("ModifyInstanceMaintenanceAttributes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceMaintenanceAttributesResponse ModifyInstanceMaintenanceAttributes(ModifyInstanceMaintenanceAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceMaintenanceAttributesWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceMaintenanceAttributesResponse> ModifyInstanceMaintenanceAttributesAsync(ModifyInstanceMaintenanceAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceMaintenanceAttributesWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceMaintenanceAttributesResponse DescribeInstanceMaintenanceAttributesWithOptions(DescribeInstanceMaintenanceAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceMaintenanceAttributesResponse>(DoRequest("DescribeInstanceMaintenanceAttributes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceMaintenanceAttributesResponse> DescribeInstanceMaintenanceAttributesWithOptionsAsync(DescribeInstanceMaintenanceAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceMaintenanceAttributesResponse>(await DoRequestAsync("DescribeInstanceMaintenanceAttributes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceMaintenanceAttributesResponse DescribeInstanceMaintenanceAttributes(DescribeInstanceMaintenanceAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceMaintenanceAttributesWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceMaintenanceAttributesResponse> DescribeInstanceMaintenanceAttributesAsync(DescribeInstanceMaintenanceAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceMaintenanceAttributesWithOptionsAsync(request, runtime);
        }

        public ModifyDemandResponse ModifyDemandWithOptions(ModifyDemandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDemandResponse>(DoRequest("ModifyDemand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDemandResponse> ModifyDemandWithOptionsAsync(ModifyDemandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDemandResponse>(await DoRequestAsync("ModifyDemand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDemandResponse ModifyDemand(ModifyDemandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDemandWithOptions(request, runtime);
        }

        public async Task<ModifyDemandResponse> ModifyDemandAsync(ModifyDemandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDemandWithOptionsAsync(request, runtime);
        }

        public DeleteDemandResponse DeleteDemandWithOptions(DeleteDemandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDemandResponse>(DoRequest("DeleteDemand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDemandResponse> DeleteDemandWithOptionsAsync(DeleteDemandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDemandResponse>(await DoRequestAsync("DeleteDemand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDemandResponse DeleteDemand(DeleteDemandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDemandWithOptions(request, runtime);
        }

        public async Task<DeleteDemandResponse> DeleteDemandAsync(DeleteDemandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDemandWithOptionsAsync(request, runtime);
        }

        public CreateDemandResponse CreateDemandWithOptions(CreateDemandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDemandResponse>(DoRequest("CreateDemand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDemandResponse> CreateDemandWithOptionsAsync(CreateDemandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDemandResponse>(await DoRequestAsync("CreateDemand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateDemandResponse CreateDemand(CreateDemandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDemandWithOptions(request, runtime);
        }

        public async Task<CreateDemandResponse> CreateDemandAsync(CreateDemandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDemandWithOptionsAsync(request, runtime);
        }

        public PurchaseStorageCapacityUnitResponse PurchaseStorageCapacityUnitWithOptions(PurchaseStorageCapacityUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PurchaseStorageCapacityUnitResponse>(DoRequest("PurchaseStorageCapacityUnit", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PurchaseStorageCapacityUnitResponse> PurchaseStorageCapacityUnitWithOptionsAsync(PurchaseStorageCapacityUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PurchaseStorageCapacityUnitResponse>(await DoRequestAsync("PurchaseStorageCapacityUnit", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public PurchaseStorageCapacityUnitResponse PurchaseStorageCapacityUnit(PurchaseStorageCapacityUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PurchaseStorageCapacityUnitWithOptions(request, runtime);
        }

        public async Task<PurchaseStorageCapacityUnitResponse> PurchaseStorageCapacityUnitAsync(PurchaseStorageCapacityUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PurchaseStorageCapacityUnitWithOptionsAsync(request, runtime);
        }

        public ModifyStorageCapacityUnitAttributeResponse ModifyStorageCapacityUnitAttributeWithOptions(ModifyStorageCapacityUnitAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyStorageCapacityUnitAttributeResponse>(DoRequest("ModifyStorageCapacityUnitAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyStorageCapacityUnitAttributeResponse> ModifyStorageCapacityUnitAttributeWithOptionsAsync(ModifyStorageCapacityUnitAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyStorageCapacityUnitAttributeResponse>(await DoRequestAsync("ModifyStorageCapacityUnitAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyStorageCapacityUnitAttributeResponse ModifyStorageCapacityUnitAttribute(ModifyStorageCapacityUnitAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyStorageCapacityUnitAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyStorageCapacityUnitAttributeResponse> ModifyStorageCapacityUnitAttributeAsync(ModifyStorageCapacityUnitAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyStorageCapacityUnitAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeStorageCapacityUnitsResponse DescribeStorageCapacityUnitsWithOptions(DescribeStorageCapacityUnitsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStorageCapacityUnitsResponse>(DoRequest("DescribeStorageCapacityUnits", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeStorageCapacityUnitsResponse> DescribeStorageCapacityUnitsWithOptionsAsync(DescribeStorageCapacityUnitsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStorageCapacityUnitsResponse>(await DoRequestAsync("DescribeStorageCapacityUnits", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeStorageCapacityUnitsResponse DescribeStorageCapacityUnits(DescribeStorageCapacityUnitsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeStorageCapacityUnitsWithOptions(request, runtime);
        }

        public async Task<DescribeStorageCapacityUnitsResponse> DescribeStorageCapacityUnitsAsync(DescribeStorageCapacityUnitsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeStorageCapacityUnitsWithOptionsAsync(request, runtime);
        }

        public RunCommandResponse RunCommandWithOptions(RunCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RunCommandResponse>(DoRequest("RunCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RunCommandResponse> RunCommandWithOptionsAsync(RunCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RunCommandResponse>(await DoRequestAsync("RunCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RunCommandResponse RunCommand(RunCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RunCommandWithOptions(request, runtime);
        }

        public async Task<RunCommandResponse> RunCommandAsync(RunCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RunCommandWithOptionsAsync(request, runtime);
        }

        public DeleteInstancesResponse DeleteInstancesWithOptions(DeleteInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteInstancesResponse>(DoRequest("DeleteInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteInstancesResponse> DeleteInstancesWithOptionsAsync(DeleteInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteInstancesResponse>(await DoRequestAsync("DeleteInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteInstancesResponse DeleteInstances(DeleteInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteInstancesWithOptions(request, runtime);
        }

        public async Task<DeleteInstancesResponse> DeleteInstancesAsync(DeleteInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteInstancesWithOptionsAsync(request, runtime);
        }

        public ModifyStorageSetAttributeResponse ModifyStorageSetAttributeWithOptions(ModifyStorageSetAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyStorageSetAttributeResponse>(DoRequest("ModifyStorageSetAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyStorageSetAttributeResponse> ModifyStorageSetAttributeWithOptionsAsync(ModifyStorageSetAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyStorageSetAttributeResponse>(await DoRequestAsync("ModifyStorageSetAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyStorageSetAttributeResponse ModifyStorageSetAttribute(ModifyStorageSetAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyStorageSetAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyStorageSetAttributeResponse> ModifyStorageSetAttributeAsync(ModifyStorageSetAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyStorageSetAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeStorageSetsResponse DescribeStorageSetsWithOptions(DescribeStorageSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStorageSetsResponse>(DoRequest("DescribeStorageSets", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeStorageSetsResponse> DescribeStorageSetsWithOptionsAsync(DescribeStorageSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStorageSetsResponse>(await DoRequestAsync("DescribeStorageSets", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeStorageSetsResponse DescribeStorageSets(DescribeStorageSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeStorageSetsWithOptions(request, runtime);
        }

        public async Task<DescribeStorageSetsResponse> DescribeStorageSetsAsync(DescribeStorageSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeStorageSetsWithOptionsAsync(request, runtime);
        }

        public DescribeStorageSetDetailsResponse DescribeStorageSetDetailsWithOptions(DescribeStorageSetDetailsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStorageSetDetailsResponse>(DoRequest("DescribeStorageSetDetails", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeStorageSetDetailsResponse> DescribeStorageSetDetailsWithOptionsAsync(DescribeStorageSetDetailsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStorageSetDetailsResponse>(await DoRequestAsync("DescribeStorageSetDetails", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeStorageSetDetailsResponse DescribeStorageSetDetails(DescribeStorageSetDetailsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeStorageSetDetailsWithOptions(request, runtime);
        }

        public async Task<DescribeStorageSetDetailsResponse> DescribeStorageSetDetailsAsync(DescribeStorageSetDetailsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeStorageSetDetailsWithOptionsAsync(request, runtime);
        }

        public DeleteStorageSetResponse DeleteStorageSetWithOptions(DeleteStorageSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStorageSetResponse>(DoRequest("DeleteStorageSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteStorageSetResponse> DeleteStorageSetWithOptionsAsync(DeleteStorageSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStorageSetResponse>(await DoRequestAsync("DeleteStorageSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteStorageSetResponse DeleteStorageSet(DeleteStorageSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteStorageSetWithOptions(request, runtime);
        }

        public async Task<DeleteStorageSetResponse> DeleteStorageSetAsync(DeleteStorageSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteStorageSetWithOptionsAsync(request, runtime);
        }

        public CreateStorageSetResponse CreateStorageSetWithOptions(CreateStorageSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStorageSetResponse>(DoRequest("CreateStorageSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateStorageSetResponse> CreateStorageSetWithOptionsAsync(CreateStorageSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStorageSetResponse>(await DoRequestAsync("CreateStorageSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateStorageSetResponse CreateStorageSet(CreateStorageSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateStorageSetWithOptions(request, runtime);
        }

        public async Task<CreateStorageSetResponse> CreateStorageSetAsync(CreateStorageSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateStorageSetWithOptionsAsync(request, runtime);
        }

        public ModifyDiskSpecResponse ModifyDiskSpecWithOptions(ModifyDiskSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDiskSpecResponse>(DoRequest("ModifyDiskSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDiskSpecResponse> ModifyDiskSpecWithOptionsAsync(ModifyDiskSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDiskSpecResponse>(await DoRequestAsync("ModifyDiskSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDiskSpecResponse ModifyDiskSpec(ModifyDiskSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDiskSpecWithOptions(request, runtime);
        }

        public async Task<ModifyDiskSpecResponse> ModifyDiskSpecAsync(ModifyDiskSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDiskSpecWithOptionsAsync(request, runtime);
        }

        public ModifyAutoProvisioningGroupResponse ModifyAutoProvisioningGroupWithOptions(ModifyAutoProvisioningGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoProvisioningGroupResponse>(DoRequest("ModifyAutoProvisioningGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAutoProvisioningGroupResponse> ModifyAutoProvisioningGroupWithOptionsAsync(ModifyAutoProvisioningGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoProvisioningGroupResponse>(await DoRequestAsync("ModifyAutoProvisioningGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAutoProvisioningGroupResponse ModifyAutoProvisioningGroup(ModifyAutoProvisioningGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAutoProvisioningGroupWithOptions(request, runtime);
        }

        public async Task<ModifyAutoProvisioningGroupResponse> ModifyAutoProvisioningGroupAsync(ModifyAutoProvisioningGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAutoProvisioningGroupWithOptionsAsync(request, runtime);
        }

        public DescribeAutoProvisioningGroupsResponse DescribeAutoProvisioningGroupsWithOptions(DescribeAutoProvisioningGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoProvisioningGroupsResponse>(DoRequest("DescribeAutoProvisioningGroups", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAutoProvisioningGroupsResponse> DescribeAutoProvisioningGroupsWithOptionsAsync(DescribeAutoProvisioningGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoProvisioningGroupsResponse>(await DoRequestAsync("DescribeAutoProvisioningGroups", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAutoProvisioningGroupsResponse DescribeAutoProvisioningGroups(DescribeAutoProvisioningGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAutoProvisioningGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeAutoProvisioningGroupsResponse> DescribeAutoProvisioningGroupsAsync(DescribeAutoProvisioningGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAutoProvisioningGroupsWithOptionsAsync(request, runtime);
        }

        public DescribeAutoProvisioningGroupInstancesResponse DescribeAutoProvisioningGroupInstancesWithOptions(DescribeAutoProvisioningGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoProvisioningGroupInstancesResponse>(DoRequest("DescribeAutoProvisioningGroupInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAutoProvisioningGroupInstancesResponse> DescribeAutoProvisioningGroupInstancesWithOptionsAsync(DescribeAutoProvisioningGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoProvisioningGroupInstancesResponse>(await DoRequestAsync("DescribeAutoProvisioningGroupInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAutoProvisioningGroupInstancesResponse DescribeAutoProvisioningGroupInstances(DescribeAutoProvisioningGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAutoProvisioningGroupInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeAutoProvisioningGroupInstancesResponse> DescribeAutoProvisioningGroupInstancesAsync(DescribeAutoProvisioningGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAutoProvisioningGroupInstancesWithOptionsAsync(request, runtime);
        }

        public DeleteAutoProvisioningGroupResponse DeleteAutoProvisioningGroupWithOptions(DeleteAutoProvisioningGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAutoProvisioningGroupResponse>(DoRequest("DeleteAutoProvisioningGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAutoProvisioningGroupResponse> DeleteAutoProvisioningGroupWithOptionsAsync(DeleteAutoProvisioningGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAutoProvisioningGroupResponse>(await DoRequestAsync("DeleteAutoProvisioningGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAutoProvisioningGroupResponse DeleteAutoProvisioningGroup(DeleteAutoProvisioningGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAutoProvisioningGroupWithOptions(request, runtime);
        }

        public async Task<DeleteAutoProvisioningGroupResponse> DeleteAutoProvisioningGroupAsync(DeleteAutoProvisioningGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAutoProvisioningGroupWithOptionsAsync(request, runtime);
        }

        public CreateAutoProvisioningGroupResponse CreateAutoProvisioningGroupWithOptions(CreateAutoProvisioningGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAutoProvisioningGroupResponse>(DoRequest("CreateAutoProvisioningGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAutoProvisioningGroupResponse> CreateAutoProvisioningGroupWithOptionsAsync(CreateAutoProvisioningGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAutoProvisioningGroupResponse>(await DoRequestAsync("CreateAutoProvisioningGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateAutoProvisioningGroupResponse CreateAutoProvisioningGroup(CreateAutoProvisioningGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAutoProvisioningGroupWithOptions(request, runtime);
        }

        public async Task<CreateAutoProvisioningGroupResponse> CreateAutoProvisioningGroupAsync(CreateAutoProvisioningGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAutoProvisioningGroupWithOptionsAsync(request, runtime);
        }

        public DescribeAutoProvisioningGroupHistoryResponse DescribeAutoProvisioningGroupHistoryWithOptions(DescribeAutoProvisioningGroupHistoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoProvisioningGroupHistoryResponse>(DoRequest("DescribeAutoProvisioningGroupHistory", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAutoProvisioningGroupHistoryResponse> DescribeAutoProvisioningGroupHistoryWithOptionsAsync(DescribeAutoProvisioningGroupHistoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoProvisioningGroupHistoryResponse>(await DoRequestAsync("DescribeAutoProvisioningGroupHistory", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAutoProvisioningGroupHistoryResponse DescribeAutoProvisioningGroupHistory(DescribeAutoProvisioningGroupHistoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAutoProvisioningGroupHistoryWithOptions(request, runtime);
        }

        public async Task<DescribeAutoProvisioningGroupHistoryResponse> DescribeAutoProvisioningGroupHistoryAsync(DescribeAutoProvisioningGroupHistoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAutoProvisioningGroupHistoryWithOptionsAsync(request, runtime);
        }

        public ReportInstancesStatusResponse ReportInstancesStatusWithOptions(ReportInstancesStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReportInstancesStatusResponse>(DoRequest("ReportInstancesStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReportInstancesStatusResponse> ReportInstancesStatusWithOptionsAsync(ReportInstancesStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReportInstancesStatusResponse>(await DoRequestAsync("ReportInstancesStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ReportInstancesStatusResponse ReportInstancesStatus(ReportInstancesStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReportInstancesStatusWithOptions(request, runtime);
        }

        public async Task<ReportInstancesStatusResponse> ReportInstancesStatusAsync(ReportInstancesStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReportInstancesStatusWithOptionsAsync(request, runtime);
        }

        public ModifyReservedInstanceAttributeResponse ModifyReservedInstanceAttributeWithOptions(ModifyReservedInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReservedInstanceAttributeResponse>(DoRequest("ModifyReservedInstanceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyReservedInstanceAttributeResponse> ModifyReservedInstanceAttributeWithOptionsAsync(ModifyReservedInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReservedInstanceAttributeResponse>(await DoRequestAsync("ModifyReservedInstanceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyReservedInstanceAttributeResponse ModifyReservedInstanceAttribute(ModifyReservedInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyReservedInstanceAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyReservedInstanceAttributeResponse> ModifyReservedInstanceAttributeAsync(ModifyReservedInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyReservedInstanceAttributeWithOptionsAsync(request, runtime);
        }

        public PurchaseReservedInstancesOfferingResponse PurchaseReservedInstancesOfferingWithOptions(PurchaseReservedInstancesOfferingRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PurchaseReservedInstancesOfferingResponse>(DoRequest("PurchaseReservedInstancesOffering", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PurchaseReservedInstancesOfferingResponse> PurchaseReservedInstancesOfferingWithOptionsAsync(PurchaseReservedInstancesOfferingRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PurchaseReservedInstancesOfferingResponse>(await DoRequestAsync("PurchaseReservedInstancesOffering", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public PurchaseReservedInstancesOfferingResponse PurchaseReservedInstancesOffering(PurchaseReservedInstancesOfferingRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PurchaseReservedInstancesOfferingWithOptions(request, runtime);
        }

        public async Task<PurchaseReservedInstancesOfferingResponse> PurchaseReservedInstancesOfferingAsync(PurchaseReservedInstancesOfferingRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PurchaseReservedInstancesOfferingWithOptionsAsync(request, runtime);
        }

        public ModifyReservedInstancesResponse ModifyReservedInstancesWithOptions(ModifyReservedInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReservedInstancesResponse>(DoRequest("ModifyReservedInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyReservedInstancesResponse> ModifyReservedInstancesWithOptionsAsync(ModifyReservedInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyReservedInstancesResponse>(await DoRequestAsync("ModifyReservedInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyReservedInstancesResponse ModifyReservedInstances(ModifyReservedInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyReservedInstancesWithOptions(request, runtime);
        }

        public async Task<ModifyReservedInstancesResponse> ModifyReservedInstancesAsync(ModifyReservedInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyReservedInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeReservedInstancesResponse DescribeReservedInstancesWithOptions(DescribeReservedInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeReservedInstancesResponse>(DoRequest("DescribeReservedInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeReservedInstancesResponse> DescribeReservedInstancesWithOptionsAsync(DescribeReservedInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeReservedInstancesResponse>(await DoRequestAsync("DescribeReservedInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeReservedInstancesResponse DescribeReservedInstances(DescribeReservedInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeReservedInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeReservedInstancesResponse> DescribeReservedInstancesAsync(DescribeReservedInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeReservedInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeDemandsResponse DescribeDemandsWithOptions(DescribeDemandsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDemandsResponse>(DoRequest("DescribeDemands", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDemandsResponse> DescribeDemandsWithOptionsAsync(DescribeDemandsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDemandsResponse>(await DoRequestAsync("DescribeDemands", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDemandsResponse DescribeDemands(DescribeDemandsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDemandsWithOptions(request, runtime);
        }

        public async Task<DescribeDemandsResponse> DescribeDemandsAsync(DescribeDemandsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDemandsWithOptionsAsync(request, runtime);
        }

        public ImportSnapshotResponse ImportSnapshotWithOptions(ImportSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportSnapshotResponse>(DoRequest("ImportSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ImportSnapshotResponse> ImportSnapshotWithOptionsAsync(ImportSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportSnapshotResponse>(await DoRequestAsync("ImportSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ImportSnapshotResponse ImportSnapshot(ImportSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ImportSnapshotWithOptions(request, runtime);
        }

        public async Task<ImportSnapshotResponse> ImportSnapshotAsync(ImportSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ImportSnapshotWithOptionsAsync(request, runtime);
        }

        public ExportSnapshotResponse ExportSnapshotWithOptions(ExportSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportSnapshotResponse>(DoRequest("ExportSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ExportSnapshotResponse> ExportSnapshotWithOptionsAsync(ExportSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportSnapshotResponse>(await DoRequestAsync("ExportSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ExportSnapshotResponse ExportSnapshot(ExportSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExportSnapshotWithOptions(request, runtime);
        }

        public async Task<ExportSnapshotResponse> ExportSnapshotAsync(ExportSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExportSnapshotWithOptionsAsync(request, runtime);
        }

        public UntagResourcesResponse UntagResourcesWithOptions(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(DoRequest("UntagResources", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UntagResourcesResponse> UntagResourcesWithOptionsAsync(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(await DoRequestAsync("UntagResources", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<TagResourcesResponse>(DoRequest("TagResources", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TagResourcesResponse> TagResourcesWithOptionsAsync(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(await DoRequestAsync("TagResources", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<ListTagResourcesResponse>(DoRequest("ListTagResources", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesWithOptionsAsync(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(await DoRequestAsync("ListTagResources", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public AcceptInquiredSystemEventResponse AcceptInquiredSystemEventWithOptions(AcceptInquiredSystemEventRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AcceptInquiredSystemEventResponse>(DoRequest("AcceptInquiredSystemEvent", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AcceptInquiredSystemEventResponse> AcceptInquiredSystemEventWithOptionsAsync(AcceptInquiredSystemEventRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AcceptInquiredSystemEventResponse>(await DoRequestAsync("AcceptInquiredSystemEvent", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AcceptInquiredSystemEventResponse AcceptInquiredSystemEvent(AcceptInquiredSystemEventRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AcceptInquiredSystemEventWithOptions(request, runtime);
        }

        public async Task<AcceptInquiredSystemEventResponse> AcceptInquiredSystemEventAsync(AcceptInquiredSystemEventRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AcceptInquiredSystemEventWithOptionsAsync(request, runtime);
        }

        public RedeployInstanceResponse RedeployInstanceWithOptions(RedeployInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RedeployInstanceResponse>(DoRequest("RedeployInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RedeployInstanceResponse> RedeployInstanceWithOptionsAsync(RedeployInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RedeployInstanceResponse>(await DoRequestAsync("RedeployInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RedeployInstanceResponse RedeployInstance(RedeployInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RedeployInstanceWithOptions(request, runtime);
        }

        public async Task<RedeployInstanceResponse> RedeployInstanceAsync(RedeployInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RedeployInstanceWithOptionsAsync(request, runtime);
        }

        public UnassignIpv6AddressesResponse UnassignIpv6AddressesWithOptions(UnassignIpv6AddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassignIpv6AddressesResponse>(DoRequest("UnassignIpv6Addresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassignIpv6AddressesResponse> UnassignIpv6AddressesWithOptionsAsync(UnassignIpv6AddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassignIpv6AddressesResponse>(await DoRequestAsync("UnassignIpv6Addresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public UnassignIpv6AddressesResponse UnassignIpv6Addresses(UnassignIpv6AddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassignIpv6AddressesWithOptions(request, runtime);
        }

        public async Task<UnassignIpv6AddressesResponse> UnassignIpv6AddressesAsync(UnassignIpv6AddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassignIpv6AddressesWithOptionsAsync(request, runtime);
        }

        public AssignIpv6AddressesResponse AssignIpv6AddressesWithOptions(AssignIpv6AddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssignIpv6AddressesResponse>(DoRequest("AssignIpv6Addresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssignIpv6AddressesResponse> AssignIpv6AddressesWithOptionsAsync(AssignIpv6AddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssignIpv6AddressesResponse>(await DoRequestAsync("AssignIpv6Addresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AssignIpv6AddressesResponse AssignIpv6Addresses(AssignIpv6AddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssignIpv6AddressesWithOptions(request, runtime);
        }

        public async Task<AssignIpv6AddressesResponse> AssignIpv6AddressesAsync(AssignIpv6AddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssignIpv6AddressesWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceTopologyResponse DescribeInstanceTopologyWithOptions(DescribeInstanceTopologyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceTopologyResponse>(DoRequest("DescribeInstanceTopology", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceTopologyResponse> DescribeInstanceTopologyWithOptionsAsync(DescribeInstanceTopologyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceTopologyResponse>(await DoRequestAsync("DescribeInstanceTopology", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceTopologyResponse DescribeInstanceTopology(DescribeInstanceTopologyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceTopologyWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceTopologyResponse> DescribeInstanceTopologyAsync(DescribeInstanceTopologyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceTopologyWithOptionsAsync(request, runtime);
        }

        public RenewDedicatedHostsResponse RenewDedicatedHostsWithOptions(RenewDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewDedicatedHostsResponse>(DoRequest("RenewDedicatedHosts", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RenewDedicatedHostsResponse> RenewDedicatedHostsWithOptionsAsync(RenewDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewDedicatedHostsResponse>(await DoRequestAsync("RenewDedicatedHosts", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RenewDedicatedHostsResponse RenewDedicatedHosts(RenewDedicatedHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RenewDedicatedHostsWithOptions(request, runtime);
        }

        public async Task<RenewDedicatedHostsResponse> RenewDedicatedHostsAsync(RenewDedicatedHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RenewDedicatedHostsWithOptionsAsync(request, runtime);
        }

        public ReleaseDedicatedHostResponse ReleaseDedicatedHostWithOptions(ReleaseDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseDedicatedHostResponse>(DoRequest("ReleaseDedicatedHost", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleaseDedicatedHostResponse> ReleaseDedicatedHostWithOptionsAsync(ReleaseDedicatedHostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseDedicatedHostResponse>(await DoRequestAsync("ReleaseDedicatedHost", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ReleaseDedicatedHostResponse ReleaseDedicatedHost(ReleaseDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReleaseDedicatedHostWithOptions(request, runtime);
        }

        public async Task<ReleaseDedicatedHostResponse> ReleaseDedicatedHostAsync(ReleaseDedicatedHostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReleaseDedicatedHostWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceDeploymentResponse ModifyInstanceDeploymentWithOptions(ModifyInstanceDeploymentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceDeploymentResponse>(DoRequest("ModifyInstanceDeployment", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceDeploymentResponse> ModifyInstanceDeploymentWithOptionsAsync(ModifyInstanceDeploymentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceDeploymentResponse>(await DoRequestAsync("ModifyInstanceDeployment", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceDeploymentResponse ModifyInstanceDeployment(ModifyInstanceDeploymentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceDeploymentWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceDeploymentResponse> ModifyInstanceDeploymentAsync(ModifyInstanceDeploymentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceDeploymentWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostAutoRenewAttributeResponse ModifyDedicatedHostAutoRenewAttributeWithOptions(ModifyDedicatedHostAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAutoRenewAttributeResponse>(DoRequest("ModifyDedicatedHostAutoRenewAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostAutoRenewAttributeResponse> ModifyDedicatedHostAutoRenewAttributeWithOptionsAsync(ModifyDedicatedHostAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAutoRenewAttributeResponse>(await DoRequestAsync("ModifyDedicatedHostAutoRenewAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDedicatedHostAutoRenewAttributeResponse ModifyDedicatedHostAutoRenewAttribute(ModifyDedicatedHostAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDedicatedHostAutoRenewAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyDedicatedHostAutoRenewAttributeResponse> ModifyDedicatedHostAutoRenewAttributeAsync(ModifyDedicatedHostAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDedicatedHostAutoRenewAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostAutoReleaseTimeResponse ModifyDedicatedHostAutoReleaseTimeWithOptions(ModifyDedicatedHostAutoReleaseTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAutoReleaseTimeResponse>(DoRequest("ModifyDedicatedHostAutoReleaseTime", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostAutoReleaseTimeResponse> ModifyDedicatedHostAutoReleaseTimeWithOptionsAsync(ModifyDedicatedHostAutoReleaseTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAutoReleaseTimeResponse>(await DoRequestAsync("ModifyDedicatedHostAutoReleaseTime", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDedicatedHostAutoReleaseTimeResponse ModifyDedicatedHostAutoReleaseTime(ModifyDedicatedHostAutoReleaseTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDedicatedHostAutoReleaseTimeWithOptions(request, runtime);
        }

        public async Task<ModifyDedicatedHostAutoReleaseTimeResponse> ModifyDedicatedHostAutoReleaseTimeAsync(ModifyDedicatedHostAutoReleaseTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDedicatedHostAutoReleaseTimeWithOptionsAsync(request, runtime);
        }

        public ModifyDedicatedHostAttributeResponse ModifyDedicatedHostAttributeWithOptions(ModifyDedicatedHostAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAttributeResponse>(DoRequest("ModifyDedicatedHostAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDedicatedHostAttributeResponse> ModifyDedicatedHostAttributeWithOptionsAsync(ModifyDedicatedHostAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDedicatedHostAttributeResponse>(await DoRequestAsync("ModifyDedicatedHostAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public DescribeDedicatedHostsResponse DescribeDedicatedHostsWithOptions(DescribeDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostsResponse>(DoRequest("DescribeDedicatedHosts", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDedicatedHostsResponse> DescribeDedicatedHostsWithOptionsAsync(DescribeDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostsResponse>(await DoRequestAsync("DescribeDedicatedHosts", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public DescribeDedicatedHostTypesResponse DescribeDedicatedHostTypesWithOptions(DescribeDedicatedHostTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostTypesResponse>(DoRequest("DescribeDedicatedHostTypes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDedicatedHostTypesResponse> DescribeDedicatedHostTypesWithOptionsAsync(DescribeDedicatedHostTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostTypesResponse>(await DoRequestAsync("DescribeDedicatedHostTypes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDedicatedHostTypesResponse DescribeDedicatedHostTypes(DescribeDedicatedHostTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDedicatedHostTypesWithOptions(request, runtime);
        }

        public async Task<DescribeDedicatedHostTypesResponse> DescribeDedicatedHostTypesAsync(DescribeDedicatedHostTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDedicatedHostTypesWithOptionsAsync(request, runtime);
        }

        public DescribeDedicatedHostAutoRenewResponse DescribeDedicatedHostAutoRenewWithOptions(DescribeDedicatedHostAutoRenewRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostAutoRenewResponse>(DoRequest("DescribeDedicatedHostAutoRenew", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDedicatedHostAutoRenewResponse> DescribeDedicatedHostAutoRenewWithOptionsAsync(DescribeDedicatedHostAutoRenewRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDedicatedHostAutoRenewResponse>(await DoRequestAsync("DescribeDedicatedHostAutoRenew", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDedicatedHostAutoRenewResponse DescribeDedicatedHostAutoRenew(DescribeDedicatedHostAutoRenewRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDedicatedHostAutoRenewWithOptions(request, runtime);
        }

        public async Task<DescribeDedicatedHostAutoRenewResponse> DescribeDedicatedHostAutoRenewAsync(DescribeDedicatedHostAutoRenewRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDedicatedHostAutoRenewWithOptionsAsync(request, runtime);
        }

        public AllocateDedicatedHostsResponse AllocateDedicatedHostsWithOptions(AllocateDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateDedicatedHostsResponse>(DoRequest("AllocateDedicatedHosts", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateDedicatedHostsResponse> AllocateDedicatedHostsWithOptionsAsync(AllocateDedicatedHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateDedicatedHostsResponse>(await DoRequestAsync("AllocateDedicatedHosts", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AllocateDedicatedHostsResponse AllocateDedicatedHosts(AllocateDedicatedHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateDedicatedHostsWithOptions(request, runtime);
        }

        public async Task<AllocateDedicatedHostsResponse> AllocateDedicatedHostsAsync(AllocateDedicatedHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateDedicatedHostsWithOptionsAsync(request, runtime);
        }

        public CreateSimulatedSystemEventsResponse CreateSimulatedSystemEventsWithOptions(CreateSimulatedSystemEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSimulatedSystemEventsResponse>(DoRequest("CreateSimulatedSystemEvents", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSimulatedSystemEventsResponse> CreateSimulatedSystemEventsWithOptionsAsync(CreateSimulatedSystemEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSimulatedSystemEventsResponse>(await DoRequestAsync("CreateSimulatedSystemEvents", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateSimulatedSystemEventsResponse CreateSimulatedSystemEvents(CreateSimulatedSystemEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSimulatedSystemEventsWithOptions(request, runtime);
        }

        public async Task<CreateSimulatedSystemEventsResponse> CreateSimulatedSystemEventsAsync(CreateSimulatedSystemEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSimulatedSystemEventsWithOptionsAsync(request, runtime);
        }

        public CancelSimulatedSystemEventsResponse CancelSimulatedSystemEventsWithOptions(CancelSimulatedSystemEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelSimulatedSystemEventsResponse>(DoRequest("CancelSimulatedSystemEvents", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelSimulatedSystemEventsResponse> CancelSimulatedSystemEventsWithOptionsAsync(CancelSimulatedSystemEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelSimulatedSystemEventsResponse>(await DoRequestAsync("CancelSimulatedSystemEvents", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CancelSimulatedSystemEventsResponse CancelSimulatedSystemEvents(CancelSimulatedSystemEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelSimulatedSystemEventsWithOptions(request, runtime);
        }

        public async Task<CancelSimulatedSystemEventsResponse> CancelSimulatedSystemEventsAsync(CancelSimulatedSystemEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelSimulatedSystemEventsWithOptionsAsync(request, runtime);
        }

        public DescribeEniMonitorDataResponse DescribeEniMonitorDataWithOptions(DescribeEniMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEniMonitorDataResponse>(DoRequest("DescribeEniMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEniMonitorDataResponse> DescribeEniMonitorDataWithOptionsAsync(DescribeEniMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEniMonitorDataResponse>(await DoRequestAsync("DescribeEniMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEniMonitorDataResponse DescribeEniMonitorData(DescribeEniMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEniMonitorDataWithOptions(request, runtime);
        }

        public async Task<DescribeEniMonitorDataResponse> DescribeEniMonitorDataAsync(DescribeEniMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEniMonitorDataWithOptionsAsync(request, runtime);
        }

        public DescribeAccountAttributesResponse DescribeAccountAttributesWithOptions(DescribeAccountAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccountAttributesResponse>(DoRequest("DescribeAccountAttributes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAccountAttributesResponse> DescribeAccountAttributesWithOptionsAsync(DescribeAccountAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccountAttributesResponse>(await DoRequestAsync("DescribeAccountAttributes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAccountAttributesResponse DescribeAccountAttributes(DescribeAccountAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAccountAttributesWithOptions(request, runtime);
        }

        public async Task<DescribeAccountAttributesResponse> DescribeAccountAttributesAsync(DescribeAccountAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAccountAttributesWithOptionsAsync(request, runtime);
        }

        public ModifyLaunchTemplateDefaultVersionResponse ModifyLaunchTemplateDefaultVersionWithOptions(ModifyLaunchTemplateDefaultVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLaunchTemplateDefaultVersionResponse>(DoRequest("ModifyLaunchTemplateDefaultVersion", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyLaunchTemplateDefaultVersionResponse> ModifyLaunchTemplateDefaultVersionWithOptionsAsync(ModifyLaunchTemplateDefaultVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLaunchTemplateDefaultVersionResponse>(await DoRequestAsync("ModifyLaunchTemplateDefaultVersion", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyLaunchTemplateDefaultVersionResponse ModifyLaunchTemplateDefaultVersion(ModifyLaunchTemplateDefaultVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyLaunchTemplateDefaultVersionWithOptions(request, runtime);
        }

        public async Task<ModifyLaunchTemplateDefaultVersionResponse> ModifyLaunchTemplateDefaultVersionAsync(ModifyLaunchTemplateDefaultVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyLaunchTemplateDefaultVersionWithOptionsAsync(request, runtime);
        }

        public DescribeLaunchTemplatesResponse DescribeLaunchTemplatesWithOptions(DescribeLaunchTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLaunchTemplatesResponse>(DoRequest("DescribeLaunchTemplates", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLaunchTemplatesResponse> DescribeLaunchTemplatesWithOptionsAsync(DescribeLaunchTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLaunchTemplatesResponse>(await DoRequestAsync("DescribeLaunchTemplates", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLaunchTemplatesResponse DescribeLaunchTemplates(DescribeLaunchTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLaunchTemplatesWithOptions(request, runtime);
        }

        public async Task<DescribeLaunchTemplatesResponse> DescribeLaunchTemplatesAsync(DescribeLaunchTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLaunchTemplatesWithOptionsAsync(request, runtime);
        }

        public DescribeLaunchTemplateVersionsResponse DescribeLaunchTemplateVersionsWithOptions(DescribeLaunchTemplateVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLaunchTemplateVersionsResponse>(DoRequest("DescribeLaunchTemplateVersions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLaunchTemplateVersionsResponse> DescribeLaunchTemplateVersionsWithOptionsAsync(DescribeLaunchTemplateVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLaunchTemplateVersionsResponse>(await DoRequestAsync("DescribeLaunchTemplateVersions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLaunchTemplateVersionsResponse DescribeLaunchTemplateVersions(DescribeLaunchTemplateVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLaunchTemplateVersionsWithOptions(request, runtime);
        }

        public async Task<DescribeLaunchTemplateVersionsResponse> DescribeLaunchTemplateVersionsAsync(DescribeLaunchTemplateVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLaunchTemplateVersionsWithOptionsAsync(request, runtime);
        }

        public DeleteLaunchTemplateVersionResponse DeleteLaunchTemplateVersionWithOptions(DeleteLaunchTemplateVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLaunchTemplateVersionResponse>(DoRequest("DeleteLaunchTemplateVersion", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteLaunchTemplateVersionResponse> DeleteLaunchTemplateVersionWithOptionsAsync(DeleteLaunchTemplateVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLaunchTemplateVersionResponse>(await DoRequestAsync("DeleteLaunchTemplateVersion", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteLaunchTemplateVersionResponse DeleteLaunchTemplateVersion(DeleteLaunchTemplateVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteLaunchTemplateVersionWithOptions(request, runtime);
        }

        public async Task<DeleteLaunchTemplateVersionResponse> DeleteLaunchTemplateVersionAsync(DeleteLaunchTemplateVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteLaunchTemplateVersionWithOptionsAsync(request, runtime);
        }

        public DeleteLaunchTemplateResponse DeleteLaunchTemplateWithOptions(DeleteLaunchTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLaunchTemplateResponse>(DoRequest("DeleteLaunchTemplate", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteLaunchTemplateResponse> DeleteLaunchTemplateWithOptionsAsync(DeleteLaunchTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLaunchTemplateResponse>(await DoRequestAsync("DeleteLaunchTemplate", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteLaunchTemplateResponse DeleteLaunchTemplate(DeleteLaunchTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteLaunchTemplateWithOptions(request, runtime);
        }

        public async Task<DeleteLaunchTemplateResponse> DeleteLaunchTemplateAsync(DeleteLaunchTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteLaunchTemplateWithOptionsAsync(request, runtime);
        }

        public CreateLaunchTemplateVersionResponse CreateLaunchTemplateVersionWithOptions(CreateLaunchTemplateVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLaunchTemplateVersionResponse>(DoRequest("CreateLaunchTemplateVersion", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateLaunchTemplateVersionResponse> CreateLaunchTemplateVersionWithOptionsAsync(CreateLaunchTemplateVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLaunchTemplateVersionResponse>(await DoRequestAsync("CreateLaunchTemplateVersion", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateLaunchTemplateVersionResponse CreateLaunchTemplateVersion(CreateLaunchTemplateVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateLaunchTemplateVersionWithOptions(request, runtime);
        }

        public async Task<CreateLaunchTemplateVersionResponse> CreateLaunchTemplateVersionAsync(CreateLaunchTemplateVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateLaunchTemplateVersionWithOptionsAsync(request, runtime);
        }

        public CreateLaunchTemplateResponse CreateLaunchTemplateWithOptions(CreateLaunchTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLaunchTemplateResponse>(DoRequest("CreateLaunchTemplate", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateLaunchTemplateResponse> CreateLaunchTemplateWithOptionsAsync(CreateLaunchTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLaunchTemplateResponse>(await DoRequestAsync("CreateLaunchTemplate", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateLaunchTemplateResponse CreateLaunchTemplate(CreateLaunchTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateLaunchTemplateWithOptions(request, runtime);
        }

        public async Task<CreateLaunchTemplateResponse> CreateLaunchTemplateAsync(CreateLaunchTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateLaunchTemplateWithOptionsAsync(request, runtime);
        }

        public InstallCloudAssistantResponse InstallCloudAssistantWithOptions(InstallCloudAssistantRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallCloudAssistantResponse>(DoRequest("InstallCloudAssistant", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<InstallCloudAssistantResponse> InstallCloudAssistantWithOptionsAsync(InstallCloudAssistantRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallCloudAssistantResponse>(await DoRequestAsync("InstallCloudAssistant", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public InstallCloudAssistantResponse InstallCloudAssistant(InstallCloudAssistantRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return InstallCloudAssistantWithOptions(request, runtime);
        }

        public async Task<InstallCloudAssistantResponse> InstallCloudAssistantAsync(InstallCloudAssistantRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await InstallCloudAssistantWithOptionsAsync(request, runtime);
        }

        public DescribeCloudAssistantStatusResponse DescribeCloudAssistantStatusWithOptions(DescribeCloudAssistantStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCloudAssistantStatusResponse>(DoRequest("DescribeCloudAssistantStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCloudAssistantStatusResponse> DescribeCloudAssistantStatusWithOptionsAsync(DescribeCloudAssistantStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCloudAssistantStatusResponse>(await DoRequestAsync("DescribeCloudAssistantStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCloudAssistantStatusResponse DescribeCloudAssistantStatus(DescribeCloudAssistantStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCloudAssistantStatusWithOptions(request, runtime);
        }

        public async Task<DescribeCloudAssistantStatusResponse> DescribeCloudAssistantStatusAsync(DescribeCloudAssistantStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCloudAssistantStatusWithOptionsAsync(request, runtime);
        }

        public UnassignPrivateIpAddressesResponse UnassignPrivateIpAddressesWithOptions(UnassignPrivateIpAddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassignPrivateIpAddressesResponse>(DoRequest("UnassignPrivateIpAddresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassignPrivateIpAddressesResponse> UnassignPrivateIpAddressesWithOptionsAsync(UnassignPrivateIpAddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassignPrivateIpAddressesResponse>(await DoRequestAsync("UnassignPrivateIpAddresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public UnassignPrivateIpAddressesResponse UnassignPrivateIpAddresses(UnassignPrivateIpAddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassignPrivateIpAddressesWithOptions(request, runtime);
        }

        public async Task<UnassignPrivateIpAddressesResponse> UnassignPrivateIpAddressesAsync(UnassignPrivateIpAddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassignPrivateIpAddressesWithOptionsAsync(request, runtime);
        }

        public AssignPrivateIpAddressesResponse AssignPrivateIpAddressesWithOptions(AssignPrivateIpAddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssignPrivateIpAddressesResponse>(DoRequest("AssignPrivateIpAddresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssignPrivateIpAddressesResponse> AssignPrivateIpAddressesWithOptionsAsync(AssignPrivateIpAddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssignPrivateIpAddressesResponse>(await DoRequestAsync("AssignPrivateIpAddresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(AssignPrivateIpAddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssignPrivateIpAddressesWithOptions(request, runtime);
        }

        public async Task<AssignPrivateIpAddressesResponse> AssignPrivateIpAddressesAsync(AssignPrivateIpAddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssignPrivateIpAddressesWithOptionsAsync(request, runtime);
        }

        public DescribeNetworkInterfacePermissionsResponse DescribeNetworkInterfacePermissionsWithOptions(DescribeNetworkInterfacePermissionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkInterfacePermissionsResponse>(DoRequest("DescribeNetworkInterfacePermissions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNetworkInterfacePermissionsResponse> DescribeNetworkInterfacePermissionsWithOptionsAsync(DescribeNetworkInterfacePermissionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkInterfacePermissionsResponse>(await DoRequestAsync("DescribeNetworkInterfacePermissions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNetworkInterfacePermissionsResponse DescribeNetworkInterfacePermissions(DescribeNetworkInterfacePermissionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNetworkInterfacePermissionsWithOptions(request, runtime);
        }

        public async Task<DescribeNetworkInterfacePermissionsResponse> DescribeNetworkInterfacePermissionsAsync(DescribeNetworkInterfacePermissionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNetworkInterfacePermissionsWithOptionsAsync(request, runtime);
        }

        public DeleteNetworkInterfacePermissionResponse DeleteNetworkInterfacePermissionWithOptions(DeleteNetworkInterfacePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNetworkInterfacePermissionResponse>(DoRequest("DeleteNetworkInterfacePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteNetworkInterfacePermissionResponse> DeleteNetworkInterfacePermissionWithOptionsAsync(DeleteNetworkInterfacePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNetworkInterfacePermissionResponse>(await DoRequestAsync("DeleteNetworkInterfacePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteNetworkInterfacePermissionResponse DeleteNetworkInterfacePermission(DeleteNetworkInterfacePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteNetworkInterfacePermissionWithOptions(request, runtime);
        }

        public async Task<DeleteNetworkInterfacePermissionResponse> DeleteNetworkInterfacePermissionAsync(DeleteNetworkInterfacePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteNetworkInterfacePermissionWithOptionsAsync(request, runtime);
        }

        public CreateNetworkInterfacePermissionResponse CreateNetworkInterfacePermissionWithOptions(CreateNetworkInterfacePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNetworkInterfacePermissionResponse>(DoRequest("CreateNetworkInterfacePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateNetworkInterfacePermissionResponse> CreateNetworkInterfacePermissionWithOptionsAsync(CreateNetworkInterfacePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNetworkInterfacePermissionResponse>(await DoRequestAsync("CreateNetworkInterfacePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateNetworkInterfacePermissionResponse CreateNetworkInterfacePermission(CreateNetworkInterfacePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateNetworkInterfacePermissionWithOptions(request, runtime);
        }

        public async Task<CreateNetworkInterfacePermissionResponse> CreateNetworkInterfacePermissionAsync(CreateNetworkInterfacePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateNetworkInterfacePermissionWithOptionsAsync(request, runtime);
        }

        public GetInstanceScreenshotResponse GetInstanceScreenshotWithOptions(GetInstanceScreenshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceScreenshotResponse>(DoRequest("GetInstanceScreenshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetInstanceScreenshotResponse> GetInstanceScreenshotWithOptionsAsync(GetInstanceScreenshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceScreenshotResponse>(await DoRequestAsync("GetInstanceScreenshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public GetInstanceScreenshotResponse GetInstanceScreenshot(GetInstanceScreenshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetInstanceScreenshotWithOptions(request, runtime);
        }

        public async Task<GetInstanceScreenshotResponse> GetInstanceScreenshotAsync(GetInstanceScreenshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetInstanceScreenshotWithOptionsAsync(request, runtime);
        }

        public GetInstanceConsoleOutputResponse GetInstanceConsoleOutputWithOptions(GetInstanceConsoleOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceConsoleOutputResponse>(DoRequest("GetInstanceConsoleOutput", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetInstanceConsoleOutputResponse> GetInstanceConsoleOutputWithOptionsAsync(GetInstanceConsoleOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceConsoleOutputResponse>(await DoRequestAsync("GetInstanceConsoleOutput", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public GetInstanceConsoleOutputResponse GetInstanceConsoleOutput(GetInstanceConsoleOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetInstanceConsoleOutputWithOptions(request, runtime);
        }

        public async Task<GetInstanceConsoleOutputResponse> GetInstanceConsoleOutputAsync(GetInstanceConsoleOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetInstanceConsoleOutputWithOptionsAsync(request, runtime);
        }

        public DescribeResourcesModificationResponse DescribeResourcesModificationWithOptions(DescribeResourcesModificationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourcesModificationResponse>(DoRequest("DescribeResourcesModification", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeResourcesModificationResponse> DescribeResourcesModificationWithOptionsAsync(DescribeResourcesModificationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourcesModificationResponse>(await DoRequestAsync("DescribeResourcesModification", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeResourcesModificationResponse DescribeResourcesModification(DescribeResourcesModificationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourcesModificationWithOptions(request, runtime);
        }

        public async Task<DescribeResourcesModificationResponse> DescribeResourcesModificationAsync(DescribeResourcesModificationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourcesModificationWithOptionsAsync(request, runtime);
        }

        public DescribeBandwidthLimitationResponse DescribeBandwidthLimitationWithOptions(DescribeBandwidthLimitationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBandwidthLimitationResponse>(DoRequest("DescribeBandwidthLimitation", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBandwidthLimitationResponse> DescribeBandwidthLimitationWithOptionsAsync(DescribeBandwidthLimitationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBandwidthLimitationResponse>(await DoRequestAsync("DescribeBandwidthLimitation", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBandwidthLimitationResponse DescribeBandwidthLimitation(DescribeBandwidthLimitationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBandwidthLimitationWithOptions(request, runtime);
        }

        public async Task<DescribeBandwidthLimitationResponse> DescribeBandwidthLimitationAsync(DescribeBandwidthLimitationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBandwidthLimitationWithOptionsAsync(request, runtime);
        }

        public DescribeAvailableResourceResponse DescribeAvailableResourceWithOptions(DescribeAvailableResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableResourceResponse>(DoRequest("DescribeAvailableResource", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAvailableResourceResponse> DescribeAvailableResourceWithOptionsAsync(DescribeAvailableResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAvailableResourceResponse>(await DoRequestAsync("DescribeAvailableResource", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public ReActivateInstancesResponse ReActivateInstancesWithOptions(ReActivateInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReActivateInstancesResponse>(DoRequest("ReActivateInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReActivateInstancesResponse> ReActivateInstancesWithOptionsAsync(ReActivateInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReActivateInstancesResponse>(await DoRequestAsync("ReActivateInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ReActivateInstancesResponse ReActivateInstances(ReActivateInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReActivateInstancesWithOptions(request, runtime);
        }

        public async Task<ReActivateInstancesResponse> ReActivateInstancesAsync(ReActivateInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReActivateInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeInstancesFullStatusResponse DescribeInstancesFullStatusWithOptions(DescribeInstancesFullStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstancesFullStatusResponse>(DoRequest("DescribeInstancesFullStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstancesFullStatusResponse> DescribeInstancesFullStatusWithOptionsAsync(DescribeInstancesFullStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstancesFullStatusResponse>(await DoRequestAsync("DescribeInstancesFullStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstancesFullStatusResponse DescribeInstancesFullStatus(DescribeInstancesFullStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstancesFullStatusWithOptions(request, runtime);
        }

        public async Task<DescribeInstancesFullStatusResponse> DescribeInstancesFullStatusAsync(DescribeInstancesFullStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstancesFullStatusWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceHistoryEventsResponse DescribeInstanceHistoryEventsWithOptions(DescribeInstanceHistoryEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceHistoryEventsResponse>(DoRequest("DescribeInstanceHistoryEvents", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceHistoryEventsResponse> DescribeInstanceHistoryEventsWithOptionsAsync(DescribeInstanceHistoryEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceHistoryEventsResponse>(await DoRequestAsync("DescribeInstanceHistoryEvents", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceHistoryEventsResponse DescribeInstanceHistoryEvents(DescribeInstanceHistoryEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceHistoryEventsWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceHistoryEventsResponse> DescribeInstanceHistoryEventsAsync(DescribeInstanceHistoryEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceHistoryEventsWithOptionsAsync(request, runtime);
        }

        public DescribeDisksFullStatusResponse DescribeDisksFullStatusWithOptions(DescribeDisksFullStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDisksFullStatusResponse>(DoRequest("DescribeDisksFullStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDisksFullStatusResponse> DescribeDisksFullStatusWithOptionsAsync(DescribeDisksFullStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDisksFullStatusResponse>(await DoRequestAsync("DescribeDisksFullStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDisksFullStatusResponse DescribeDisksFullStatus(DescribeDisksFullStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDisksFullStatusWithOptions(request, runtime);
        }

        public async Task<DescribeDisksFullStatusResponse> DescribeDisksFullStatusAsync(DescribeDisksFullStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDisksFullStatusWithOptionsAsync(request, runtime);
        }

        public ModifyUserBusinessBehaviorResponse ModifyUserBusinessBehaviorWithOptions(ModifyUserBusinessBehaviorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyUserBusinessBehaviorResponse>(DoRequest("ModifyUserBusinessBehavior", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyUserBusinessBehaviorResponse> ModifyUserBusinessBehaviorWithOptionsAsync(ModifyUserBusinessBehaviorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyUserBusinessBehaviorResponse>(await DoRequestAsync("ModifyUserBusinessBehavior", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyUserBusinessBehaviorResponse ModifyUserBusinessBehavior(ModifyUserBusinessBehaviorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyUserBusinessBehaviorWithOptions(request, runtime);
        }

        public async Task<ModifyUserBusinessBehaviorResponse> ModifyUserBusinessBehaviorAsync(ModifyUserBusinessBehaviorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyUserBusinessBehaviorWithOptionsAsync(request, runtime);
        }

        public DescribeUserBusinessBehaviorResponse DescribeUserBusinessBehaviorWithOptions(DescribeUserBusinessBehaviorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserBusinessBehaviorResponse>(DoRequest("DescribeUserBusinessBehavior", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeUserBusinessBehaviorResponse> DescribeUserBusinessBehaviorWithOptionsAsync(DescribeUserBusinessBehaviorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserBusinessBehaviorResponse>(await DoRequestAsync("DescribeUserBusinessBehavior", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeUserBusinessBehaviorResponse DescribeUserBusinessBehavior(DescribeUserBusinessBehaviorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeUserBusinessBehaviorWithOptions(request, runtime);
        }

        public async Task<DescribeUserBusinessBehaviorResponse> DescribeUserBusinessBehaviorAsync(DescribeUserBusinessBehaviorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeUserBusinessBehaviorWithOptionsAsync(request, runtime);
        }

        public RunInstancesResponse RunInstancesWithOptions(RunInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RunInstancesResponse>(DoRequest("RunInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RunInstancesResponse> RunInstancesWithOptionsAsync(RunInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RunInstancesResponse>(await DoRequestAsync("RunInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RunInstancesResponse RunInstances(RunInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RunInstancesWithOptions(request, runtime);
        }

        public async Task<RunInstancesResponse> RunInstancesAsync(RunInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RunInstancesWithOptionsAsync(request, runtime);
        }

        public ConvertNatPublicIpToEipResponse ConvertNatPublicIpToEipWithOptions(ConvertNatPublicIpToEipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConvertNatPublicIpToEipResponse>(DoRequest("ConvertNatPublicIpToEip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ConvertNatPublicIpToEipResponse> ConvertNatPublicIpToEipWithOptionsAsync(ConvertNatPublicIpToEipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConvertNatPublicIpToEipResponse>(await DoRequestAsync("ConvertNatPublicIpToEip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ConvertNatPublicIpToEipResponse ConvertNatPublicIpToEip(ConvertNatPublicIpToEipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ConvertNatPublicIpToEipWithOptions(request, runtime);
        }

        public async Task<ConvertNatPublicIpToEipResponse> ConvertNatPublicIpToEipAsync(ConvertNatPublicIpToEipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ConvertNatPublicIpToEipWithOptionsAsync(request, runtime);
        }

        public ModifyHpcClusterAttributeResponse ModifyHpcClusterAttributeWithOptions(ModifyHpcClusterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHpcClusterAttributeResponse>(DoRequest("ModifyHpcClusterAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyHpcClusterAttributeResponse> ModifyHpcClusterAttributeWithOptionsAsync(ModifyHpcClusterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHpcClusterAttributeResponse>(await DoRequestAsync("ModifyHpcClusterAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyHpcClusterAttributeResponse ModifyHpcClusterAttribute(ModifyHpcClusterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyHpcClusterAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyHpcClusterAttributeResponse> ModifyHpcClusterAttributeAsync(ModifyHpcClusterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyHpcClusterAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeHpcClustersResponse DescribeHpcClustersWithOptions(DescribeHpcClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHpcClustersResponse>(DoRequest("DescribeHpcClusters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeHpcClustersResponse> DescribeHpcClustersWithOptionsAsync(DescribeHpcClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHpcClustersResponse>(await DoRequestAsync("DescribeHpcClusters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeHpcClustersResponse DescribeHpcClusters(DescribeHpcClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeHpcClustersWithOptions(request, runtime);
        }

        public async Task<DescribeHpcClustersResponse> DescribeHpcClustersAsync(DescribeHpcClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeHpcClustersWithOptionsAsync(request, runtime);
        }

        public DeleteHpcClusterResponse DeleteHpcClusterWithOptions(DeleteHpcClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHpcClusterResponse>(DoRequest("DeleteHpcCluster", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteHpcClusterResponse> DeleteHpcClusterWithOptionsAsync(DeleteHpcClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHpcClusterResponse>(await DoRequestAsync("DeleteHpcCluster", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteHpcClusterResponse DeleteHpcCluster(DeleteHpcClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteHpcClusterWithOptions(request, runtime);
        }

        public async Task<DeleteHpcClusterResponse> DeleteHpcClusterAsync(DeleteHpcClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteHpcClusterWithOptionsAsync(request, runtime);
        }

        public CreateHpcClusterResponse CreateHpcClusterWithOptions(CreateHpcClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHpcClusterResponse>(DoRequest("CreateHpcCluster", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateHpcClusterResponse> CreateHpcClusterWithOptionsAsync(CreateHpcClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHpcClusterResponse>(await DoRequestAsync("CreateHpcCluster", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateHpcClusterResponse CreateHpcCluster(CreateHpcClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateHpcClusterWithOptions(request, runtime);
        }

        public async Task<CreateHpcClusterResponse> CreateHpcClusterAsync(CreateHpcClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateHpcClusterWithOptionsAsync(request, runtime);
        }

        public DescribeSnapshotsUsageResponse DescribeSnapshotsUsageWithOptions(DescribeSnapshotsUsageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotsUsageResponse>(DoRequest("DescribeSnapshotsUsage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSnapshotsUsageResponse> DescribeSnapshotsUsageWithOptionsAsync(DescribeSnapshotsUsageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotsUsageResponse>(await DoRequestAsync("DescribeSnapshotsUsage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSnapshotsUsageResponse DescribeSnapshotsUsage(DescribeSnapshotsUsageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSnapshotsUsageWithOptions(request, runtime);
        }

        public async Task<DescribeSnapshotsUsageResponse> DescribeSnapshotsUsageAsync(DescribeSnapshotsUsageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSnapshotsUsageWithOptionsAsync(request, runtime);
        }

        public DescribeSpotPriceHistoryResponse DescribeSpotPriceHistoryWithOptions(DescribeSpotPriceHistoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSpotPriceHistoryResponse>(DoRequest("DescribeSpotPriceHistory", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSpotPriceHistoryResponse> DescribeSpotPriceHistoryWithOptionsAsync(DescribeSpotPriceHistoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSpotPriceHistoryResponse>(await DoRequestAsync("DescribeSpotPriceHistory", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSpotPriceHistoryResponse DescribeSpotPriceHistory(DescribeSpotPriceHistoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSpotPriceHistoryWithOptions(request, runtime);
        }

        public async Task<DescribeSpotPriceHistoryResponse> DescribeSpotPriceHistoryAsync(DescribeSpotPriceHistoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSpotPriceHistoryWithOptionsAsync(request, runtime);
        }

        public StopInvocationResponse StopInvocationWithOptions(StopInvocationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInvocationResponse>(DoRequest("StopInvocation", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopInvocationResponse> StopInvocationWithOptionsAsync(StopInvocationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInvocationResponse>(await DoRequestAsync("StopInvocation", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public StopInvocationResponse StopInvocation(StopInvocationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopInvocationWithOptions(request, runtime);
        }

        public async Task<StopInvocationResponse> StopInvocationAsync(StopInvocationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopInvocationWithOptionsAsync(request, runtime);
        }

        public ModifyCommandResponse ModifyCommandWithOptions(ModifyCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommandResponse>(DoRequest("ModifyCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCommandResponse> ModifyCommandWithOptionsAsync(ModifyCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommandResponse>(await DoRequestAsync("ModifyCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCommandResponse ModifyCommand(ModifyCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCommandWithOptions(request, runtime);
        }

        public async Task<ModifyCommandResponse> ModifyCommandAsync(ModifyCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCommandWithOptionsAsync(request, runtime);
        }

        public InvokeCommandResponse InvokeCommandWithOptions(InvokeCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InvokeCommandResponse>(DoRequest("InvokeCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<InvokeCommandResponse> InvokeCommandWithOptionsAsync(InvokeCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InvokeCommandResponse>(await DoRequestAsync("InvokeCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public InvokeCommandResponse InvokeCommand(InvokeCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return InvokeCommandWithOptions(request, runtime);
        }

        public async Task<InvokeCommandResponse> InvokeCommandAsync(InvokeCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await InvokeCommandWithOptionsAsync(request, runtime);
        }

        public DescribeInvocationsResponse DescribeInvocationsWithOptions(DescribeInvocationsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInvocationsResponse>(DoRequest("DescribeInvocations", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInvocationsResponse> DescribeInvocationsWithOptionsAsync(DescribeInvocationsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInvocationsResponse>(await DoRequestAsync("DescribeInvocations", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInvocationsResponse DescribeInvocations(DescribeInvocationsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInvocationsWithOptions(request, runtime);
        }

        public async Task<DescribeInvocationsResponse> DescribeInvocationsAsync(DescribeInvocationsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInvocationsWithOptionsAsync(request, runtime);
        }

        public DescribeInvocationResultsResponse DescribeInvocationResultsWithOptions(DescribeInvocationResultsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInvocationResultsResponse>(DoRequest("DescribeInvocationResults", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInvocationResultsResponse> DescribeInvocationResultsWithOptionsAsync(DescribeInvocationResultsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInvocationResultsResponse>(await DoRequestAsync("DescribeInvocationResults", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInvocationResultsResponse DescribeInvocationResults(DescribeInvocationResultsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInvocationResultsWithOptions(request, runtime);
        }

        public async Task<DescribeInvocationResultsResponse> DescribeInvocationResultsAsync(DescribeInvocationResultsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInvocationResultsWithOptionsAsync(request, runtime);
        }

        public DescribeCommandsResponse DescribeCommandsWithOptions(DescribeCommandsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCommandsResponse>(DoRequest("DescribeCommands", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCommandsResponse> DescribeCommandsWithOptionsAsync(DescribeCommandsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCommandsResponse>(await DoRequestAsync("DescribeCommands", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCommandsResponse DescribeCommands(DescribeCommandsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCommandsWithOptions(request, runtime);
        }

        public async Task<DescribeCommandsResponse> DescribeCommandsAsync(DescribeCommandsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCommandsWithOptionsAsync(request, runtime);
        }

        public DeleteCommandResponse DeleteCommandWithOptions(DeleteCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCommandResponse>(DoRequest("DeleteCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteCommandResponse> DeleteCommandWithOptionsAsync(DeleteCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCommandResponse>(await DoRequestAsync("DeleteCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteCommandResponse DeleteCommand(DeleteCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteCommandWithOptions(request, runtime);
        }

        public async Task<DeleteCommandResponse> DeleteCommandAsync(DeleteCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteCommandWithOptionsAsync(request, runtime);
        }

        public CreateCommandResponse CreateCommandWithOptions(CreateCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCommandResponse>(DoRequest("CreateCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateCommandResponse> CreateCommandWithOptionsAsync(CreateCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCommandResponse>(await DoRequestAsync("CreateCommand", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateCommandResponse CreateCommand(CreateCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateCommandWithOptions(request, runtime);
        }

        public async Task<CreateCommandResponse> CreateCommandAsync(CreateCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateCommandWithOptionsAsync(request, runtime);
        }

        public ModifySecurityGroupEgressRuleResponse ModifySecurityGroupEgressRuleWithOptions(ModifySecurityGroupEgressRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupEgressRuleResponse>(DoRequest("ModifySecurityGroupEgressRule", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySecurityGroupEgressRuleResponse> ModifySecurityGroupEgressRuleWithOptionsAsync(ModifySecurityGroupEgressRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupEgressRuleResponse>(await DoRequestAsync("ModifySecurityGroupEgressRule", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifySecurityGroupEgressRuleResponse ModifySecurityGroupEgressRule(ModifySecurityGroupEgressRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySecurityGroupEgressRuleWithOptions(request, runtime);
        }

        public async Task<ModifySecurityGroupEgressRuleResponse> ModifySecurityGroupEgressRuleAsync(ModifySecurityGroupEgressRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySecurityGroupEgressRuleWithOptionsAsync(request, runtime);
        }

        public ModifyDiskChargeTypeResponse ModifyDiskChargeTypeWithOptions(ModifyDiskChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDiskChargeTypeResponse>(DoRequest("ModifyDiskChargeType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDiskChargeTypeResponse> ModifyDiskChargeTypeWithOptionsAsync(ModifyDiskChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDiskChargeTypeResponse>(await DoRequestAsync("ModifyDiskChargeType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDiskChargeTypeResponse ModifyDiskChargeType(ModifyDiskChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDiskChargeTypeWithOptions(request, runtime);
        }

        public async Task<ModifyDiskChargeTypeResponse> ModifyDiskChargeTypeAsync(ModifyDiskChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDiskChargeTypeWithOptionsAsync(request, runtime);
        }

        public ModifyNetworkInterfaceAttributeResponse ModifyNetworkInterfaceAttributeWithOptions(ModifyNetworkInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNetworkInterfaceAttributeResponse>(DoRequest("ModifyNetworkInterfaceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyNetworkInterfaceAttributeResponse> ModifyNetworkInterfaceAttributeWithOptionsAsync(ModifyNetworkInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNetworkInterfaceAttributeResponse>(await DoRequestAsync("ModifyNetworkInterfaceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyNetworkInterfaceAttributeResponse ModifyNetworkInterfaceAttribute(ModifyNetworkInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyNetworkInterfaceAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyNetworkInterfaceAttributeResponse> ModifyNetworkInterfaceAttributeAsync(ModifyNetworkInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyNetworkInterfaceAttributeWithOptionsAsync(request, runtime);
        }

        public DetachNetworkInterfaceResponse DetachNetworkInterfaceWithOptions(DetachNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachNetworkInterfaceResponse>(DoRequest("DetachNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachNetworkInterfaceResponse> DetachNetworkInterfaceWithOptionsAsync(DetachNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachNetworkInterfaceResponse>(await DoRequestAsync("DetachNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DetachNetworkInterfaceResponse DetachNetworkInterface(DetachNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachNetworkInterfaceWithOptions(request, runtime);
        }

        public async Task<DetachNetworkInterfaceResponse> DetachNetworkInterfaceAsync(DetachNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachNetworkInterfaceWithOptionsAsync(request, runtime);
        }

        public DescribeNetworkInterfacesResponse DescribeNetworkInterfacesWithOptions(DescribeNetworkInterfacesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkInterfacesResponse>(DoRequest("DescribeNetworkInterfaces", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNetworkInterfacesResponse> DescribeNetworkInterfacesWithOptionsAsync(DescribeNetworkInterfacesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkInterfacesResponse>(await DoRequestAsync("DescribeNetworkInterfaces", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(DescribeNetworkInterfacesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNetworkInterfacesWithOptions(request, runtime);
        }

        public async Task<DescribeNetworkInterfacesResponse> DescribeNetworkInterfacesAsync(DescribeNetworkInterfacesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNetworkInterfacesWithOptionsAsync(request, runtime);
        }

        public DeleteNetworkInterfaceResponse DeleteNetworkInterfaceWithOptions(DeleteNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNetworkInterfaceResponse>(DoRequest("DeleteNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteNetworkInterfaceResponse> DeleteNetworkInterfaceWithOptionsAsync(DeleteNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNetworkInterfaceResponse>(await DoRequestAsync("DeleteNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteNetworkInterfaceResponse DeleteNetworkInterface(DeleteNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteNetworkInterfaceWithOptions(request, runtime);
        }

        public async Task<DeleteNetworkInterfaceResponse> DeleteNetworkInterfaceAsync(DeleteNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteNetworkInterfaceWithOptionsAsync(request, runtime);
        }

        public CreateNetworkInterfaceResponse CreateNetworkInterfaceWithOptions(CreateNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNetworkInterfaceResponse>(DoRequest("CreateNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateNetworkInterfaceResponse> CreateNetworkInterfaceWithOptionsAsync(CreateNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNetworkInterfaceResponse>(await DoRequestAsync("CreateNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateNetworkInterfaceResponse CreateNetworkInterface(CreateNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateNetworkInterfaceWithOptions(request, runtime);
        }

        public async Task<CreateNetworkInterfaceResponse> CreateNetworkInterfaceAsync(CreateNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateNetworkInterfaceWithOptionsAsync(request, runtime);
        }

        public AttachNetworkInterfaceResponse AttachNetworkInterfaceWithOptions(AttachNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachNetworkInterfaceResponse>(DoRequest("AttachNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachNetworkInterfaceResponse> AttachNetworkInterfaceWithOptionsAsync(AttachNetworkInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachNetworkInterfaceResponse>(await DoRequestAsync("AttachNetworkInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AttachNetworkInterfaceResponse AttachNetworkInterface(AttachNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachNetworkInterfaceWithOptions(request, runtime);
        }

        public async Task<AttachNetworkInterfaceResponse> AttachNetworkInterfaceAsync(AttachNetworkInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachNetworkInterfaceWithOptionsAsync(request, runtime);
        }

        public DescribeRecommendInstanceTypeResponse DescribeRecommendInstanceTypeWithOptions(DescribeRecommendInstanceTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecommendInstanceTypeResponse>(DoRequest("DescribeRecommendInstanceType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRecommendInstanceTypeResponse> DescribeRecommendInstanceTypeWithOptionsAsync(DescribeRecommendInstanceTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecommendInstanceTypeResponse>(await DoRequestAsync("DescribeRecommendInstanceType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRecommendInstanceTypeResponse DescribeRecommendInstanceType(DescribeRecommendInstanceTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRecommendInstanceTypeWithOptions(request, runtime);
        }

        public async Task<DescribeRecommendInstanceTypeResponse> DescribeRecommendInstanceTypeAsync(DescribeRecommendInstanceTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRecommendInstanceTypeWithOptionsAsync(request, runtime);
        }

        public ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecWithOptions(ModifyPrepayInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyPrepayInstanceSpecResponse>(DoRequest("ModifyPrepayInstanceSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyPrepayInstanceSpecResponse> ModifyPrepayInstanceSpecWithOptionsAsync(ModifyPrepayInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyPrepayInstanceSpecResponse>(await DoRequestAsync("ModifyPrepayInstanceSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpec(ModifyPrepayInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyPrepayInstanceSpecWithOptions(request, runtime);
        }

        public async Task<ModifyPrepayInstanceSpecResponse> ModifyPrepayInstanceSpecAsync(ModifyPrepayInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyPrepayInstanceSpecWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceChargeTypeResponse ModifyInstanceChargeTypeWithOptions(ModifyInstanceChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceChargeTypeResponse>(DoRequest("ModifyInstanceChargeType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceChargeTypeResponse> ModifyInstanceChargeTypeWithOptionsAsync(ModifyInstanceChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceChargeTypeResponse>(await DoRequestAsync("ModifyInstanceChargeType", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceChargeTypeResponse ModifyInstanceChargeType(ModifyInstanceChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceChargeTypeWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceChargeTypeResponse> ModifyInstanceChargeTypeAsync(ModifyInstanceChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceChargeTypeWithOptionsAsync(request, runtime);
        }

        public JoinResourceGroupResponse JoinResourceGroupWithOptions(JoinResourceGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<JoinResourceGroupResponse>(DoRequest("JoinResourceGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<JoinResourceGroupResponse> JoinResourceGroupWithOptionsAsync(JoinResourceGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<JoinResourceGroupResponse>(await DoRequestAsync("JoinResourceGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public JoinResourceGroupResponse JoinResourceGroup(JoinResourceGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return JoinResourceGroupWithOptions(request, runtime);
        }

        public async Task<JoinResourceGroupResponse> JoinResourceGroupAsync(JoinResourceGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await JoinResourceGroupWithOptionsAsync(request, runtime);
        }

        public ModifySecurityGroupPolicyResponse ModifySecurityGroupPolicyWithOptions(ModifySecurityGroupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupPolicyResponse>(DoRequest("ModifySecurityGroupPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySecurityGroupPolicyResponse> ModifySecurityGroupPolicyWithOptionsAsync(ModifySecurityGroupPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupPolicyResponse>(await DoRequestAsync("ModifySecurityGroupPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifySecurityGroupPolicyResponse ModifySecurityGroupPolicy(ModifySecurityGroupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySecurityGroupPolicyWithOptions(request, runtime);
        }

        public async Task<ModifySecurityGroupPolicyResponse> ModifySecurityGroupPolicyAsync(ModifySecurityGroupPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySecurityGroupPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeSecurityGroupReferencesResponse DescribeSecurityGroupReferencesWithOptions(DescribeSecurityGroupReferencesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupReferencesResponse>(DoRequest("DescribeSecurityGroupReferences", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSecurityGroupReferencesResponse> DescribeSecurityGroupReferencesWithOptionsAsync(DescribeSecurityGroupReferencesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupReferencesResponse>(await DoRequestAsync("DescribeSecurityGroupReferences", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSecurityGroupReferencesResponse DescribeSecurityGroupReferences(DescribeSecurityGroupReferencesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSecurityGroupReferencesWithOptions(request, runtime);
        }

        public async Task<DescribeSecurityGroupReferencesResponse> DescribeSecurityGroupReferencesAsync(DescribeSecurityGroupReferencesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSecurityGroupReferencesWithOptionsAsync(request, runtime);
        }

        public DetachClassicLinkVpcResponse DetachClassicLinkVpcWithOptions(DetachClassicLinkVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachClassicLinkVpcResponse>(DoRequest("DetachClassicLinkVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachClassicLinkVpcResponse> DetachClassicLinkVpcWithOptionsAsync(DetachClassicLinkVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachClassicLinkVpcResponse>(await DoRequestAsync("DetachClassicLinkVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DetachClassicLinkVpcResponse DetachClassicLinkVpc(DetachClassicLinkVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachClassicLinkVpcWithOptions(request, runtime);
        }

        public async Task<DetachClassicLinkVpcResponse> DetachClassicLinkVpcAsync(DetachClassicLinkVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachClassicLinkVpcWithOptionsAsync(request, runtime);
        }

        public DescribeClassicLinkInstancesResponse DescribeClassicLinkInstancesWithOptions(DescribeClassicLinkInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClassicLinkInstancesResponse>(DoRequest("DescribeClassicLinkInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeClassicLinkInstancesResponse> DescribeClassicLinkInstancesWithOptionsAsync(DescribeClassicLinkInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClassicLinkInstancesResponse>(await DoRequestAsync("DescribeClassicLinkInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeClassicLinkInstancesResponse DescribeClassicLinkInstances(DescribeClassicLinkInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClassicLinkInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeClassicLinkInstancesResponse> DescribeClassicLinkInstancesAsync(DescribeClassicLinkInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClassicLinkInstancesWithOptionsAsync(request, runtime);
        }

        public AttachClassicLinkVpcResponse AttachClassicLinkVpcWithOptions(AttachClassicLinkVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachClassicLinkVpcResponse>(DoRequest("AttachClassicLinkVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachClassicLinkVpcResponse> AttachClassicLinkVpcWithOptionsAsync(AttachClassicLinkVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachClassicLinkVpcResponse>(await DoRequestAsync("AttachClassicLinkVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AttachClassicLinkVpcResponse AttachClassicLinkVpc(AttachClassicLinkVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachClassicLinkVpcWithOptions(request, runtime);
        }

        public async Task<AttachClassicLinkVpcResponse> AttachClassicLinkVpcAsync(AttachClassicLinkVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachClassicLinkVpcWithOptionsAsync(request, runtime);
        }

        public DetachInstanceRamRoleResponse DetachInstanceRamRoleWithOptions(DetachInstanceRamRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachInstanceRamRoleResponse>(DoRequest("DetachInstanceRamRole", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachInstanceRamRoleResponse> DetachInstanceRamRoleWithOptionsAsync(DetachInstanceRamRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachInstanceRamRoleResponse>(await DoRequestAsync("DetachInstanceRamRole", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DetachInstanceRamRoleResponse DetachInstanceRamRole(DetachInstanceRamRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachInstanceRamRoleWithOptions(request, runtime);
        }

        public async Task<DetachInstanceRamRoleResponse> DetachInstanceRamRoleAsync(DetachInstanceRamRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachInstanceRamRoleWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceRamRoleResponse DescribeInstanceRamRoleWithOptions(DescribeInstanceRamRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceRamRoleResponse>(DoRequest("DescribeInstanceRamRole", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceRamRoleResponse> DescribeInstanceRamRoleWithOptionsAsync(DescribeInstanceRamRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceRamRoleResponse>(await DoRequestAsync("DescribeInstanceRamRole", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceRamRoleResponse DescribeInstanceRamRole(DescribeInstanceRamRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceRamRoleWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceRamRoleResponse> DescribeInstanceRamRoleAsync(DescribeInstanceRamRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceRamRoleWithOptionsAsync(request, runtime);
        }

        public AttachInstanceRamRoleResponse AttachInstanceRamRoleWithOptions(AttachInstanceRamRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstanceRamRoleResponse>(DoRequest("AttachInstanceRamRole", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachInstanceRamRoleResponse> AttachInstanceRamRoleWithOptionsAsync(AttachInstanceRamRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstanceRamRoleResponse>(await DoRequestAsync("AttachInstanceRamRole", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AttachInstanceRamRoleResponse AttachInstanceRamRole(AttachInstanceRamRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachInstanceRamRoleWithOptions(request, runtime);
        }

        public async Task<AttachInstanceRamRoleResponse> AttachInstanceRamRoleAsync(AttachInstanceRamRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachInstanceRamRoleWithOptionsAsync(request, runtime);
        }

        public DescribeSnapshotPackageResponse DescribeSnapshotPackageWithOptions(DescribeSnapshotPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotPackageResponse>(DoRequest("DescribeSnapshotPackage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSnapshotPackageResponse> DescribeSnapshotPackageWithOptionsAsync(DescribeSnapshotPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotPackageResponse>(await DoRequestAsync("DescribeSnapshotPackage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSnapshotPackageResponse DescribeSnapshotPackage(DescribeSnapshotPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSnapshotPackageWithOptions(request, runtime);
        }

        public async Task<DescribeSnapshotPackageResponse> DescribeSnapshotPackageAsync(DescribeSnapshotPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSnapshotPackageWithOptionsAsync(request, runtime);
        }

        public ModifySecurityGroupRuleResponse ModifySecurityGroupRuleWithOptions(ModifySecurityGroupRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupRuleResponse>(DoRequest("ModifySecurityGroupRule", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySecurityGroupRuleResponse> ModifySecurityGroupRuleWithOptionsAsync(ModifySecurityGroupRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupRuleResponse>(await DoRequestAsync("ModifySecurityGroupRule", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifySecurityGroupRuleResponse ModifySecurityGroupRule(ModifySecurityGroupRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySecurityGroupRuleWithOptions(request, runtime);
        }

        public async Task<ModifySecurityGroupRuleResponse> ModifySecurityGroupRuleAsync(ModifySecurityGroupRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySecurityGroupRuleWithOptionsAsync(request, runtime);
        }

        public DescribeSnapshotMonitorDataResponse DescribeSnapshotMonitorDataWithOptions(DescribeSnapshotMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotMonitorDataResponse>(DoRequest("DescribeSnapshotMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSnapshotMonitorDataResponse> DescribeSnapshotMonitorDataWithOptionsAsync(DescribeSnapshotMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotMonitorDataResponse>(await DoRequestAsync("DescribeSnapshotMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSnapshotMonitorDataResponse DescribeSnapshotMonitorData(DescribeSnapshotMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSnapshotMonitorDataWithOptions(request, runtime);
        }

        public async Task<DescribeSnapshotMonitorDataResponse> DescribeSnapshotMonitorDataAsync(DescribeSnapshotMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSnapshotMonitorDataWithOptionsAsync(request, runtime);
        }

        public DescribeRenewalPriceResponse DescribeRenewalPriceWithOptions(DescribeRenewalPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRenewalPriceResponse>(DoRequest("DescribeRenewalPrice", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRenewalPriceResponse> DescribeRenewalPriceWithOptionsAsync(DescribeRenewalPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRenewalPriceResponse>(await DoRequestAsync("DescribeRenewalPrice", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DescribePriceResponse>(DoRequest("DescribePrice", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribePriceResponse> DescribePriceWithOptionsAsync(DescribePriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePriceResponse>(await DoRequestAsync("DescribePrice", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public ModifyDeploymentSetAttributeResponse ModifyDeploymentSetAttributeWithOptions(ModifyDeploymentSetAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDeploymentSetAttributeResponse>(DoRequest("ModifyDeploymentSetAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDeploymentSetAttributeResponse> ModifyDeploymentSetAttributeWithOptionsAsync(ModifyDeploymentSetAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDeploymentSetAttributeResponse>(await DoRequestAsync("ModifyDeploymentSetAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDeploymentSetAttributeResponse ModifyDeploymentSetAttribute(ModifyDeploymentSetAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDeploymentSetAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyDeploymentSetAttributeResponse> ModifyDeploymentSetAttributeAsync(ModifyDeploymentSetAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDeploymentSetAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeDeploymentSetsResponse DescribeDeploymentSetsWithOptions(DescribeDeploymentSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDeploymentSetsResponse>(DoRequest("DescribeDeploymentSets", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDeploymentSetsResponse> DescribeDeploymentSetsWithOptionsAsync(DescribeDeploymentSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDeploymentSetsResponse>(await DoRequestAsync("DescribeDeploymentSets", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDeploymentSetsResponse DescribeDeploymentSets(DescribeDeploymentSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDeploymentSetsWithOptions(request, runtime);
        }

        public async Task<DescribeDeploymentSetsResponse> DescribeDeploymentSetsAsync(DescribeDeploymentSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDeploymentSetsWithOptionsAsync(request, runtime);
        }

        public DeleteDeploymentSetResponse DeleteDeploymentSetWithOptions(DeleteDeploymentSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDeploymentSetResponse>(DoRequest("DeleteDeploymentSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDeploymentSetResponse> DeleteDeploymentSetWithOptionsAsync(DeleteDeploymentSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDeploymentSetResponse>(await DoRequestAsync("DeleteDeploymentSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDeploymentSetResponse DeleteDeploymentSet(DeleteDeploymentSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDeploymentSetWithOptions(request, runtime);
        }

        public async Task<DeleteDeploymentSetResponse> DeleteDeploymentSetAsync(DeleteDeploymentSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDeploymentSetWithOptionsAsync(request, runtime);
        }

        public CreateDeploymentSetResponse CreateDeploymentSetWithOptions(CreateDeploymentSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDeploymentSetResponse>(DoRequest("CreateDeploymentSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDeploymentSetResponse> CreateDeploymentSetWithOptionsAsync(CreateDeploymentSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDeploymentSetResponse>(await DoRequestAsync("CreateDeploymentSet", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateDeploymentSetResponse CreateDeploymentSet(CreateDeploymentSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDeploymentSetWithOptions(request, runtime);
        }

        public async Task<CreateDeploymentSetResponse> CreateDeploymentSetAsync(CreateDeploymentSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDeploymentSetWithOptionsAsync(request, runtime);
        }

        public ImportKeyPairResponse ImportKeyPairWithOptions(ImportKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportKeyPairResponse>(DoRequest("ImportKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ImportKeyPairResponse> ImportKeyPairWithOptionsAsync(ImportKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportKeyPairResponse>(await DoRequestAsync("ImportKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ImportKeyPairResponse ImportKeyPair(ImportKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ImportKeyPairWithOptions(request, runtime);
        }

        public async Task<ImportKeyPairResponse> ImportKeyPairAsync(ImportKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ImportKeyPairWithOptionsAsync(request, runtime);
        }

        public DetachKeyPairResponse DetachKeyPairWithOptions(DetachKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachKeyPairResponse>(DoRequest("DetachKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachKeyPairResponse> DetachKeyPairWithOptionsAsync(DetachKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachKeyPairResponse>(await DoRequestAsync("DetachKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DetachKeyPairResponse DetachKeyPair(DetachKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachKeyPairWithOptions(request, runtime);
        }

        public async Task<DetachKeyPairResponse> DetachKeyPairAsync(DetachKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachKeyPairWithOptionsAsync(request, runtime);
        }

        public DescribeKeyPairsResponse DescribeKeyPairsWithOptions(DescribeKeyPairsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeKeyPairsResponse>(DoRequest("DescribeKeyPairs", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeKeyPairsResponse> DescribeKeyPairsWithOptionsAsync(DescribeKeyPairsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeKeyPairsResponse>(await DoRequestAsync("DescribeKeyPairs", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeKeyPairsResponse DescribeKeyPairs(DescribeKeyPairsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeKeyPairsWithOptions(request, runtime);
        }

        public async Task<DescribeKeyPairsResponse> DescribeKeyPairsAsync(DescribeKeyPairsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeKeyPairsWithOptionsAsync(request, runtime);
        }

        public DeleteKeyPairsResponse DeleteKeyPairsWithOptions(DeleteKeyPairsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteKeyPairsResponse>(DoRequest("DeleteKeyPairs", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteKeyPairsResponse> DeleteKeyPairsWithOptionsAsync(DeleteKeyPairsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteKeyPairsResponse>(await DoRequestAsync("DeleteKeyPairs", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteKeyPairsResponse DeleteKeyPairs(DeleteKeyPairsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteKeyPairsWithOptions(request, runtime);
        }

        public async Task<DeleteKeyPairsResponse> DeleteKeyPairsAsync(DeleteKeyPairsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteKeyPairsWithOptionsAsync(request, runtime);
        }

        public CreateKeyPairResponse CreateKeyPairWithOptions(CreateKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateKeyPairResponse>(DoRequest("CreateKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateKeyPairResponse> CreateKeyPairWithOptionsAsync(CreateKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateKeyPairResponse>(await DoRequestAsync("CreateKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateKeyPairResponse CreateKeyPair(CreateKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateKeyPairWithOptions(request, runtime);
        }

        public async Task<CreateKeyPairResponse> CreateKeyPairAsync(CreateKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateKeyPairWithOptionsAsync(request, runtime);
        }

        public AttachKeyPairResponse AttachKeyPairWithOptions(AttachKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachKeyPairResponse>(DoRequest("AttachKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachKeyPairResponse> AttachKeyPairWithOptionsAsync(AttachKeyPairRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachKeyPairResponse>(await DoRequestAsync("AttachKeyPair", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AttachKeyPairResponse AttachKeyPair(AttachKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachKeyPairWithOptions(request, runtime);
        }

        public async Task<AttachKeyPairResponse> AttachKeyPairAsync(AttachKeyPairRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachKeyPairWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceAutoRenewAttributeResponse ModifyInstanceAutoRenewAttributeWithOptions(ModifyInstanceAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoRenewAttributeResponse>(DoRequest("ModifyInstanceAutoRenewAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceAutoRenewAttributeResponse> ModifyInstanceAutoRenewAttributeWithOptionsAsync(ModifyInstanceAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoRenewAttributeResponse>(await DoRequestAsync("ModifyInstanceAutoRenewAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceAutoRenewAttributeResponse ModifyInstanceAutoRenewAttribute(ModifyInstanceAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceAutoRenewAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceAutoRenewAttributeResponse> ModifyInstanceAutoRenewAttributeAsync(ModifyInstanceAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceAutoRenewAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceAutoRenewAttributeResponse DescribeInstanceAutoRenewAttributeWithOptions(DescribeInstanceAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAutoRenewAttributeResponse>(DoRequest("DescribeInstanceAutoRenewAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceAutoRenewAttributeResponse> DescribeInstanceAutoRenewAttributeWithOptionsAsync(DescribeInstanceAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAutoRenewAttributeResponse>(await DoRequestAsync("DescribeInstanceAutoRenewAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceAutoRenewAttributeResponse DescribeInstanceAutoRenewAttribute(DescribeInstanceAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceAutoRenewAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceAutoRenewAttributeResponse> DescribeInstanceAutoRenewAttributeAsync(DescribeInstanceAutoRenewAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceAutoRenewAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeSnapshotLinksResponse DescribeSnapshotLinksWithOptions(DescribeSnapshotLinksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotLinksResponse>(DoRequest("DescribeSnapshotLinks", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSnapshotLinksResponse> DescribeSnapshotLinksWithOptionsAsync(DescribeSnapshotLinksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotLinksResponse>(await DoRequestAsync("DescribeSnapshotLinks", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSnapshotLinksResponse DescribeSnapshotLinks(DescribeSnapshotLinksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSnapshotLinksWithOptions(request, runtime);
        }

        public async Task<DescribeSnapshotLinksResponse> DescribeSnapshotLinksAsync(DescribeSnapshotLinksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSnapshotLinksWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceAutoReleaseTimeResponse ModifyInstanceAutoReleaseTimeWithOptions(ModifyInstanceAutoReleaseTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoReleaseTimeResponse>(DoRequest("ModifyInstanceAutoReleaseTime", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceAutoReleaseTimeResponse> ModifyInstanceAutoReleaseTimeWithOptionsAsync(ModifyInstanceAutoReleaseTimeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoReleaseTimeResponse>(await DoRequestAsync("ModifyInstanceAutoReleaseTime", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceAutoReleaseTimeResponse ModifyInstanceAutoReleaseTime(ModifyInstanceAutoReleaseTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceAutoReleaseTimeWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceAutoReleaseTimeResponse> ModifyInstanceAutoReleaseTimeAsync(ModifyInstanceAutoReleaseTimeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceAutoReleaseTimeWithOptionsAsync(request, runtime);
        }

        public DescribeNewProjectEipMonitorDataResponse DescribeNewProjectEipMonitorDataWithOptions(DescribeNewProjectEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNewProjectEipMonitorDataResponse>(DoRequest("DescribeNewProjectEipMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNewProjectEipMonitorDataResponse> DescribeNewProjectEipMonitorDataWithOptionsAsync(DescribeNewProjectEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNewProjectEipMonitorDataResponse>(await DoRequestAsync("DescribeNewProjectEipMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNewProjectEipMonitorDataResponse DescribeNewProjectEipMonitorData(DescribeNewProjectEipMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNewProjectEipMonitorDataWithOptions(request, runtime);
        }

        public async Task<DescribeNewProjectEipMonitorDataResponse> DescribeNewProjectEipMonitorDataAsync(DescribeNewProjectEipMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNewProjectEipMonitorDataWithOptionsAsync(request, runtime);
        }

        public DescribeUserDataResponse DescribeUserDataWithOptions(DescribeUserDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserDataResponse>(DoRequest("DescribeUserData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeUserDataResponse> DescribeUserDataWithOptionsAsync(DescribeUserDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserDataResponse>(await DoRequestAsync("DescribeUserData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeUserDataResponse DescribeUserData(DescribeUserDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeUserDataWithOptions(request, runtime);
        }

        public async Task<DescribeUserDataResponse> DescribeUserDataAsync(DescribeUserDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeUserDataWithOptionsAsync(request, runtime);
        }

        public RemoveBandwidthPackageIpsResponse RemoveBandwidthPackageIpsWithOptions(RemoveBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveBandwidthPackageIpsResponse>(DoRequest("RemoveBandwidthPackageIps", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveBandwidthPackageIpsResponse> RemoveBandwidthPackageIpsWithOptionsAsync(RemoveBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveBandwidthPackageIpsResponse>(await DoRequestAsync("RemoveBandwidthPackageIps", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RemoveBandwidthPackageIpsResponse RemoveBandwidthPackageIps(RemoveBandwidthPackageIpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveBandwidthPackageIpsWithOptions(request, runtime);
        }

        public async Task<RemoveBandwidthPackageIpsResponse> RemoveBandwidthPackageIpsAsync(RemoveBandwidthPackageIpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveBandwidthPackageIpsWithOptionsAsync(request, runtime);
        }

        public ModifyForwardEntryResponse ModifyForwardEntryWithOptions(ModifyForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyForwardEntryResponse>(DoRequest("ModifyForwardEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyForwardEntryResponse> ModifyForwardEntryWithOptionsAsync(ModifyForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyForwardEntryResponse>(await DoRequestAsync("ModifyForwardEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyForwardEntryResponse ModifyForwardEntry(ModifyForwardEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyForwardEntryWithOptions(request, runtime);
        }

        public async Task<ModifyForwardEntryResponse> ModifyForwardEntryAsync(ModifyForwardEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyForwardEntryWithOptionsAsync(request, runtime);
        }

        public ModifyBandwidthPackageSpecResponse ModifyBandwidthPackageSpecWithOptions(ModifyBandwidthPackageSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBandwidthPackageSpecResponse>(DoRequest("ModifyBandwidthPackageSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyBandwidthPackageSpecResponse> ModifyBandwidthPackageSpecWithOptionsAsync(ModifyBandwidthPackageSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBandwidthPackageSpecResponse>(await DoRequestAsync("ModifyBandwidthPackageSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyBandwidthPackageSpecResponse ModifyBandwidthPackageSpec(ModifyBandwidthPackageSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyBandwidthPackageSpecWithOptions(request, runtime);
        }

        public async Task<ModifyBandwidthPackageSpecResponse> ModifyBandwidthPackageSpecAsync(ModifyBandwidthPackageSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyBandwidthPackageSpecWithOptionsAsync(request, runtime);
        }

        public DescribeNatGatewaysResponse DescribeNatGatewaysWithOptions(DescribeNatGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNatGatewaysResponse>(DoRequest("DescribeNatGateways", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNatGatewaysResponse> DescribeNatGatewaysWithOptionsAsync(DescribeNatGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNatGatewaysResponse>(await DoRequestAsync("DescribeNatGateways", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNatGatewaysResponse DescribeNatGateways(DescribeNatGatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNatGatewaysWithOptions(request, runtime);
        }

        public async Task<DescribeNatGatewaysResponse> DescribeNatGatewaysAsync(DescribeNatGatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNatGatewaysWithOptionsAsync(request, runtime);
        }

        public DescribeForwardTableEntriesResponse DescribeForwardTableEntriesWithOptions(DescribeForwardTableEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeForwardTableEntriesResponse>(DoRequest("DescribeForwardTableEntries", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeForwardTableEntriesResponse> DescribeForwardTableEntriesWithOptionsAsync(DescribeForwardTableEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeForwardTableEntriesResponse>(await DoRequestAsync("DescribeForwardTableEntries", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeForwardTableEntriesResponse DescribeForwardTableEntries(DescribeForwardTableEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeForwardTableEntriesWithOptions(request, runtime);
        }

        public async Task<DescribeForwardTableEntriesResponse> DescribeForwardTableEntriesAsync(DescribeForwardTableEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeForwardTableEntriesWithOptionsAsync(request, runtime);
        }

        public DescribeBandwidthPackagesResponse DescribeBandwidthPackagesWithOptions(DescribeBandwidthPackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBandwidthPackagesResponse>(DoRequest("DescribeBandwidthPackages", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBandwidthPackagesResponse> DescribeBandwidthPackagesWithOptionsAsync(DescribeBandwidthPackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBandwidthPackagesResponse>(await DoRequestAsync("DescribeBandwidthPackages", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBandwidthPackagesResponse DescribeBandwidthPackages(DescribeBandwidthPackagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBandwidthPackagesWithOptions(request, runtime);
        }

        public async Task<DescribeBandwidthPackagesResponse> DescribeBandwidthPackagesAsync(DescribeBandwidthPackagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBandwidthPackagesWithOptionsAsync(request, runtime);
        }

        public DeleteNatGatewayResponse DeleteNatGatewayWithOptions(DeleteNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNatGatewayResponse>(DoRequest("DeleteNatGateway", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteNatGatewayResponse> DeleteNatGatewayWithOptionsAsync(DeleteNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNatGatewayResponse>(await DoRequestAsync("DeleteNatGateway", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteNatGatewayResponse DeleteNatGateway(DeleteNatGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteNatGatewayWithOptions(request, runtime);
        }

        public async Task<DeleteNatGatewayResponse> DeleteNatGatewayAsync(DeleteNatGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteNatGatewayWithOptionsAsync(request, runtime);
        }

        public DeleteForwardEntryResponse DeleteForwardEntryWithOptions(DeleteForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteForwardEntryResponse>(DoRequest("DeleteForwardEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteForwardEntryResponse> DeleteForwardEntryWithOptionsAsync(DeleteForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteForwardEntryResponse>(await DoRequestAsync("DeleteForwardEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteForwardEntryResponse DeleteForwardEntry(DeleteForwardEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteForwardEntryWithOptions(request, runtime);
        }

        public async Task<DeleteForwardEntryResponse> DeleteForwardEntryAsync(DeleteForwardEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteForwardEntryWithOptionsAsync(request, runtime);
        }

        public DeleteBandwidthPackageResponse DeleteBandwidthPackageWithOptions(DeleteBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBandwidthPackageResponse>(DoRequest("DeleteBandwidthPackage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBandwidthPackageResponse> DeleteBandwidthPackageWithOptionsAsync(DeleteBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBandwidthPackageResponse>(await DoRequestAsync("DeleteBandwidthPackage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteBandwidthPackageResponse DeleteBandwidthPackage(DeleteBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteBandwidthPackageWithOptions(request, runtime);
        }

        public async Task<DeleteBandwidthPackageResponse> DeleteBandwidthPackageAsync(DeleteBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteBandwidthPackageWithOptionsAsync(request, runtime);
        }

        public CreateNatGatewayResponse CreateNatGatewayWithOptions(CreateNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNatGatewayResponse>(DoRequest("CreateNatGateway", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateNatGatewayResponse> CreateNatGatewayWithOptionsAsync(CreateNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNatGatewayResponse>(await DoRequestAsync("CreateNatGateway", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateNatGatewayResponse CreateNatGateway(CreateNatGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateNatGatewayWithOptions(request, runtime);
        }

        public async Task<CreateNatGatewayResponse> CreateNatGatewayAsync(CreateNatGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateNatGatewayWithOptionsAsync(request, runtime);
        }

        public CreateForwardEntryResponse CreateForwardEntryWithOptions(CreateForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateForwardEntryResponse>(DoRequest("CreateForwardEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateForwardEntryResponse> CreateForwardEntryWithOptionsAsync(CreateForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateForwardEntryResponse>(await DoRequestAsync("CreateForwardEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateForwardEntryResponse CreateForwardEntry(CreateForwardEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateForwardEntryWithOptions(request, runtime);
        }

        public async Task<CreateForwardEntryResponse> CreateForwardEntryAsync(CreateForwardEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateForwardEntryWithOptionsAsync(request, runtime);
        }

        public AddBandwidthPackageIpsResponse AddBandwidthPackageIpsWithOptions(AddBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddBandwidthPackageIpsResponse>(DoRequest("AddBandwidthPackageIps", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddBandwidthPackageIpsResponse> AddBandwidthPackageIpsWithOptionsAsync(AddBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddBandwidthPackageIpsResponse>(await DoRequestAsync("AddBandwidthPackageIps", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AddBandwidthPackageIpsResponse AddBandwidthPackageIps(AddBandwidthPackageIpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddBandwidthPackageIpsWithOptions(request, runtime);
        }

        public async Task<AddBandwidthPackageIpsResponse> AddBandwidthPackageIpsAsync(AddBandwidthPackageIpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddBandwidthPackageIpsWithOptionsAsync(request, runtime);
        }

        public EipFillProductResponse EipFillProductWithOptions(EipFillProductRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EipFillProductResponse>(DoRequest("EipFillProduct", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EipFillProductResponse> EipFillProductWithOptionsAsync(EipFillProductRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EipFillProductResponse>(await DoRequestAsync("EipFillProduct", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public EipFillProductResponse EipFillProduct(EipFillProductRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EipFillProductWithOptions(request, runtime);
        }

        public async Task<EipFillProductResponse> EipFillProductAsync(EipFillProductRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EipFillProductWithOptionsAsync(request, runtime);
        }

        public EipNotifyPaidResponse EipNotifyPaidWithOptions(EipNotifyPaidRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EipNotifyPaidResponse>(DoRequest("EipNotifyPaid", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EipNotifyPaidResponse> EipNotifyPaidWithOptionsAsync(EipNotifyPaidRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EipNotifyPaidResponse>(await DoRequestAsync("EipNotifyPaid", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public EipNotifyPaidResponse EipNotifyPaid(EipNotifyPaidRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EipNotifyPaidWithOptions(request, runtime);
        }

        public async Task<EipNotifyPaidResponse> EipNotifyPaidAsync(EipNotifyPaidRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EipNotifyPaidWithOptionsAsync(request, runtime);
        }

        public EipFillParamsResponse EipFillParamsWithOptions(EipFillParamsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EipFillParamsResponse>(DoRequest("EipFillParams", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EipFillParamsResponse> EipFillParamsWithOptionsAsync(EipFillParamsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EipFillParamsResponse>(await DoRequestAsync("EipFillParams", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public EipFillParamsResponse EipFillParams(EipFillParamsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EipFillParamsWithOptions(request, runtime);
        }

        public async Task<EipFillParamsResponse> EipFillParamsAsync(EipFillParamsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EipFillParamsWithOptionsAsync(request, runtime);
        }

        public ModifyAutoSnapshotPolicyExResponse ModifyAutoSnapshotPolicyExWithOptions(ModifyAutoSnapshotPolicyExRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoSnapshotPolicyExResponse>(DoRequest("ModifyAutoSnapshotPolicyEx", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAutoSnapshotPolicyExResponse> ModifyAutoSnapshotPolicyExWithOptionsAsync(ModifyAutoSnapshotPolicyExRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoSnapshotPolicyExResponse>(await DoRequestAsync("ModifyAutoSnapshotPolicyEx", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAutoSnapshotPolicyExResponse ModifyAutoSnapshotPolicyEx(ModifyAutoSnapshotPolicyExRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAutoSnapshotPolicyExWithOptions(request, runtime);
        }

        public async Task<ModifyAutoSnapshotPolicyExResponse> ModifyAutoSnapshotPolicyExAsync(ModifyAutoSnapshotPolicyExRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAutoSnapshotPolicyExWithOptionsAsync(request, runtime);
        }

        public DescribeAutoSnapshotPolicyExResponse DescribeAutoSnapshotPolicyExWithOptions(DescribeAutoSnapshotPolicyExRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoSnapshotPolicyExResponse>(DoRequest("DescribeAutoSnapshotPolicyEx", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAutoSnapshotPolicyExResponse> DescribeAutoSnapshotPolicyExWithOptionsAsync(DescribeAutoSnapshotPolicyExRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoSnapshotPolicyExResponse>(await DoRequestAsync("DescribeAutoSnapshotPolicyEx", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAutoSnapshotPolicyExResponse DescribeAutoSnapshotPolicyEx(DescribeAutoSnapshotPolicyExRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAutoSnapshotPolicyExWithOptions(request, runtime);
        }

        public async Task<DescribeAutoSnapshotPolicyExResponse> DescribeAutoSnapshotPolicyExAsync(DescribeAutoSnapshotPolicyExRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAutoSnapshotPolicyExWithOptionsAsync(request, runtime);
        }

        public DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyWithOptions(DeleteAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAutoSnapshotPolicyResponse>(DoRequest("DeleteAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAutoSnapshotPolicyResponse> DeleteAutoSnapshotPolicyWithOptionsAsync(DeleteAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAutoSnapshotPolicyResponse>(await DoRequestAsync("DeleteAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicy(DeleteAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<DeleteAutoSnapshotPolicyResponse> DeleteAutoSnapshotPolicyAsync(DeleteAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyWithOptions(CreateAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAutoSnapshotPolicyResponse>(DoRequest("CreateAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAutoSnapshotPolicyResponse> CreateAutoSnapshotPolicyWithOptionsAsync(CreateAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAutoSnapshotPolicyResponse>(await DoRequestAsync("CreateAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicy(CreateAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<CreateAutoSnapshotPolicyResponse> CreateAutoSnapshotPolicyAsync(CreateAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyWithOptions(CancelAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelAutoSnapshotPolicyResponse>(DoRequest("CancelAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelAutoSnapshotPolicyResponse> CancelAutoSnapshotPolicyWithOptionsAsync(CancelAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelAutoSnapshotPolicyResponse>(await DoRequestAsync("CancelAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicy(CancelAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<CancelAutoSnapshotPolicyResponse> CancelAutoSnapshotPolicyAsync(CancelAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyWithOptions(ApplyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyAutoSnapshotPolicyResponse>(DoRequest("ApplyAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ApplyAutoSnapshotPolicyResponse> ApplyAutoSnapshotPolicyWithOptionsAsync(ApplyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyAutoSnapshotPolicyResponse>(await DoRequestAsync("ApplyAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicy(ApplyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ApplyAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<ApplyAutoSnapshotPolicyResponse> ApplyAutoSnapshotPolicyAsync(ApplyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ApplyAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeImageSupportInstanceTypesResponse DescribeImageSupportInstanceTypesWithOptions(DescribeImageSupportInstanceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageSupportInstanceTypesResponse>(DoRequest("DescribeImageSupportInstanceTypes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeImageSupportInstanceTypesResponse> DescribeImageSupportInstanceTypesWithOptionsAsync(DescribeImageSupportInstanceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageSupportInstanceTypesResponse>(await DoRequestAsync("DescribeImageSupportInstanceTypes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeImageSupportInstanceTypesResponse DescribeImageSupportInstanceTypes(DescribeImageSupportInstanceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeImageSupportInstanceTypesWithOptions(request, runtime);
        }

        public async Task<DescribeImageSupportInstanceTypesResponse> DescribeImageSupportInstanceTypesAsync(DescribeImageSupportInstanceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeImageSupportInstanceTypesWithOptionsAsync(request, runtime);
        }

        public TerminateVirtualBorderRouterResponse TerminateVirtualBorderRouterWithOptions(TerminateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminateVirtualBorderRouterResponse>(DoRequest("TerminateVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TerminateVirtualBorderRouterResponse> TerminateVirtualBorderRouterWithOptionsAsync(TerminateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminateVirtualBorderRouterResponse>(await DoRequestAsync("TerminateVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public TerminateVirtualBorderRouterResponse TerminateVirtualBorderRouter(TerminateVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TerminateVirtualBorderRouterWithOptions(request, runtime);
        }

        public async Task<TerminateVirtualBorderRouterResponse> TerminateVirtualBorderRouterAsync(TerminateVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TerminateVirtualBorderRouterWithOptionsAsync(request, runtime);
        }

        public TerminatePhysicalConnectionResponse TerminatePhysicalConnectionWithOptions(TerminatePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminatePhysicalConnectionResponse>(DoRequest("TerminatePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TerminatePhysicalConnectionResponse> TerminatePhysicalConnectionWithOptionsAsync(TerminatePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminatePhysicalConnectionResponse>(await DoRequestAsync("TerminatePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public TerminatePhysicalConnectionResponse TerminatePhysicalConnection(TerminatePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TerminatePhysicalConnectionWithOptions(request, runtime);
        }

        public async Task<TerminatePhysicalConnectionResponse> TerminatePhysicalConnectionAsync(TerminatePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TerminatePhysicalConnectionWithOptionsAsync(request, runtime);
        }

        public RecoverVirtualBorderRouterResponse RecoverVirtualBorderRouterWithOptions(RecoverVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecoverVirtualBorderRouterResponse>(DoRequest("RecoverVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecoverVirtualBorderRouterResponse> RecoverVirtualBorderRouterWithOptionsAsync(RecoverVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecoverVirtualBorderRouterResponse>(await DoRequestAsync("RecoverVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RecoverVirtualBorderRouterResponse RecoverVirtualBorderRouter(RecoverVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RecoverVirtualBorderRouterWithOptions(request, runtime);
        }

        public async Task<RecoverVirtualBorderRouterResponse> RecoverVirtualBorderRouterAsync(RecoverVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RecoverVirtualBorderRouterWithOptionsAsync(request, runtime);
        }

        public ModifyVirtualBorderRouterAttributeResponse ModifyVirtualBorderRouterAttributeWithOptions(ModifyVirtualBorderRouterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVirtualBorderRouterAttributeResponse>(DoRequest("ModifyVirtualBorderRouterAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVirtualBorderRouterAttributeResponse> ModifyVirtualBorderRouterAttributeWithOptionsAsync(ModifyVirtualBorderRouterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVirtualBorderRouterAttributeResponse>(await DoRequestAsync("ModifyVirtualBorderRouterAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVirtualBorderRouterAttributeResponse ModifyVirtualBorderRouterAttribute(ModifyVirtualBorderRouterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVirtualBorderRouterAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyVirtualBorderRouterAttributeResponse> ModifyVirtualBorderRouterAttributeAsync(ModifyVirtualBorderRouterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVirtualBorderRouterAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyPhysicalConnectionAttributeResponse ModifyPhysicalConnectionAttributeWithOptions(ModifyPhysicalConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyPhysicalConnectionAttributeResponse>(DoRequest("ModifyPhysicalConnectionAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyPhysicalConnectionAttributeResponse> ModifyPhysicalConnectionAttributeWithOptionsAsync(ModifyPhysicalConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyPhysicalConnectionAttributeResponse>(await DoRequestAsync("ModifyPhysicalConnectionAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyPhysicalConnectionAttributeResponse ModifyPhysicalConnectionAttribute(ModifyPhysicalConnectionAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyPhysicalConnectionAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyPhysicalConnectionAttributeResponse> ModifyPhysicalConnectionAttributeAsync(ModifyPhysicalConnectionAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyPhysicalConnectionAttributeWithOptionsAsync(request, runtime);
        }

        public EnablePhysicalConnectionResponse EnablePhysicalConnectionWithOptions(EnablePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnablePhysicalConnectionResponse>(DoRequest("EnablePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnablePhysicalConnectionResponse> EnablePhysicalConnectionWithOptionsAsync(EnablePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnablePhysicalConnectionResponse>(await DoRequestAsync("EnablePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public EnablePhysicalConnectionResponse EnablePhysicalConnection(EnablePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnablePhysicalConnectionWithOptions(request, runtime);
        }

        public async Task<EnablePhysicalConnectionResponse> EnablePhysicalConnectionAsync(EnablePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnablePhysicalConnectionWithOptionsAsync(request, runtime);
        }

        public DescribeVirtualBorderRoutersForPhysicalConnectionResponse DescribeVirtualBorderRoutersForPhysicalConnectionWithOptions(DescribeVirtualBorderRoutersForPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVirtualBorderRoutersForPhysicalConnectionResponse>(DoRequest("DescribeVirtualBorderRoutersForPhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVirtualBorderRoutersForPhysicalConnectionResponse> DescribeVirtualBorderRoutersForPhysicalConnectionWithOptionsAsync(DescribeVirtualBorderRoutersForPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVirtualBorderRoutersForPhysicalConnectionResponse>(await DoRequestAsync("DescribeVirtualBorderRoutersForPhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVirtualBorderRoutersForPhysicalConnectionResponse DescribeVirtualBorderRoutersForPhysicalConnection(DescribeVirtualBorderRoutersForPhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVirtualBorderRoutersForPhysicalConnectionWithOptions(request, runtime);
        }

        public async Task<DescribeVirtualBorderRoutersForPhysicalConnectionResponse> DescribeVirtualBorderRoutersForPhysicalConnectionAsync(DescribeVirtualBorderRoutersForPhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVirtualBorderRoutersForPhysicalConnectionWithOptionsAsync(request, runtime);
        }

        public DescribeVirtualBorderRoutersResponse DescribeVirtualBorderRoutersWithOptions(DescribeVirtualBorderRoutersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVirtualBorderRoutersResponse>(DoRequest("DescribeVirtualBorderRouters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVirtualBorderRoutersResponse> DescribeVirtualBorderRoutersWithOptionsAsync(DescribeVirtualBorderRoutersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVirtualBorderRoutersResponse>(await DoRequestAsync("DescribeVirtualBorderRouters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVirtualBorderRoutersResponse DescribeVirtualBorderRouters(DescribeVirtualBorderRoutersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVirtualBorderRoutersWithOptions(request, runtime);
        }

        public async Task<DescribeVirtualBorderRoutersResponse> DescribeVirtualBorderRoutersAsync(DescribeVirtualBorderRoutersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVirtualBorderRoutersWithOptionsAsync(request, runtime);
        }

        public DescribePhysicalConnectionsResponse DescribePhysicalConnectionsWithOptions(DescribePhysicalConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePhysicalConnectionsResponse>(DoRequest("DescribePhysicalConnections", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribePhysicalConnectionsResponse> DescribePhysicalConnectionsWithOptionsAsync(DescribePhysicalConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePhysicalConnectionsResponse>(await DoRequestAsync("DescribePhysicalConnections", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribePhysicalConnectionsResponse DescribePhysicalConnections(DescribePhysicalConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePhysicalConnectionsWithOptions(request, runtime);
        }

        public async Task<DescribePhysicalConnectionsResponse> DescribePhysicalConnectionsAsync(DescribePhysicalConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePhysicalConnectionsWithOptionsAsync(request, runtime);
        }

        public DescribeAccessPointsResponse DescribeAccessPointsWithOptions(DescribeAccessPointsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessPointsResponse>(DoRequest("DescribeAccessPoints", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAccessPointsResponse> DescribeAccessPointsWithOptionsAsync(DescribeAccessPointsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessPointsResponse>(await DoRequestAsync("DescribeAccessPoints", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAccessPointsResponse DescribeAccessPoints(DescribeAccessPointsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAccessPointsWithOptions(request, runtime);
        }

        public async Task<DescribeAccessPointsResponse> DescribeAccessPointsAsync(DescribeAccessPointsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAccessPointsWithOptionsAsync(request, runtime);
        }

        public DeleteVirtualBorderRouterResponse DeleteVirtualBorderRouterWithOptions(DeleteVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVirtualBorderRouterResponse>(DoRequest("DeleteVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVirtualBorderRouterResponse> DeleteVirtualBorderRouterWithOptionsAsync(DeleteVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVirtualBorderRouterResponse>(await DoRequestAsync("DeleteVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVirtualBorderRouterResponse DeleteVirtualBorderRouter(DeleteVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVirtualBorderRouterWithOptions(request, runtime);
        }

        public async Task<DeleteVirtualBorderRouterResponse> DeleteVirtualBorderRouterAsync(DeleteVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVirtualBorderRouterWithOptionsAsync(request, runtime);
        }

        public DeletePhysicalConnectionResponse DeletePhysicalConnectionWithOptions(DeletePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePhysicalConnectionResponse>(DoRequest("DeletePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeletePhysicalConnectionResponse> DeletePhysicalConnectionWithOptionsAsync(DeletePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePhysicalConnectionResponse>(await DoRequestAsync("DeletePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeletePhysicalConnectionResponse DeletePhysicalConnection(DeletePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeletePhysicalConnectionWithOptions(request, runtime);
        }

        public async Task<DeletePhysicalConnectionResponse> DeletePhysicalConnectionAsync(DeletePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeletePhysicalConnectionWithOptionsAsync(request, runtime);
        }

        public CreateVirtualBorderRouterResponse CreateVirtualBorderRouterWithOptions(CreateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVirtualBorderRouterResponse>(DoRequest("CreateVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVirtualBorderRouterResponse> CreateVirtualBorderRouterWithOptionsAsync(CreateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVirtualBorderRouterResponse>(await DoRequestAsync("CreateVirtualBorderRouter", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateVirtualBorderRouterResponse CreateVirtualBorderRouter(CreateVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVirtualBorderRouterWithOptions(request, runtime);
        }

        public async Task<CreateVirtualBorderRouterResponse> CreateVirtualBorderRouterAsync(CreateVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVirtualBorderRouterWithOptionsAsync(request, runtime);
        }

        public CreatePhysicalConnectionResponse CreatePhysicalConnectionWithOptions(CreatePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionResponse>(DoRequest("CreatePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreatePhysicalConnectionResponse> CreatePhysicalConnectionWithOptionsAsync(CreatePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionResponse>(await DoRequestAsync("CreatePhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreatePhysicalConnectionResponse CreatePhysicalConnection(CreatePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreatePhysicalConnectionWithOptions(request, runtime);
        }

        public async Task<CreatePhysicalConnectionResponse> CreatePhysicalConnectionAsync(CreatePhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreatePhysicalConnectionWithOptionsAsync(request, runtime);
        }

        public CancelPhysicalConnectionResponse CancelPhysicalConnectionWithOptions(CancelPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelPhysicalConnectionResponse>(DoRequest("CancelPhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelPhysicalConnectionResponse> CancelPhysicalConnectionWithOptionsAsync(CancelPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelPhysicalConnectionResponse>(await DoRequestAsync("CancelPhysicalConnection", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CancelPhysicalConnectionResponse CancelPhysicalConnection(CancelPhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelPhysicalConnectionWithOptions(request, runtime);
        }

        public async Task<CancelPhysicalConnectionResponse> CancelPhysicalConnectionAsync(CancelPhysicalConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelPhysicalConnectionWithOptionsAsync(request, runtime);
        }

        public ImportImageResponse ImportImageWithOptions(ImportImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportImageResponse>(DoRequest("ImportImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ImportImageResponse> ImportImageWithOptionsAsync(ImportImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportImageResponse>(await DoRequestAsync("ImportImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ImportImageResponse ImportImage(ImportImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ImportImageWithOptions(request, runtime);
        }

        public async Task<ImportImageResponse> ImportImageAsync(ImportImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ImportImageWithOptionsAsync(request, runtime);
        }

        public ExportImageResponse ExportImageWithOptions(ExportImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportImageResponse>(DoRequest("ExportImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ExportImageResponse> ExportImageWithOptionsAsync(ExportImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportImageResponse>(await DoRequestAsync("ExportImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ExportImageResponse ExportImage(ExportImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExportImageWithOptions(request, runtime);
        }

        public async Task<ExportImageResponse> ExportImageAsync(ExportImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExportImageWithOptionsAsync(request, runtime);
        }

        public DescribeTasksResponse DescribeTasksWithOptions(DescribeTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTasksResponse>(DoRequest("DescribeTasks", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTasksResponse> DescribeTasksWithOptionsAsync(DescribeTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTasksResponse>(await DoRequestAsync("DescribeTasks", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public DescribeTaskAttributeResponse DescribeTaskAttributeWithOptions(DescribeTaskAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTaskAttributeResponse>(DoRequest("DescribeTaskAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTaskAttributeResponse> DescribeTaskAttributeWithOptionsAsync(DescribeTaskAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTaskAttributeResponse>(await DoRequestAsync("DescribeTaskAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTaskAttributeResponse DescribeTaskAttribute(DescribeTaskAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTaskAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeTaskAttributeResponse> DescribeTaskAttributeAsync(DescribeTaskAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTaskAttributeWithOptionsAsync(request, runtime);
        }

        public CancelTaskResponse CancelTaskWithOptions(CancelTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelTaskResponse>(DoRequest("CancelTask", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelTaskResponse> CancelTaskWithOptionsAsync(CancelTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelTaskResponse>(await DoRequestAsync("CancelTask", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CancelTaskResponse CancelTask(CancelTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelTaskWithOptions(request, runtime);
        }

        public async Task<CancelTaskResponse> CancelTaskAsync(CancelTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelTaskWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceTypeFamiliesResponse DescribeInstanceTypeFamiliesWithOptions(DescribeInstanceTypeFamiliesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceTypeFamiliesResponse>(DoRequest("DescribeInstanceTypeFamilies", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceTypeFamiliesResponse> DescribeInstanceTypeFamiliesWithOptionsAsync(DescribeInstanceTypeFamiliesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceTypeFamiliesResponse>(await DoRequestAsync("DescribeInstanceTypeFamilies", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceTypeFamiliesResponse DescribeInstanceTypeFamilies(DescribeInstanceTypeFamiliesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceTypeFamiliesWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceTypeFamiliesResponse> DescribeInstanceTypeFamiliesAsync(DescribeInstanceTypeFamiliesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceTypeFamiliesWithOptionsAsync(request, runtime);
        }

        public ModifyRouterInterfaceSpecResponse ModifyRouterInterfaceSpecWithOptions(ModifyRouterInterfaceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouterInterfaceSpecResponse>(DoRequest("ModifyRouterInterfaceSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyRouterInterfaceSpecResponse> ModifyRouterInterfaceSpecWithOptionsAsync(ModifyRouterInterfaceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouterInterfaceSpecResponse>(await DoRequestAsync("ModifyRouterInterfaceSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyRouterInterfaceSpecResponse ModifyRouterInterfaceSpec(ModifyRouterInterfaceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyRouterInterfaceSpecWithOptions(request, runtime);
        }

        public async Task<ModifyRouterInterfaceSpecResponse> ModifyRouterInterfaceSpecAsync(ModifyRouterInterfaceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyRouterInterfaceSpecWithOptionsAsync(request, runtime);
        }

        public ModifyRouterInterfaceAttributeResponse ModifyRouterInterfaceAttributeWithOptions(ModifyRouterInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouterInterfaceAttributeResponse>(DoRequest("ModifyRouterInterfaceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyRouterInterfaceAttributeResponse> ModifyRouterInterfaceAttributeWithOptionsAsync(ModifyRouterInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouterInterfaceAttributeResponse>(await DoRequestAsync("ModifyRouterInterfaceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyRouterInterfaceAttributeResponse ModifyRouterInterfaceAttribute(ModifyRouterInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyRouterInterfaceAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyRouterInterfaceAttributeResponse> ModifyRouterInterfaceAttributeAsync(ModifyRouterInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyRouterInterfaceAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeRouterInterfacesResponse DescribeRouterInterfacesWithOptions(DescribeRouterInterfacesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouterInterfacesResponse>(DoRequest("DescribeRouterInterfaces", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRouterInterfacesResponse> DescribeRouterInterfacesWithOptionsAsync(DescribeRouterInterfacesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouterInterfacesResponse>(await DoRequestAsync("DescribeRouterInterfaces", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRouterInterfacesResponse DescribeRouterInterfaces(DescribeRouterInterfacesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRouterInterfacesWithOptions(request, runtime);
        }

        public async Task<DescribeRouterInterfacesResponse> DescribeRouterInterfacesAsync(DescribeRouterInterfacesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRouterInterfacesWithOptionsAsync(request, runtime);
        }

        public DeleteRouterInterfaceResponse DeleteRouterInterfaceWithOptions(DeleteRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouterInterfaceResponse>(DoRequest("DeleteRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRouterInterfaceResponse> DeleteRouterInterfaceWithOptionsAsync(DeleteRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouterInterfaceResponse>(await DoRequestAsync("DeleteRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteRouterInterfaceResponse DeleteRouterInterface(DeleteRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRouterInterfaceWithOptions(request, runtime);
        }

        public async Task<DeleteRouterInterfaceResponse> DeleteRouterInterfaceAsync(DeleteRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRouterInterfaceWithOptionsAsync(request, runtime);
        }

        public DeactivateRouterInterfaceResponse DeactivateRouterInterfaceWithOptions(DeactivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeactivateRouterInterfaceResponse>(DoRequest("DeactivateRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeactivateRouterInterfaceResponse> DeactivateRouterInterfaceWithOptionsAsync(DeactivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeactivateRouterInterfaceResponse>(await DoRequestAsync("DeactivateRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeactivateRouterInterfaceResponse DeactivateRouterInterface(DeactivateRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeactivateRouterInterfaceWithOptions(request, runtime);
        }

        public async Task<DeactivateRouterInterfaceResponse> DeactivateRouterInterfaceAsync(DeactivateRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeactivateRouterInterfaceWithOptionsAsync(request, runtime);
        }

        public CreateRouterInterfaceResponse CreateRouterInterfaceWithOptions(CreateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouterInterfaceResponse>(DoRequest("CreateRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRouterInterfaceResponse> CreateRouterInterfaceWithOptionsAsync(CreateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouterInterfaceResponse>(await DoRequestAsync("CreateRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateRouterInterfaceResponse CreateRouterInterface(CreateRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRouterInterfaceWithOptions(request, runtime);
        }

        public async Task<CreateRouterInterfaceResponse> CreateRouterInterfaceAsync(CreateRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRouterInterfaceWithOptionsAsync(request, runtime);
        }

        public ConnectRouterInterfaceResponse ConnectRouterInterfaceWithOptions(ConnectRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConnectRouterInterfaceResponse>(DoRequest("ConnectRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ConnectRouterInterfaceResponse> ConnectRouterInterfaceWithOptionsAsync(ConnectRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConnectRouterInterfaceResponse>(await DoRequestAsync("ConnectRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ConnectRouterInterfaceResponse ConnectRouterInterface(ConnectRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ConnectRouterInterfaceWithOptions(request, runtime);
        }

        public async Task<ConnectRouterInterfaceResponse> ConnectRouterInterfaceAsync(ConnectRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ConnectRouterInterfaceWithOptionsAsync(request, runtime);
        }

        public ActivateRouterInterfaceResponse ActivateRouterInterfaceWithOptions(ActivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ActivateRouterInterfaceResponse>(DoRequest("ActivateRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ActivateRouterInterfaceResponse> ActivateRouterInterfaceWithOptionsAsync(ActivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ActivateRouterInterfaceResponse>(await DoRequestAsync("ActivateRouterInterface", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ActivateRouterInterfaceResponse ActivateRouterInterface(ActivateRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ActivateRouterInterfaceWithOptions(request, runtime);
        }

        public async Task<ActivateRouterInterfaceResponse> ActivateRouterInterfaceAsync(ActivateRouterInterfaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ActivateRouterInterfaceWithOptionsAsync(request, runtime);
        }

        public UnassociateHaVipResponse UnassociateHaVipWithOptions(UnassociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateHaVipResponse>(DoRequest("UnassociateHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateHaVipResponse> UnassociateHaVipWithOptionsAsync(UnassociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateHaVipResponse>(await DoRequestAsync("UnassociateHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public UnassociateHaVipResponse UnassociateHaVip(UnassociateHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassociateHaVipWithOptions(request, runtime);
        }

        public async Task<UnassociateHaVipResponse> UnassociateHaVipAsync(UnassociateHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassociateHaVipWithOptionsAsync(request, runtime);
        }

        public ModifyHaVipAttributeResponse ModifyHaVipAttributeWithOptions(ModifyHaVipAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHaVipAttributeResponse>(DoRequest("ModifyHaVipAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyHaVipAttributeResponse> ModifyHaVipAttributeWithOptionsAsync(ModifyHaVipAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHaVipAttributeResponse>(await DoRequestAsync("ModifyHaVipAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyHaVipAttributeResponse ModifyHaVipAttribute(ModifyHaVipAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyHaVipAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyHaVipAttributeResponse> ModifyHaVipAttributeAsync(ModifyHaVipAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyHaVipAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeHaVipsResponse DescribeHaVipsWithOptions(DescribeHaVipsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHaVipsResponse>(DoRequest("DescribeHaVips", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeHaVipsResponse> DescribeHaVipsWithOptionsAsync(DescribeHaVipsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHaVipsResponse>(await DoRequestAsync("DescribeHaVips", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeHaVipsResponse DescribeHaVips(DescribeHaVipsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeHaVipsWithOptions(request, runtime);
        }

        public async Task<DescribeHaVipsResponse> DescribeHaVipsAsync(DescribeHaVipsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeHaVipsWithOptionsAsync(request, runtime);
        }

        public DeleteHaVipResponse DeleteHaVipWithOptions(DeleteHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHaVipResponse>(DoRequest("DeleteHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteHaVipResponse> DeleteHaVipWithOptionsAsync(DeleteHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHaVipResponse>(await DoRequestAsync("DeleteHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteHaVipResponse DeleteHaVip(DeleteHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteHaVipWithOptions(request, runtime);
        }

        public async Task<DeleteHaVipResponse> DeleteHaVipAsync(DeleteHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteHaVipWithOptionsAsync(request, runtime);
        }

        public CreateHaVipResponse CreateHaVipWithOptions(CreateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHaVipResponse>(DoRequest("CreateHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateHaVipResponse> CreateHaVipWithOptionsAsync(CreateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHaVipResponse>(await DoRequestAsync("CreateHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateHaVipResponse CreateHaVip(CreateHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateHaVipWithOptions(request, runtime);
        }

        public async Task<CreateHaVipResponse> CreateHaVipAsync(CreateHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateHaVipWithOptionsAsync(request, runtime);
        }

        public AssociateHaVipResponse AssociateHaVipWithOptions(AssociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateHaVipResponse>(DoRequest("AssociateHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateHaVipResponse> AssociateHaVipWithOptionsAsync(AssociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateHaVipResponse>(await DoRequestAsync("AssociateHaVip", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AssociateHaVipResponse AssociateHaVip(AssociateHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssociateHaVipWithOptions(request, runtime);
        }

        public async Task<AssociateHaVipResponse> AssociateHaVipAsync(AssociateHaVipRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssociateHaVipWithOptionsAsync(request, runtime);
        }

        public RenewInstanceResponse RenewInstanceWithOptions(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(DoRequest("RenewInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RenewInstanceResponse> RenewInstanceWithOptionsAsync(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(await DoRequestAsync("RenewInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public RemoveTagsResponse RemoveTagsWithOptions(RemoveTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsResponse>(DoRequest("RemoveTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveTagsResponse> RemoveTagsWithOptionsAsync(RemoveTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsResponse>(await DoRequestAsync("RemoveTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RemoveTagsResponse RemoveTags(RemoveTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveTagsWithOptions(request, runtime);
        }

        public async Task<RemoveTagsResponse> RemoveTagsAsync(RemoveTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveTagsWithOptionsAsync(request, runtime);
        }

        public DescribeTagsResponse DescribeTagsWithOptions(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(DoRequest("DescribeTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTagsResponse> DescribeTagsWithOptionsAsync(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(await DoRequestAsync("DescribeTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTagsResponse DescribeTags(DescribeTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTagsWithOptions(request, runtime);
        }

        public async Task<DescribeTagsResponse> DescribeTagsAsync(DescribeTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTagsWithOptionsAsync(request, runtime);
        }

        public DescribeResourceByTagsResponse DescribeResourceByTagsWithOptions(DescribeResourceByTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceByTagsResponse>(DoRequest("DescribeResourceByTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeResourceByTagsResponse> DescribeResourceByTagsWithOptionsAsync(DescribeResourceByTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceByTagsResponse>(await DoRequestAsync("DescribeResourceByTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeResourceByTagsResponse DescribeResourceByTags(DescribeResourceByTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourceByTagsWithOptions(request, runtime);
        }

        public async Task<DescribeResourceByTagsResponse> DescribeResourceByTagsAsync(DescribeResourceByTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourceByTagsWithOptionsAsync(request, runtime);
        }

        public AddTagsResponse AddTagsWithOptions(AddTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTagsResponse>(DoRequest("AddTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddTagsResponse> AddTagsWithOptionsAsync(AddTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTagsResponse>(await DoRequestAsync("AddTags", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AddTagsResponse AddTags(AddTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddTagsWithOptions(request, runtime);
        }

        public async Task<AddTagsResponse> AddTagsAsync(AddTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddTagsWithOptionsAsync(request, runtime);
        }

        public UnassociateEipAddressResponse UnassociateEipAddressWithOptions(UnassociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateEipAddressResponse>(DoRequest("UnassociateEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateEipAddressResponse> UnassociateEipAddressWithOptionsAsync(UnassociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateEipAddressResponse>(await DoRequestAsync("UnassociateEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public UnassociateEipAddressResponse UnassociateEipAddress(UnassociateEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassociateEipAddressWithOptions(request, runtime);
        }

        public async Task<UnassociateEipAddressResponse> UnassociateEipAddressAsync(UnassociateEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassociateEipAddressWithOptionsAsync(request, runtime);
        }

        public StopInstanceResponse StopInstanceWithOptions(StopInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInstanceResponse>(DoRequest("StopInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopInstanceResponse> StopInstanceWithOptionsAsync(StopInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInstanceResponse>(await DoRequestAsync("StopInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public StartInstanceResponse StartInstanceWithOptions(StartInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartInstanceResponse>(DoRequest("StartInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StartInstanceResponse> StartInstanceWithOptionsAsync(StartInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartInstanceResponse>(await DoRequestAsync("StartInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public StartInstanceResponse StartInstance(StartInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartInstanceWithOptions(request, runtime);
        }

        public async Task<StartInstanceResponse> StartInstanceAsync(StartInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartInstanceWithOptionsAsync(request, runtime);
        }

        public RevokeSecurityGroupEgressResponse RevokeSecurityGroupEgressWithOptions(RevokeSecurityGroupEgressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeSecurityGroupEgressResponse>(DoRequest("RevokeSecurityGroupEgress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RevokeSecurityGroupEgressResponse> RevokeSecurityGroupEgressWithOptionsAsync(RevokeSecurityGroupEgressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeSecurityGroupEgressResponse>(await DoRequestAsync("RevokeSecurityGroupEgress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RevokeSecurityGroupEgressResponse RevokeSecurityGroupEgress(RevokeSecurityGroupEgressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RevokeSecurityGroupEgressWithOptions(request, runtime);
        }

        public async Task<RevokeSecurityGroupEgressResponse> RevokeSecurityGroupEgressAsync(RevokeSecurityGroupEgressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RevokeSecurityGroupEgressWithOptionsAsync(request, runtime);
        }

        public RevokeSecurityGroupResponse RevokeSecurityGroupWithOptions(RevokeSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeSecurityGroupResponse>(DoRequest("RevokeSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RevokeSecurityGroupResponse> RevokeSecurityGroupWithOptionsAsync(RevokeSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeSecurityGroupResponse>(await DoRequestAsync("RevokeSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RevokeSecurityGroupResponse RevokeSecurityGroup(RevokeSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RevokeSecurityGroupWithOptions(request, runtime);
        }

        public async Task<RevokeSecurityGroupResponse> RevokeSecurityGroupAsync(RevokeSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RevokeSecurityGroupWithOptionsAsync(request, runtime);
        }

        public ResizeDiskResponse ResizeDiskWithOptions(ResizeDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResizeDiskResponse>(DoRequest("ResizeDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResizeDiskResponse> ResizeDiskWithOptionsAsync(ResizeDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResizeDiskResponse>(await DoRequestAsync("ResizeDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ResizeDiskResponse ResizeDisk(ResizeDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResizeDiskWithOptions(request, runtime);
        }

        public async Task<ResizeDiskResponse> ResizeDiskAsync(ResizeDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResizeDiskWithOptionsAsync(request, runtime);
        }

        public ResetDiskResponse ResetDiskWithOptions(ResetDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetDiskResponse>(DoRequest("ResetDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResetDiskResponse> ResetDiskWithOptionsAsync(ResetDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetDiskResponse>(await DoRequestAsync("ResetDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ResetDiskResponse ResetDisk(ResetDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResetDiskWithOptions(request, runtime);
        }

        public async Task<ResetDiskResponse> ResetDiskAsync(ResetDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResetDiskWithOptionsAsync(request, runtime);
        }

        public ReplaceSystemDiskResponse ReplaceSystemDiskWithOptions(ReplaceSystemDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReplaceSystemDiskResponse>(DoRequest("ReplaceSystemDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReplaceSystemDiskResponse> ReplaceSystemDiskWithOptionsAsync(ReplaceSystemDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReplaceSystemDiskResponse>(await DoRequestAsync("ReplaceSystemDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ReplaceSystemDiskResponse ReplaceSystemDisk(ReplaceSystemDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReplaceSystemDiskWithOptions(request, runtime);
        }

        public async Task<ReplaceSystemDiskResponse> ReplaceSystemDiskAsync(ReplaceSystemDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReplaceSystemDiskWithOptionsAsync(request, runtime);
        }

        public ReleasePublicIpAddressResponse ReleasePublicIpAddressWithOptions(ReleasePublicIpAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleasePublicIpAddressResponse>(DoRequest("ReleasePublicIpAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleasePublicIpAddressResponse> ReleasePublicIpAddressWithOptionsAsync(ReleasePublicIpAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleasePublicIpAddressResponse>(await DoRequestAsync("ReleasePublicIpAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ReleasePublicIpAddressResponse ReleasePublicIpAddress(ReleasePublicIpAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReleasePublicIpAddressWithOptions(request, runtime);
        }

        public async Task<ReleasePublicIpAddressResponse> ReleasePublicIpAddressAsync(ReleasePublicIpAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReleasePublicIpAddressWithOptionsAsync(request, runtime);
        }

        public ReleaseEipAddressResponse ReleaseEipAddressWithOptions(ReleaseEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseEipAddressResponse>(DoRequest("ReleaseEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleaseEipAddressResponse> ReleaseEipAddressWithOptionsAsync(ReleaseEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseEipAddressResponse>(await DoRequestAsync("ReleaseEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ReleaseEipAddressResponse ReleaseEipAddress(ReleaseEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReleaseEipAddressWithOptions(request, runtime);
        }

        public async Task<ReleaseEipAddressResponse> ReleaseEipAddressAsync(ReleaseEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReleaseEipAddressWithOptionsAsync(request, runtime);
        }

        public ReInitDiskResponse ReInitDiskWithOptions(ReInitDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReInitDiskResponse>(DoRequest("ReInitDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReInitDiskResponse> ReInitDiskWithOptionsAsync(ReInitDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReInitDiskResponse>(await DoRequestAsync("ReInitDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ReInitDiskResponse ReInitDisk(ReInitDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReInitDiskWithOptions(request, runtime);
        }

        public async Task<ReInitDiskResponse> ReInitDiskAsync(ReInitDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReInitDiskWithOptionsAsync(request, runtime);
        }

        public RebootInstanceResponse RebootInstanceWithOptions(RebootInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RebootInstanceResponse>(DoRequest("RebootInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RebootInstanceResponse> RebootInstanceWithOptionsAsync(RebootInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RebootInstanceResponse>(await DoRequestAsync("RebootInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public RebootInstanceResponse RebootInstance(RebootInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RebootInstanceWithOptions(request, runtime);
        }

        public async Task<RebootInstanceResponse> RebootInstanceAsync(RebootInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RebootInstanceWithOptionsAsync(request, runtime);
        }

        public ModifyVSwitchAttributeResponse ModifyVSwitchAttributeWithOptions(ModifyVSwitchAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVSwitchAttributeResponse>(DoRequest("ModifyVSwitchAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVSwitchAttributeResponse> ModifyVSwitchAttributeWithOptionsAsync(ModifyVSwitchAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVSwitchAttributeResponse>(await DoRequestAsync("ModifyVSwitchAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVSwitchAttributeResponse ModifyVSwitchAttribute(ModifyVSwitchAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVSwitchAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyVSwitchAttributeResponse> ModifyVSwitchAttributeAsync(ModifyVSwitchAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVSwitchAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyVRouterAttributeResponse ModifyVRouterAttributeWithOptions(ModifyVRouterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVRouterAttributeResponse>(DoRequest("ModifyVRouterAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVRouterAttributeResponse> ModifyVRouterAttributeWithOptionsAsync(ModifyVRouterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVRouterAttributeResponse>(await DoRequestAsync("ModifyVRouterAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVRouterAttributeResponse ModifyVRouterAttribute(ModifyVRouterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVRouterAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyVRouterAttributeResponse> ModifyVRouterAttributeAsync(ModifyVRouterAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVRouterAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyVpcAttributeResponse ModifyVpcAttributeWithOptions(ModifyVpcAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpcAttributeResponse>(DoRequest("ModifyVpcAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVpcAttributeResponse> ModifyVpcAttributeWithOptionsAsync(ModifyVpcAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpcAttributeResponse>(await DoRequestAsync("ModifyVpcAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVpcAttributeResponse ModifyVpcAttribute(ModifyVpcAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVpcAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyVpcAttributeResponse> ModifyVpcAttributeAsync(ModifyVpcAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVpcAttributeWithOptionsAsync(request, runtime);
        }

        public ModifySnapshotAttributeResponse ModifySnapshotAttributeWithOptions(ModifySnapshotAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySnapshotAttributeResponse>(DoRequest("ModifySnapshotAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySnapshotAttributeResponse> ModifySnapshotAttributeWithOptionsAsync(ModifySnapshotAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySnapshotAttributeResponse>(await DoRequestAsync("ModifySnapshotAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifySnapshotAttributeResponse ModifySnapshotAttribute(ModifySnapshotAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySnapshotAttributeWithOptions(request, runtime);
        }

        public async Task<ModifySnapshotAttributeResponse> ModifySnapshotAttributeAsync(ModifySnapshotAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySnapshotAttributeWithOptionsAsync(request, runtime);
        }

        public ModifySecurityGroupAttributeResponse ModifySecurityGroupAttributeWithOptions(ModifySecurityGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupAttributeResponse>(DoRequest("ModifySecurityGroupAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySecurityGroupAttributeResponse> ModifySecurityGroupAttributeWithOptionsAsync(ModifySecurityGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySecurityGroupAttributeResponse>(await DoRequestAsync("ModifySecurityGroupAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(ModifySecurityGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySecurityGroupAttributeWithOptions(request, runtime);
        }

        public async Task<ModifySecurityGroupAttributeResponse> ModifySecurityGroupAttributeAsync(ModifySecurityGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySecurityGroupAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceVpcAttributeResponse ModifyInstanceVpcAttributeWithOptions(ModifyInstanceVpcAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceVpcAttributeResponse>(DoRequest("ModifyInstanceVpcAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceVpcAttributeResponse> ModifyInstanceVpcAttributeWithOptionsAsync(ModifyInstanceVpcAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceVpcAttributeResponse>(await DoRequestAsync("ModifyInstanceVpcAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceVpcAttributeResponse ModifyInstanceVpcAttribute(ModifyInstanceVpcAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceVpcAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceVpcAttributeResponse> ModifyInstanceVpcAttributeAsync(ModifyInstanceVpcAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceVpcAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceVncPasswdResponse ModifyInstanceVncPasswdWithOptions(ModifyInstanceVncPasswdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceVncPasswdResponse>(DoRequest("ModifyInstanceVncPasswd", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceVncPasswdResponse> ModifyInstanceVncPasswdWithOptionsAsync(ModifyInstanceVncPasswdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceVncPasswdResponse>(await DoRequestAsync("ModifyInstanceVncPasswd", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceVncPasswdResponse ModifyInstanceVncPasswd(ModifyInstanceVncPasswdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceVncPasswdWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceVncPasswdResponse> ModifyInstanceVncPasswdAsync(ModifyInstanceVncPasswdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceVncPasswdWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceSpecResponse ModifyInstanceSpecWithOptions(ModifyInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceSpecResponse>(DoRequest("ModifyInstanceSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceSpecResponse> ModifyInstanceSpecWithOptionsAsync(ModifyInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceSpecResponse>(await DoRequestAsync("ModifyInstanceSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceSpecResponse ModifyInstanceSpec(ModifyInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceSpecWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceSpecResponse> ModifyInstanceSpecAsync(ModifyInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceSpecWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceNetworkSpecResponse ModifyInstanceNetworkSpecWithOptions(ModifyInstanceNetworkSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceNetworkSpecResponse>(DoRequest("ModifyInstanceNetworkSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceNetworkSpecResponse> ModifyInstanceNetworkSpecWithOptionsAsync(ModifyInstanceNetworkSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceNetworkSpecResponse>(await DoRequestAsync("ModifyInstanceNetworkSpec", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceNetworkSpecResponse ModifyInstanceNetworkSpec(ModifyInstanceNetworkSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceNetworkSpecWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceNetworkSpecResponse> ModifyInstanceNetworkSpecAsync(ModifyInstanceNetworkSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceNetworkSpecWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceAttributeResponse ModifyInstanceAttributeWithOptions(ModifyInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAttributeResponse>(DoRequest("ModifyInstanceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceAttributeResponse> ModifyInstanceAttributeWithOptionsAsync(ModifyInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAttributeResponse>(await DoRequestAsync("ModifyInstanceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceAttributeResponse ModifyInstanceAttribute(ModifyInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceAttributeResponse> ModifyInstanceAttributeAsync(ModifyInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyImageSharePermissionResponse ModifyImageSharePermissionWithOptions(ModifyImageSharePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyImageSharePermissionResponse>(DoRequest("ModifyImageSharePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyImageSharePermissionResponse> ModifyImageSharePermissionWithOptionsAsync(ModifyImageSharePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyImageSharePermissionResponse>(await DoRequestAsync("ModifyImageSharePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyImageSharePermissionResponse ModifyImageSharePermission(ModifyImageSharePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyImageSharePermissionWithOptions(request, runtime);
        }

        public async Task<ModifyImageSharePermissionResponse> ModifyImageSharePermissionAsync(ModifyImageSharePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyImageSharePermissionWithOptionsAsync(request, runtime);
        }

        public ModifyImageShareGroupPermissionResponse ModifyImageShareGroupPermissionWithOptions(ModifyImageShareGroupPermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyImageShareGroupPermissionResponse>(DoRequest("ModifyImageShareGroupPermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyImageShareGroupPermissionResponse> ModifyImageShareGroupPermissionWithOptionsAsync(ModifyImageShareGroupPermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyImageShareGroupPermissionResponse>(await DoRequestAsync("ModifyImageShareGroupPermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyImageShareGroupPermissionResponse ModifyImageShareGroupPermission(ModifyImageShareGroupPermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyImageShareGroupPermissionWithOptions(request, runtime);
        }

        public async Task<ModifyImageShareGroupPermissionResponse> ModifyImageShareGroupPermissionAsync(ModifyImageShareGroupPermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyImageShareGroupPermissionWithOptionsAsync(request, runtime);
        }

        public ModifyImageAttributeResponse ModifyImageAttributeWithOptions(ModifyImageAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyImageAttributeResponse>(DoRequest("ModifyImageAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyImageAttributeResponse> ModifyImageAttributeWithOptionsAsync(ModifyImageAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyImageAttributeResponse>(await DoRequestAsync("ModifyImageAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyImageAttributeResponse ModifyImageAttribute(ModifyImageAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyImageAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyImageAttributeResponse> ModifyImageAttributeAsync(ModifyImageAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyImageAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyEipAddressAttributeResponse ModifyEipAddressAttributeWithOptions(ModifyEipAddressAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyEipAddressAttributeResponse>(DoRequest("ModifyEipAddressAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyEipAddressAttributeResponse> ModifyEipAddressAttributeWithOptionsAsync(ModifyEipAddressAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyEipAddressAttributeResponse>(await DoRequestAsync("ModifyEipAddressAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyEipAddressAttributeResponse ModifyEipAddressAttribute(ModifyEipAddressAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyEipAddressAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyEipAddressAttributeResponse> ModifyEipAddressAttributeAsync(ModifyEipAddressAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyEipAddressAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyDiskAttributeResponse ModifyDiskAttributeWithOptions(ModifyDiskAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDiskAttributeResponse>(DoRequest("ModifyDiskAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyDiskAttributeResponse> ModifyDiskAttributeWithOptionsAsync(ModifyDiskAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyDiskAttributeResponse>(await DoRequestAsync("ModifyDiskAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyDiskAttributeResponse ModifyDiskAttribute(ModifyDiskAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyDiskAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyDiskAttributeResponse> ModifyDiskAttributeAsync(ModifyDiskAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyDiskAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyWithOptions(ModifyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoSnapshotPolicyResponse>(DoRequest("ModifyAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAutoSnapshotPolicyResponse> ModifyAutoSnapshotPolicyWithOptionsAsync(ModifyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoSnapshotPolicyResponse>(await DoRequestAsync("ModifyAutoSnapshotPolicy", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicy(ModifyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<ModifyAutoSnapshotPolicyResponse> ModifyAutoSnapshotPolicyAsync(ModifyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public LeaveSecurityGroupResponse LeaveSecurityGroupWithOptions(LeaveSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<LeaveSecurityGroupResponse>(DoRequest("LeaveSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<LeaveSecurityGroupResponse> LeaveSecurityGroupWithOptionsAsync(LeaveSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<LeaveSecurityGroupResponse>(await DoRequestAsync("LeaveSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public LeaveSecurityGroupResponse LeaveSecurityGroup(LeaveSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return LeaveSecurityGroupWithOptions(request, runtime);
        }

        public async Task<LeaveSecurityGroupResponse> LeaveSecurityGroupAsync(LeaveSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await LeaveSecurityGroupWithOptionsAsync(request, runtime);
        }

        public JoinSecurityGroupResponse JoinSecurityGroupWithOptions(JoinSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<JoinSecurityGroupResponse>(DoRequest("JoinSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<JoinSecurityGroupResponse> JoinSecurityGroupWithOptionsAsync(JoinSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<JoinSecurityGroupResponse>(await DoRequestAsync("JoinSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public JoinSecurityGroupResponse JoinSecurityGroup(JoinSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return JoinSecurityGroupWithOptions(request, runtime);
        }

        public async Task<JoinSecurityGroupResponse> JoinSecurityGroupAsync(JoinSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await JoinSecurityGroupWithOptionsAsync(request, runtime);
        }

        public DetachDiskResponse DetachDiskWithOptions(DetachDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachDiskResponse>(DoRequest("DetachDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachDiskResponse> DetachDiskWithOptionsAsync(DetachDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachDiskResponse>(await DoRequestAsync("DetachDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DetachDiskResponse DetachDisk(DetachDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachDiskWithOptions(request, runtime);
        }

        public async Task<DetachDiskResponse> DetachDiskAsync(DetachDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachDiskWithOptionsAsync(request, runtime);
        }

        public DescribeZonesResponse DescribeZonesWithOptions(DescribeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeZonesResponse>(DoRequest("DescribeZones", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeZonesResponse> DescribeZonesWithOptionsAsync(DescribeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeZonesResponse>(await DoRequestAsync("DescribeZones", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeZonesResponse DescribeZones(DescribeZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeZonesWithOptions(request, runtime);
        }

        public async Task<DescribeZonesResponse> DescribeZonesAsync(DescribeZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeZonesWithOptionsAsync(request, runtime);
        }

        public DescribeVSwitchesResponse DescribeVSwitchesWithOptions(DescribeVSwitchesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVSwitchesResponse>(DoRequest("DescribeVSwitches", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVSwitchesResponse> DescribeVSwitchesWithOptionsAsync(DescribeVSwitchesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVSwitchesResponse>(await DoRequestAsync("DescribeVSwitches", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVSwitchesResponse DescribeVSwitches(DescribeVSwitchesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVSwitchesWithOptions(request, runtime);
        }

        public async Task<DescribeVSwitchesResponse> DescribeVSwitchesAsync(DescribeVSwitchesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVSwitchesWithOptionsAsync(request, runtime);
        }

        public DescribeVRoutersResponse DescribeVRoutersWithOptions(DescribeVRoutersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVRoutersResponse>(DoRequest("DescribeVRouters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVRoutersResponse> DescribeVRoutersWithOptionsAsync(DescribeVRoutersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVRoutersResponse>(await DoRequestAsync("DescribeVRouters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVRoutersResponse DescribeVRouters(DescribeVRoutersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVRoutersWithOptions(request, runtime);
        }

        public async Task<DescribeVRoutersResponse> DescribeVRoutersAsync(DescribeVRoutersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVRoutersWithOptionsAsync(request, runtime);
        }

        public DescribeVpcsResponse DescribeVpcsWithOptions(DescribeVpcsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpcsResponse>(DoRequest("DescribeVpcs", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpcsResponse> DescribeVpcsWithOptionsAsync(DescribeVpcsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpcsResponse>(await DoRequestAsync("DescribeVpcs", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpcsResponse DescribeVpcs(DescribeVpcsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpcsWithOptions(request, runtime);
        }

        public async Task<DescribeVpcsResponse> DescribeVpcsAsync(DescribeVpcsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpcsWithOptionsAsync(request, runtime);
        }

        public DescribeSnapshotsResponse DescribeSnapshotsWithOptions(DescribeSnapshotsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotsResponse>(DoRequest("DescribeSnapshots", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSnapshotsResponse> DescribeSnapshotsWithOptionsAsync(DescribeSnapshotsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotsResponse>(await DoRequestAsync("DescribeSnapshots", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSnapshotsResponse DescribeSnapshots(DescribeSnapshotsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSnapshotsWithOptions(request, runtime);
        }

        public async Task<DescribeSnapshotsResponse> DescribeSnapshotsAsync(DescribeSnapshotsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSnapshotsWithOptionsAsync(request, runtime);
        }

        public DescribeSecurityGroupsResponse DescribeSecurityGroupsWithOptions(DescribeSecurityGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupsResponse>(DoRequest("DescribeSecurityGroups", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSecurityGroupsResponse> DescribeSecurityGroupsWithOptionsAsync(DescribeSecurityGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupsResponse>(await DoRequestAsync("DescribeSecurityGroups", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSecurityGroupsResponse DescribeSecurityGroups(DescribeSecurityGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSecurityGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeSecurityGroupsResponse> DescribeSecurityGroupsAsync(DescribeSecurityGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSecurityGroupsWithOptionsAsync(request, runtime);
        }

        public DescribeSecurityGroupAttributeResponse DescribeSecurityGroupAttributeWithOptions(DescribeSecurityGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupAttributeResponse>(DoRequest("DescribeSecurityGroupAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSecurityGroupAttributeResponse> DescribeSecurityGroupAttributeWithOptionsAsync(DescribeSecurityGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecurityGroupAttributeResponse>(await DoRequestAsync("DescribeSecurityGroupAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSecurityGroupAttributeResponse DescribeSecurityGroupAttribute(DescribeSecurityGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSecurityGroupAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeSecurityGroupAttributeResponse> DescribeSecurityGroupAttributeAsync(DescribeSecurityGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSecurityGroupAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeRouteTablesResponse DescribeRouteTablesWithOptions(DescribeRouteTablesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteTablesResponse>(DoRequest("DescribeRouteTables", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRouteTablesResponse> DescribeRouteTablesWithOptionsAsync(DescribeRouteTablesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteTablesResponse>(await DoRequestAsync("DescribeRouteTables", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRouteTablesResponse DescribeRouteTables(DescribeRouteTablesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRouteTablesWithOptions(request, runtime);
        }

        public async Task<DescribeRouteTablesResponse> DescribeRouteTablesAsync(DescribeRouteTablesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRouteTablesWithOptionsAsync(request, runtime);
        }

        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
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

        public DescribeLimitationResponse DescribeLimitationWithOptions(DescribeLimitationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLimitationResponse>(DoRequest("DescribeLimitation", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLimitationResponse> DescribeLimitationWithOptionsAsync(DescribeLimitationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLimitationResponse>(await DoRequestAsync("DescribeLimitation", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLimitationResponse DescribeLimitation(DescribeLimitationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLimitationWithOptions(request, runtime);
        }

        public async Task<DescribeLimitationResponse> DescribeLimitationAsync(DescribeLimitationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLimitationWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceVncUrlResponse DescribeInstanceVncUrlWithOptions(DescribeInstanceVncUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceVncUrlResponse>(DoRequest("DescribeInstanceVncUrl", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceVncUrlResponse> DescribeInstanceVncUrlWithOptionsAsync(DescribeInstanceVncUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceVncUrlResponse>(await DoRequestAsync("DescribeInstanceVncUrl", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(DescribeInstanceVncUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceVncUrlWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceVncUrlResponse> DescribeInstanceVncUrlAsync(DescribeInstanceVncUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceVncUrlWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceVncPasswdResponse DescribeInstanceVncPasswdWithOptions(DescribeInstanceVncPasswdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceVncPasswdResponse>(DoRequest("DescribeInstanceVncPasswd", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceVncPasswdResponse> DescribeInstanceVncPasswdWithOptionsAsync(DescribeInstanceVncPasswdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceVncPasswdResponse>(await DoRequestAsync("DescribeInstanceVncPasswd", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceVncPasswdResponse DescribeInstanceVncPasswd(DescribeInstanceVncPasswdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceVncPasswdWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceVncPasswdResponse> DescribeInstanceVncPasswdAsync(DescribeInstanceVncPasswdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceVncPasswdWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceTypesResponse DescribeInstanceTypesWithOptions(DescribeInstanceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceTypesResponse>(DoRequest("DescribeInstanceTypes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceTypesResponse> DescribeInstanceTypesWithOptionsAsync(DescribeInstanceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceTypesResponse>(await DoRequestAsync("DescribeInstanceTypes", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceTypesResponse DescribeInstanceTypes(DescribeInstanceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceTypesWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceTypesResponse> DescribeInstanceTypesAsync(DescribeInstanceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceTypesWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceStatusResponse DescribeInstanceStatusWithOptions(DescribeInstanceStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceStatusResponse>(DoRequest("DescribeInstanceStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceStatusResponse> DescribeInstanceStatusWithOptionsAsync(DescribeInstanceStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceStatusResponse>(await DoRequestAsync("DescribeInstanceStatus", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceStatusResponse DescribeInstanceStatus(DescribeInstanceStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceStatusWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceStatusResponse> DescribeInstanceStatusAsync(DescribeInstanceStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceStatusWithOptionsAsync(request, runtime);
        }

        public DescribeInstancesResponse DescribeInstancesWithOptions(DescribeInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstancesResponse>(DoRequest("DescribeInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstancesResponse> DescribeInstancesWithOptionsAsync(DescribeInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstancesResponse>(await DoRequestAsync("DescribeInstances", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstancesResponse DescribeInstances(DescribeInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeInstancesResponse> DescribeInstancesAsync(DescribeInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceMonitorDataResponse DescribeInstanceMonitorDataWithOptions(DescribeInstanceMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceMonitorDataResponse>(DoRequest("DescribeInstanceMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceMonitorDataResponse> DescribeInstanceMonitorDataWithOptionsAsync(DescribeInstanceMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceMonitorDataResponse>(await DoRequestAsync("DescribeInstanceMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceMonitorDataResponse DescribeInstanceMonitorData(DescribeInstanceMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceMonitorDataWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceMonitorDataResponse> DescribeInstanceMonitorDataAsync(DescribeInstanceMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceMonitorDataWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceAttributeResponse DescribeInstanceAttributeWithOptions(DescribeInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAttributeResponse>(DoRequest("DescribeInstanceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceAttributeResponse> DescribeInstanceAttributeWithOptionsAsync(DescribeInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAttributeResponse>(await DoRequestAsync("DescribeInstanceAttribute", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceAttributeResponse DescribeInstanceAttribute(DescribeInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceAttributeResponse> DescribeInstanceAttributeAsync(DescribeInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeImageSharePermissionResponse DescribeImageSharePermissionWithOptions(DescribeImageSharePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageSharePermissionResponse>(DoRequest("DescribeImageSharePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeImageSharePermissionResponse> DescribeImageSharePermissionWithOptionsAsync(DescribeImageSharePermissionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageSharePermissionResponse>(await DoRequestAsync("DescribeImageSharePermission", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeImageSharePermissionResponse DescribeImageSharePermission(DescribeImageSharePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeImageSharePermissionWithOptions(request, runtime);
        }

        public async Task<DescribeImageSharePermissionResponse> DescribeImageSharePermissionAsync(DescribeImageSharePermissionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeImageSharePermissionWithOptionsAsync(request, runtime);
        }

        public DescribeImagesResponse DescribeImagesWithOptions(DescribeImagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImagesResponse>(DoRequest("DescribeImages", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeImagesResponse> DescribeImagesWithOptionsAsync(DescribeImagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImagesResponse>(await DoRequestAsync("DescribeImages", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeImagesResponse DescribeImages(DescribeImagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeImagesWithOptions(request, runtime);
        }

        public async Task<DescribeImagesResponse> DescribeImagesAsync(DescribeImagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeImagesWithOptionsAsync(request, runtime);
        }

        public DescribeEipMonitorDataResponse DescribeEipMonitorDataWithOptions(DescribeEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipMonitorDataResponse>(DoRequest("DescribeEipMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEipMonitorDataResponse> DescribeEipMonitorDataWithOptionsAsync(DescribeEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipMonitorDataResponse>(await DoRequestAsync("DescribeEipMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEipMonitorDataResponse DescribeEipMonitorData(DescribeEipMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEipMonitorDataWithOptions(request, runtime);
        }

        public async Task<DescribeEipMonitorDataResponse> DescribeEipMonitorDataAsync(DescribeEipMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEipMonitorDataWithOptionsAsync(request, runtime);
        }

        public DescribeEipAddressesResponse DescribeEipAddressesWithOptions(DescribeEipAddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipAddressesResponse>(DoRequest("DescribeEipAddresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEipAddressesResponse> DescribeEipAddressesWithOptionsAsync(DescribeEipAddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipAddressesResponse>(await DoRequestAsync("DescribeEipAddresses", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEipAddressesResponse DescribeEipAddresses(DescribeEipAddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEipAddressesWithOptions(request, runtime);
        }

        public async Task<DescribeEipAddressesResponse> DescribeEipAddressesAsync(DescribeEipAddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEipAddressesWithOptionsAsync(request, runtime);
        }

        public DescribeDisksResponse DescribeDisksWithOptions(DescribeDisksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDisksResponse>(DoRequest("DescribeDisks", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDisksResponse> DescribeDisksWithOptionsAsync(DescribeDisksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDisksResponse>(await DoRequestAsync("DescribeDisks", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDisksResponse DescribeDisks(DescribeDisksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDisksWithOptions(request, runtime);
        }

        public async Task<DescribeDisksResponse> DescribeDisksAsync(DescribeDisksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDisksWithOptionsAsync(request, runtime);
        }

        public DescribeDiskMonitorDataResponse DescribeDiskMonitorDataWithOptions(DescribeDiskMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDiskMonitorDataResponse>(DoRequest("DescribeDiskMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDiskMonitorDataResponse> DescribeDiskMonitorDataWithOptionsAsync(DescribeDiskMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDiskMonitorDataResponse>(await DoRequestAsync("DescribeDiskMonitorData", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDiskMonitorDataResponse DescribeDiskMonitorData(DescribeDiskMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDiskMonitorDataWithOptions(request, runtime);
        }

        public async Task<DescribeDiskMonitorDataResponse> DescribeDiskMonitorDataAsync(DescribeDiskMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDiskMonitorDataWithOptionsAsync(request, runtime);
        }

        public DescribeClustersResponse DescribeClustersWithOptions(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(DoRequest("DescribeClusters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeClustersResponse> DescribeClustersWithOptionsAsync(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(await DoRequestAsync("DescribeClusters", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeClustersResponse DescribeClusters(DescribeClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClustersWithOptions(request, runtime);
        }

        public async Task<DescribeClustersResponse> DescribeClustersAsync(DescribeClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClustersWithOptionsAsync(request, runtime);
        }

        public DeleteVSwitchResponse DeleteVSwitchWithOptions(DeleteVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVSwitchResponse>(DoRequest("DeleteVSwitch", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVSwitchResponse> DeleteVSwitchWithOptionsAsync(DeleteVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVSwitchResponse>(await DoRequestAsync("DeleteVSwitch", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVSwitchResponse DeleteVSwitch(DeleteVSwitchRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVSwitchWithOptions(request, runtime);
        }

        public async Task<DeleteVSwitchResponse> DeleteVSwitchAsync(DeleteVSwitchRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVSwitchWithOptionsAsync(request, runtime);
        }

        public DeleteVpcResponse DeleteVpcWithOptions(DeleteVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpcResponse>(DoRequest("DeleteVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVpcResponse> DeleteVpcWithOptionsAsync(DeleteVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpcResponse>(await DoRequestAsync("DeleteVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVpcResponse DeleteVpc(DeleteVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVpcWithOptions(request, runtime);
        }

        public async Task<DeleteVpcResponse> DeleteVpcAsync(DeleteVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVpcWithOptionsAsync(request, runtime);
        }

        public DeleteSnapshotResponse DeleteSnapshotWithOptions(DeleteSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSnapshotResponse>(DoRequest("DeleteSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSnapshotResponse> DeleteSnapshotWithOptionsAsync(DeleteSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSnapshotResponse>(await DoRequestAsync("DeleteSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSnapshotResponse DeleteSnapshot(DeleteSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSnapshotWithOptions(request, runtime);
        }

        public async Task<DeleteSnapshotResponse> DeleteSnapshotAsync(DeleteSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSnapshotWithOptionsAsync(request, runtime);
        }

        public DeleteSecurityGroupResponse DeleteSecurityGroupWithOptions(DeleteSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSecurityGroupResponse>(DoRequest("DeleteSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSecurityGroupResponse> DeleteSecurityGroupWithOptionsAsync(DeleteSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSecurityGroupResponse>(await DoRequestAsync("DeleteSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSecurityGroupResponse DeleteSecurityGroup(DeleteSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSecurityGroupWithOptions(request, runtime);
        }

        public async Task<DeleteSecurityGroupResponse> DeleteSecurityGroupAsync(DeleteSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSecurityGroupWithOptionsAsync(request, runtime);
        }

        public DeleteRouteEntryResponse DeleteRouteEntryWithOptions(DeleteRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouteEntryResponse>(DoRequest("DeleteRouteEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRouteEntryResponse> DeleteRouteEntryWithOptionsAsync(DeleteRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouteEntryResponse>(await DoRequestAsync("DeleteRouteEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteRouteEntryResponse DeleteRouteEntry(DeleteRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRouteEntryWithOptions(request, runtime);
        }

        public async Task<DeleteRouteEntryResponse> DeleteRouteEntryAsync(DeleteRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRouteEntryWithOptionsAsync(request, runtime);
        }

        public DeleteInstanceResponse DeleteInstanceWithOptions(DeleteInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteInstanceResponse>(DoRequest("DeleteInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteInstanceResponse> DeleteInstanceWithOptionsAsync(DeleteInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteInstanceResponse>(await DoRequestAsync("DeleteInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteInstanceResponse DeleteInstance(DeleteInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteInstanceWithOptions(request, runtime);
        }

        public async Task<DeleteInstanceResponse> DeleteInstanceAsync(DeleteInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteInstanceWithOptionsAsync(request, runtime);
        }

        public DeleteImageResponse DeleteImageWithOptions(DeleteImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageResponse>(DoRequest("DeleteImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteImageResponse> DeleteImageWithOptionsAsync(DeleteImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageResponse>(await DoRequestAsync("DeleteImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteImageResponse DeleteImage(DeleteImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteImageWithOptions(request, runtime);
        }

        public async Task<DeleteImageResponse> DeleteImageAsync(DeleteImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteImageWithOptionsAsync(request, runtime);
        }

        public DeleteDiskResponse DeleteDiskWithOptions(DeleteDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDiskResponse>(DoRequest("DeleteDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDiskResponse> DeleteDiskWithOptionsAsync(DeleteDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDiskResponse>(await DoRequestAsync("DeleteDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDiskResponse DeleteDisk(DeleteDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDiskWithOptions(request, runtime);
        }

        public async Task<DeleteDiskResponse> DeleteDiskAsync(DeleteDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDiskWithOptionsAsync(request, runtime);
        }

        public CreateVSwitchResponse CreateVSwitchWithOptions(CreateVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVSwitchResponse>(DoRequest("CreateVSwitch", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVSwitchResponse> CreateVSwitchWithOptionsAsync(CreateVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVSwitchResponse>(await DoRequestAsync("CreateVSwitch", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateVSwitchResponse CreateVSwitch(CreateVSwitchRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVSwitchWithOptions(request, runtime);
        }

        public async Task<CreateVSwitchResponse> CreateVSwitchAsync(CreateVSwitchRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVSwitchWithOptionsAsync(request, runtime);
        }

        public CreateVpcResponse CreateVpcWithOptions(CreateVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpcResponse>(DoRequest("CreateVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVpcResponse> CreateVpcWithOptionsAsync(CreateVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpcResponse>(await DoRequestAsync("CreateVpc", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateVpcResponse CreateVpc(CreateVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVpcWithOptions(request, runtime);
        }

        public async Task<CreateVpcResponse> CreateVpcAsync(CreateVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVpcWithOptionsAsync(request, runtime);
        }

        public CreateSnapshotResponse CreateSnapshotWithOptions(CreateSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSnapshotResponse>(DoRequest("CreateSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSnapshotResponse> CreateSnapshotWithOptionsAsync(CreateSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSnapshotResponse>(await DoRequestAsync("CreateSnapshot", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateSnapshotResponse CreateSnapshot(CreateSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSnapshotWithOptions(request, runtime);
        }

        public async Task<CreateSnapshotResponse> CreateSnapshotAsync(CreateSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSnapshotWithOptionsAsync(request, runtime);
        }

        public CreateSecurityGroupResponse CreateSecurityGroupWithOptions(CreateSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSecurityGroupResponse>(DoRequest("CreateSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSecurityGroupResponse> CreateSecurityGroupWithOptionsAsync(CreateSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSecurityGroupResponse>(await DoRequestAsync("CreateSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateSecurityGroupResponse CreateSecurityGroup(CreateSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSecurityGroupWithOptions(request, runtime);
        }

        public async Task<CreateSecurityGroupResponse> CreateSecurityGroupAsync(CreateSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSecurityGroupWithOptionsAsync(request, runtime);
        }

        public CreateRouteEntryResponse CreateRouteEntryWithOptions(CreateRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouteEntryResponse>(DoRequest("CreateRouteEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRouteEntryResponse> CreateRouteEntryWithOptionsAsync(CreateRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouteEntryResponse>(await DoRequestAsync("CreateRouteEntry", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateRouteEntryResponse CreateRouteEntry(CreateRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRouteEntryWithOptions(request, runtime);
        }

        public async Task<CreateRouteEntryResponse> CreateRouteEntryAsync(CreateRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRouteEntryWithOptionsAsync(request, runtime);
        }

        public CreateInstanceResponse CreateInstanceWithOptions(CreateInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateInstanceResponse>(DoRequest("CreateInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateInstanceResponse> CreateInstanceWithOptionsAsync(CreateInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateInstanceResponse>(await DoRequestAsync("CreateInstance", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateInstanceResponse CreateInstance(CreateInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateInstanceWithOptions(request, runtime);
        }

        public async Task<CreateInstanceResponse> CreateInstanceAsync(CreateInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateInstanceWithOptionsAsync(request, runtime);
        }

        public CreateImageResponse CreateImageWithOptions(CreateImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateImageResponse>(DoRequest("CreateImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateImageResponse> CreateImageWithOptionsAsync(CreateImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateImageResponse>(await DoRequestAsync("CreateImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateImageResponse CreateImage(CreateImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateImageWithOptions(request, runtime);
        }

        public async Task<CreateImageResponse> CreateImageAsync(CreateImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateImageWithOptionsAsync(request, runtime);
        }

        public CreateDiskResponse CreateDiskWithOptions(CreateDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDiskResponse>(DoRequest("CreateDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDiskResponse> CreateDiskWithOptionsAsync(CreateDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDiskResponse>(await DoRequestAsync("CreateDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateDiskResponse CreateDisk(CreateDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDiskWithOptions(request, runtime);
        }

        public async Task<CreateDiskResponse> CreateDiskAsync(CreateDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDiskWithOptionsAsync(request, runtime);
        }

        public CopyImageResponse CopyImageWithOptions(CopyImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyImageResponse>(DoRequest("CopyImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CopyImageResponse> CopyImageWithOptionsAsync(CopyImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyImageResponse>(await DoRequestAsync("CopyImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CopyImageResponse CopyImage(CopyImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CopyImageWithOptions(request, runtime);
        }

        public async Task<CopyImageResponse> CopyImageAsync(CopyImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CopyImageWithOptionsAsync(request, runtime);
        }

        public CancelCopyImageResponse CancelCopyImageWithOptions(CancelCopyImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCopyImageResponse>(DoRequest("CancelCopyImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelCopyImageResponse> CancelCopyImageWithOptionsAsync(CancelCopyImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCopyImageResponse>(await DoRequestAsync("CancelCopyImage", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public CancelCopyImageResponse CancelCopyImage(CancelCopyImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelCopyImageWithOptions(request, runtime);
        }

        public async Task<CancelCopyImageResponse> CancelCopyImageAsync(CancelCopyImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelCopyImageWithOptionsAsync(request, runtime);
        }

        public AuthorizeSecurityGroupEgressResponse AuthorizeSecurityGroupEgressWithOptions(AuthorizeSecurityGroupEgressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AuthorizeSecurityGroupEgressResponse>(DoRequest("AuthorizeSecurityGroupEgress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AuthorizeSecurityGroupEgressResponse> AuthorizeSecurityGroupEgressWithOptionsAsync(AuthorizeSecurityGroupEgressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AuthorizeSecurityGroupEgressResponse>(await DoRequestAsync("AuthorizeSecurityGroupEgress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AuthorizeSecurityGroupEgressResponse AuthorizeSecurityGroupEgress(AuthorizeSecurityGroupEgressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AuthorizeSecurityGroupEgressWithOptions(request, runtime);
        }

        public async Task<AuthorizeSecurityGroupEgressResponse> AuthorizeSecurityGroupEgressAsync(AuthorizeSecurityGroupEgressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AuthorizeSecurityGroupEgressWithOptionsAsync(request, runtime);
        }

        public AuthorizeSecurityGroupResponse AuthorizeSecurityGroupWithOptions(AuthorizeSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AuthorizeSecurityGroupResponse>(DoRequest("AuthorizeSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AuthorizeSecurityGroupResponse> AuthorizeSecurityGroupWithOptionsAsync(AuthorizeSecurityGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AuthorizeSecurityGroupResponse>(await DoRequestAsync("AuthorizeSecurityGroup", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AuthorizeSecurityGroupResponse AuthorizeSecurityGroup(AuthorizeSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AuthorizeSecurityGroupWithOptions(request, runtime);
        }

        public async Task<AuthorizeSecurityGroupResponse> AuthorizeSecurityGroupAsync(AuthorizeSecurityGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AuthorizeSecurityGroupWithOptionsAsync(request, runtime);
        }

        public AttachDiskResponse AttachDiskWithOptions(AttachDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachDiskResponse>(DoRequest("AttachDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachDiskResponse> AttachDiskWithOptionsAsync(AttachDiskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachDiskResponse>(await DoRequestAsync("AttachDisk", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AttachDiskResponse AttachDisk(AttachDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachDiskWithOptions(request, runtime);
        }

        public async Task<AttachDiskResponse> AttachDiskAsync(AttachDiskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachDiskWithOptionsAsync(request, runtime);
        }

        public AssociateEipAddressResponse AssociateEipAddressWithOptions(AssociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateEipAddressResponse>(DoRequest("AssociateEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateEipAddressResponse> AssociateEipAddressWithOptionsAsync(AssociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateEipAddressResponse>(await DoRequestAsync("AssociateEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AssociateEipAddressResponse AssociateEipAddress(AssociateEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssociateEipAddressWithOptions(request, runtime);
        }

        public async Task<AssociateEipAddressResponse> AssociateEipAddressAsync(AssociateEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssociateEipAddressWithOptionsAsync(request, runtime);
        }

        public AllocatePublicIpAddressResponse AllocatePublicIpAddressWithOptions(AllocatePublicIpAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocatePublicIpAddressResponse>(DoRequest("AllocatePublicIpAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocatePublicIpAddressResponse> AllocatePublicIpAddressWithOptionsAsync(AllocatePublicIpAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocatePublicIpAddressResponse>(await DoRequestAsync("AllocatePublicIpAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AllocatePublicIpAddressResponse AllocatePublicIpAddress(AllocatePublicIpAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocatePublicIpAddressWithOptions(request, runtime);
        }

        public async Task<AllocatePublicIpAddressResponse> AllocatePublicIpAddressAsync(AllocatePublicIpAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocatePublicIpAddressWithOptionsAsync(request, runtime);
        }

        public AllocateEipAddressResponse AllocateEipAddressWithOptions(AllocateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipAddressResponse>(DoRequest("AllocateEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateEipAddressResponse> AllocateEipAddressWithOptionsAsync(AllocateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipAddressResponse>(await DoRequestAsync("AllocateEipAddress", "HTTPS", "POST", "2014-05-26", "AK", null, request.ToMap(), runtime));
        }

        public AllocateEipAddressResponse AllocateEipAddress(AllocateEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateEipAddressWithOptions(request, runtime);
        }

        public async Task<AllocateEipAddressResponse> AllocateEipAddressAsync(AllocateEipAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateEipAddressWithOptionsAsync(request, runtime);
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
