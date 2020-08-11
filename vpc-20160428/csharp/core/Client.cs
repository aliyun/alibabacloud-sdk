// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Vpc20160428.Models;

namespace AlibabaCloud.SDK.Vpc20160428
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"cn-qingdao", "vpc.aliyuncs.com"},
                {"cn-beijing", "vpc.aliyuncs.com"},
                {"cn-hangzhou", "vpc.aliyuncs.com"},
                {"cn-shanghai", "vpc.aliyuncs.com"},
                {"cn-shenzhen", "vpc.aliyuncs.com"},
                {"cn-hongkong", "vpc.aliyuncs.com"},
                {"ap-southeast-1", "vpc.aliyuncs.com"},
                {"us-west-1", "vpc.aliyuncs.com"},
                {"us-east-1", "vpc.aliyuncs.com"},
                {"cn-shanghai-finance-1", "vpc.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "vpc.aliyuncs.com"},
                {"cn-north-2-gov-1", "vpc.aliyuncs.com"},
                {"ap-northeast-2-pop", "vpc.aliyuncs.com"},
                {"cn-beijing-finance-1", "vpc.aliyuncs.com"},
                {"cn-beijing-finance-pop", "vpc.aliyuncs.com"},
                {"cn-beijing-gov-1", "vpc.aliyuncs.com"},
                {"cn-beijing-nu16-b01", "vpc.aliyuncs.com"},
                {"cn-edge-1", "vpc-nebula.cn-qingdao-nebula.aliyuncs.com"},
                {"cn-fujian", "vpc.aliyuncs.com"},
                {"cn-haidian-cm12-c01", "vpc.aliyuncs.com"},
                {"cn-hangzhou-bj-b01", "vpc.aliyuncs.com"},
                {"cn-hangzhou-finance", "vpc.aliyuncs.com"},
                {"cn-hangzhou-internal-prod-1", "vpc.aliyuncs.com"},
                {"cn-hangzhou-internal-test-1", "vpc.aliyuncs.com"},
                {"cn-hangzhou-internal-test-2", "vpc.aliyuncs.com"},
                {"cn-hangzhou-internal-test-3", "vpc.aliyuncs.com"},
                {"cn-hangzhou-test-306", "vpc.aliyuncs.com"},
                {"cn-hongkong-finance-pop", "vpc.aliyuncs.com"},
                {"cn-qingdao-nebula", "vpc-nebula.cn-qingdao-nebula.aliyuncs.com"},
                {"cn-shanghai-et15-b01", "vpc.aliyuncs.com"},
                {"cn-shanghai-et2-b01", "vpc.aliyuncs.com"},
                {"cn-shanghai-inner", "vpc.aliyuncs.com"},
                {"cn-shanghai-internal-test-1", "vpc.aliyuncs.com"},
                {"cn-shenzhen-inner", "vpc.aliyuncs.com"},
                {"cn-shenzhen-st4-d01", "vpc.aliyuncs.com"},
                {"cn-shenzhen-su18-b01", "vpc.aliyuncs.com"},
                {"cn-wuhan", "vpc.aliyuncs.com"},
                {"cn-yushanfang", "vpc.aliyuncs.com"},
                {"cn-zhangbei-na61-b01", "vpc.aliyuncs.com"},
                {"cn-zhangjiakou-na62-a01", "vpc.cn-zhangjiakou.aliyuncs.com"},
                {"cn-zhengzhou-nebula-1", "vpc-nebula.cn-qingdao-nebula.aliyuncs.com"},
                {"eu-west-1-oxs", "vpc-nebula.cn-shenzhen-cloudstone.aliyuncs.com"},
                {"rus-west-1-pop", "vpc.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("vpc", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public ListNatGatewayEcsMetricResponse ListNatGatewayEcsMetricWithOptions(ListNatGatewayEcsMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListNatGatewayEcsMetricResponse>(DoRequest("ListNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListNatGatewayEcsMetricResponse> ListNatGatewayEcsMetricWithOptionsAsync(ListNatGatewayEcsMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListNatGatewayEcsMetricResponse>(await DoRequestAsync("ListNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ListNatGatewayEcsMetricResponse ListNatGatewayEcsMetric(ListNatGatewayEcsMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListNatGatewayEcsMetricWithOptions(request, runtime);
        }

        public async Task<ListNatGatewayEcsMetricResponse> ListNatGatewayEcsMetricAsync(ListNatGatewayEcsMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListNatGatewayEcsMetricWithOptionsAsync(request, runtime);
        }

        public DisableNatGatewayEcsMetricResponse DisableNatGatewayEcsMetricWithOptions(DisableNatGatewayEcsMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableNatGatewayEcsMetricResponse>(DoRequest("DisableNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DisableNatGatewayEcsMetricResponse> DisableNatGatewayEcsMetricWithOptionsAsync(DisableNatGatewayEcsMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableNatGatewayEcsMetricResponse>(await DoRequestAsync("DisableNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DisableNatGatewayEcsMetricResponse DisableNatGatewayEcsMetric(DisableNatGatewayEcsMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableNatGatewayEcsMetricWithOptions(request, runtime);
        }

        public async Task<DisableNatGatewayEcsMetricResponse> DisableNatGatewayEcsMetricAsync(DisableNatGatewayEcsMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableNatGatewayEcsMetricWithOptionsAsync(request, runtime);
        }

        public EnableNatGatewayEcsMetricResponse EnableNatGatewayEcsMetricWithOptions(EnableNatGatewayEcsMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableNatGatewayEcsMetricResponse>(DoRequest("EnableNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableNatGatewayEcsMetricResponse> EnableNatGatewayEcsMetricWithOptionsAsync(EnableNatGatewayEcsMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableNatGatewayEcsMetricResponse>(await DoRequestAsync("EnableNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public EnableNatGatewayEcsMetricResponse EnableNatGatewayEcsMetric(EnableNatGatewayEcsMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableNatGatewayEcsMetricWithOptions(request, runtime);
        }

        public async Task<EnableNatGatewayEcsMetricResponse> EnableNatGatewayEcsMetricAsync(EnableNatGatewayEcsMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableNatGatewayEcsMetricWithOptionsAsync(request, runtime);
        }

        public CreateDhcpOptionsSetResponse CreateDhcpOptionsSetWithOptions(CreateDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDhcpOptionsSetResponse>(DoRequest("CreateDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDhcpOptionsSetResponse> CreateDhcpOptionsSetWithOptionsAsync(CreateDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDhcpOptionsSetResponse>(await DoRequestAsync("CreateDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateDhcpOptionsSetResponse CreateDhcpOptionsSet(CreateDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDhcpOptionsSetWithOptions(request, runtime);
        }

        public async Task<CreateDhcpOptionsSetResponse> CreateDhcpOptionsSetAsync(CreateDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDhcpOptionsSetWithOptionsAsync(request, runtime);
        }

        public ReplaceVpcDhcpOptionsSetResponse ReplaceVpcDhcpOptionsSetWithOptions(ReplaceVpcDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReplaceVpcDhcpOptionsSetResponse>(DoRequest("ReplaceVpcDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReplaceVpcDhcpOptionsSetResponse> ReplaceVpcDhcpOptionsSetWithOptionsAsync(ReplaceVpcDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReplaceVpcDhcpOptionsSetResponse>(await DoRequestAsync("ReplaceVpcDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ReplaceVpcDhcpOptionsSetResponse ReplaceVpcDhcpOptionsSet(ReplaceVpcDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReplaceVpcDhcpOptionsSetWithOptions(request, runtime);
        }

        public async Task<ReplaceVpcDhcpOptionsSetResponse> ReplaceVpcDhcpOptionsSetAsync(ReplaceVpcDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReplaceVpcDhcpOptionsSetWithOptionsAsync(request, runtime);
        }

        public UpdateDhcpOptionsSetAttributeResponse UpdateDhcpOptionsSetAttributeWithOptions(UpdateDhcpOptionsSetAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDhcpOptionsSetAttributeResponse>(DoRequest("UpdateDhcpOptionsSetAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDhcpOptionsSetAttributeResponse> UpdateDhcpOptionsSetAttributeWithOptionsAsync(UpdateDhcpOptionsSetAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDhcpOptionsSetAttributeResponse>(await DoRequestAsync("UpdateDhcpOptionsSetAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UpdateDhcpOptionsSetAttributeResponse UpdateDhcpOptionsSetAttribute(UpdateDhcpOptionsSetAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDhcpOptionsSetAttributeWithOptions(request, runtime);
        }

        public async Task<UpdateDhcpOptionsSetAttributeResponse> UpdateDhcpOptionsSetAttributeAsync(UpdateDhcpOptionsSetAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDhcpOptionsSetAttributeWithOptionsAsync(request, runtime);
        }

        public GetDhcpOptionsSetResponse GetDhcpOptionsSetWithOptions(GetDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDhcpOptionsSetResponse>(DoRequest("GetDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDhcpOptionsSetResponse> GetDhcpOptionsSetWithOptionsAsync(GetDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDhcpOptionsSetResponse>(await DoRequestAsync("GetDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public GetDhcpOptionsSetResponse GetDhcpOptionsSet(GetDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDhcpOptionsSetWithOptions(request, runtime);
        }

        public async Task<GetDhcpOptionsSetResponse> GetDhcpOptionsSetAsync(GetDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDhcpOptionsSetWithOptionsAsync(request, runtime);
        }

        public ListDhcpOptionsSetsResponse ListDhcpOptionsSetsWithOptions(ListDhcpOptionsSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDhcpOptionsSetsResponse>(DoRequest("ListDhcpOptionsSets", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDhcpOptionsSetsResponse> ListDhcpOptionsSetsWithOptionsAsync(ListDhcpOptionsSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDhcpOptionsSetsResponse>(await DoRequestAsync("ListDhcpOptionsSets", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ListDhcpOptionsSetsResponse ListDhcpOptionsSets(ListDhcpOptionsSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDhcpOptionsSetsWithOptions(request, runtime);
        }

        public async Task<ListDhcpOptionsSetsResponse> ListDhcpOptionsSetsAsync(ListDhcpOptionsSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDhcpOptionsSetsWithOptionsAsync(request, runtime);
        }

        public DetachDhcpOptionsSetFromVpcResponse DetachDhcpOptionsSetFromVpcWithOptions(DetachDhcpOptionsSetFromVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachDhcpOptionsSetFromVpcResponse>(DoRequest("DetachDhcpOptionsSetFromVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachDhcpOptionsSetFromVpcResponse> DetachDhcpOptionsSetFromVpcWithOptionsAsync(DetachDhcpOptionsSetFromVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachDhcpOptionsSetFromVpcResponse>(await DoRequestAsync("DetachDhcpOptionsSetFromVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DetachDhcpOptionsSetFromVpcResponse DetachDhcpOptionsSetFromVpc(DetachDhcpOptionsSetFromVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachDhcpOptionsSetFromVpcWithOptions(request, runtime);
        }

        public async Task<DetachDhcpOptionsSetFromVpcResponse> DetachDhcpOptionsSetFromVpcAsync(DetachDhcpOptionsSetFromVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachDhcpOptionsSetFromVpcWithOptionsAsync(request, runtime);
        }

        public AttachDhcpOptionsSetToVpcResponse AttachDhcpOptionsSetToVpcWithOptions(AttachDhcpOptionsSetToVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachDhcpOptionsSetToVpcResponse>(DoRequest("AttachDhcpOptionsSetToVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachDhcpOptionsSetToVpcResponse> AttachDhcpOptionsSetToVpcWithOptionsAsync(AttachDhcpOptionsSetToVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachDhcpOptionsSetToVpcResponse>(await DoRequestAsync("AttachDhcpOptionsSetToVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AttachDhcpOptionsSetToVpcResponse AttachDhcpOptionsSetToVpc(AttachDhcpOptionsSetToVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachDhcpOptionsSetToVpcWithOptions(request, runtime);
        }

        public async Task<AttachDhcpOptionsSetToVpcResponse> AttachDhcpOptionsSetToVpcAsync(AttachDhcpOptionsSetToVpcRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachDhcpOptionsSetToVpcWithOptionsAsync(request, runtime);
        }

        public DeleteDhcpOptionsSetResponse DeleteDhcpOptionsSetWithOptions(DeleteDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDhcpOptionsSetResponse>(DoRequest("DeleteDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDhcpOptionsSetResponse> DeleteDhcpOptionsSetWithOptionsAsync(DeleteDhcpOptionsSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDhcpOptionsSetResponse>(await DoRequestAsync("DeleteDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDhcpOptionsSetResponse DeleteDhcpOptionsSet(DeleteDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDhcpOptionsSetWithOptions(request, runtime);
        }

        public async Task<DeleteDhcpOptionsSetResponse> DeleteDhcpOptionsSetAsync(DeleteDhcpOptionsSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDhcpOptionsSetWithOptionsAsync(request, runtime);
        }

        public RenewInstanceResponse RenewInstanceWithOptions(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(DoRequest("RenewInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RenewInstanceResponse> RenewInstanceWithOptionsAsync(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(await DoRequestAsync("RenewInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeInstanceAutoRenewAttributeResponse DescribeInstanceAutoRenewAttributeWithOptions(DescribeInstanceAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAutoRenewAttributeResponse>(DoRequest("DescribeInstanceAutoRenewAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceAutoRenewAttributeResponse> DescribeInstanceAutoRenewAttributeWithOptionsAsync(DescribeInstanceAutoRenewAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceAutoRenewAttributeResponse>(await DoRequestAsync("DescribeInstanceAutoRenewAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyInstanceAutoRenewalAttributeResponse ModifyInstanceAutoRenewalAttributeWithOptions(ModifyInstanceAutoRenewalAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoRenewalAttributeResponse>(DoRequest("ModifyInstanceAutoRenewalAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceAutoRenewalAttributeResponse> ModifyInstanceAutoRenewalAttributeWithOptionsAsync(ModifyInstanceAutoRenewalAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceAutoRenewalAttributeResponse>(await DoRequestAsync("ModifyInstanceAutoRenewalAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ReleaseEipSegmentAddressResponse ReleaseEipSegmentAddressWithOptions(ReleaseEipSegmentAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseEipSegmentAddressResponse>(DoRequest("ReleaseEipSegmentAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleaseEipSegmentAddressResponse> ReleaseEipSegmentAddressWithOptionsAsync(ReleaseEipSegmentAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseEipSegmentAddressResponse>(await DoRequestAsync("ReleaseEipSegmentAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ReleaseEipSegmentAddressResponse ReleaseEipSegmentAddress(ReleaseEipSegmentAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReleaseEipSegmentAddressWithOptions(request, runtime);
        }

        public async Task<ReleaseEipSegmentAddressResponse> ReleaseEipSegmentAddressAsync(ReleaseEipSegmentAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReleaseEipSegmentAddressWithOptionsAsync(request, runtime);
        }

        public DescribeEipSegmentResponse DescribeEipSegmentWithOptions(DescribeEipSegmentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipSegmentResponse>(DoRequest("DescribeEipSegment", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEipSegmentResponse> DescribeEipSegmentWithOptionsAsync(DescribeEipSegmentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipSegmentResponse>(await DoRequestAsync("DescribeEipSegment", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEipSegmentResponse DescribeEipSegment(DescribeEipSegmentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEipSegmentWithOptions(request, runtime);
        }

        public async Task<DescribeEipSegmentResponse> DescribeEipSegmentAsync(DescribeEipSegmentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEipSegmentWithOptionsAsync(request, runtime);
        }

        public AllocateEipSegmentAddressResponse AllocateEipSegmentAddressWithOptions(AllocateEipSegmentAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipSegmentAddressResponse>(DoRequest("AllocateEipSegmentAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateEipSegmentAddressResponse> AllocateEipSegmentAddressWithOptionsAsync(AllocateEipSegmentAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipSegmentAddressResponse>(await DoRequestAsync("AllocateEipSegmentAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AllocateEipSegmentAddressResponse AllocateEipSegmentAddress(AllocateEipSegmentAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateEipSegmentAddressWithOptions(request, runtime);
        }

        public async Task<AllocateEipSegmentAddressResponse> AllocateEipSegmentAddressAsync(AllocateEipSegmentAddressRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateEipSegmentAddressWithOptionsAsync(request, runtime);
        }

        public UnassociateVpcCidrBlockResponse UnassociateVpcCidrBlockWithOptions(UnassociateVpcCidrBlockRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateVpcCidrBlockResponse>(DoRequest("UnassociateVpcCidrBlock", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateVpcCidrBlockResponse> UnassociateVpcCidrBlockWithOptionsAsync(UnassociateVpcCidrBlockRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateVpcCidrBlockResponse>(await DoRequestAsync("UnassociateVpcCidrBlock", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UnassociateVpcCidrBlockResponse UnassociateVpcCidrBlock(UnassociateVpcCidrBlockRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassociateVpcCidrBlockWithOptions(request, runtime);
        }

        public async Task<UnassociateVpcCidrBlockResponse> UnassociateVpcCidrBlockAsync(UnassociateVpcCidrBlockRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassociateVpcCidrBlockWithOptionsAsync(request, runtime);
        }

        public AssociateVpcCidrBlockResponse AssociateVpcCidrBlockWithOptions(AssociateVpcCidrBlockRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateVpcCidrBlockResponse>(DoRequest("AssociateVpcCidrBlock", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateVpcCidrBlockResponse> AssociateVpcCidrBlockWithOptionsAsync(AssociateVpcCidrBlockRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateVpcCidrBlockResponse>(await DoRequestAsync("AssociateVpcCidrBlock", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AssociateVpcCidrBlockResponse AssociateVpcCidrBlock(AssociateVpcCidrBlockRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssociateVpcCidrBlockWithOptions(request, runtime);
        }

        public async Task<AssociateVpcCidrBlockResponse> AssociateVpcCidrBlockAsync(AssociateVpcCidrBlockRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssociateVpcCidrBlockWithOptionsAsync(request, runtime);
        }

        public DescribeRouterInterfaceAttributeResponse DescribeRouterInterfaceAttributeWithOptions(DescribeRouterInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouterInterfaceAttributeResponse>(DoRequest("DescribeRouterInterfaceAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRouterInterfaceAttributeResponse> DescribeRouterInterfaceAttributeWithOptionsAsync(DescribeRouterInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouterInterfaceAttributeResponse>(await DoRequestAsync("DescribeRouterInterfaceAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRouterInterfaceAttributeResponse DescribeRouterInterfaceAttribute(DescribeRouterInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRouterInterfaceAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeRouterInterfaceAttributeResponse> DescribeRouterInterfaceAttributeAsync(DescribeRouterInterfaceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRouterInterfaceAttributeWithOptionsAsync(request, runtime);
        }

        public DeleteExpressCloudConnectionResponse DeleteExpressCloudConnectionWithOptions(DeleteExpressCloudConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExpressCloudConnectionResponse>(DoRequest("DeleteExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteExpressCloudConnectionResponse> DeleteExpressCloudConnectionWithOptionsAsync(DeleteExpressCloudConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExpressCloudConnectionResponse>(await DoRequestAsync("DeleteExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteExpressCloudConnectionResponse DeleteExpressCloudConnection(DeleteExpressCloudConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteExpressCloudConnectionWithOptions(request, runtime);
        }

        public async Task<DeleteExpressCloudConnectionResponse> DeleteExpressCloudConnectionAsync(DeleteExpressCloudConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteExpressCloudConnectionWithOptionsAsync(request, runtime);
        }

        public CancelExpressCloudConnectionResponse CancelExpressCloudConnectionWithOptions(CancelExpressCloudConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelExpressCloudConnectionResponse>(DoRequest("CancelExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelExpressCloudConnectionResponse> CancelExpressCloudConnectionWithOptionsAsync(CancelExpressCloudConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelExpressCloudConnectionResponse>(await DoRequestAsync("CancelExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CancelExpressCloudConnectionResponse CancelExpressCloudConnection(CancelExpressCloudConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelExpressCloudConnectionWithOptions(request, runtime);
        }

        public async Task<CancelExpressCloudConnectionResponse> CancelExpressCloudConnectionAsync(CancelExpressCloudConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelExpressCloudConnectionWithOptionsAsync(request, runtime);
        }

        public DeletionProtectionResponse DeletionProtectionWithOptions(DeletionProtectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletionProtectionResponse>(DoRequest("DeletionProtection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeletionProtectionResponse> DeletionProtectionWithOptionsAsync(DeletionProtectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletionProtectionResponse>(await DoRequestAsync("DeletionProtection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeletionProtectionResponse DeletionProtection(DeletionProtectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeletionProtectionWithOptions(request, runtime);
        }

        public async Task<DeletionProtectionResponse> DeletionProtectionAsync(DeletionProtectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeletionProtectionWithOptionsAsync(request, runtime);
        }

        public DescribeEipGatewayInfoResponse DescribeEipGatewayInfoWithOptions(DescribeEipGatewayInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipGatewayInfoResponse>(DoRequest("DescribeEipGatewayInfo", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEipGatewayInfoResponse> DescribeEipGatewayInfoWithOptionsAsync(DescribeEipGatewayInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipGatewayInfoResponse>(await DoRequestAsync("DescribeEipGatewayInfo", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEipGatewayInfoResponse DescribeEipGatewayInfo(DescribeEipGatewayInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEipGatewayInfoWithOptions(request, runtime);
        }

        public async Task<DescribeEipGatewayInfoResponse> DescribeEipGatewayInfoAsync(DescribeEipGatewayInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEipGatewayInfoWithOptionsAsync(request, runtime);
        }

        public ModifyBgpPeerAttributeResponse ModifyBgpPeerAttributeWithOptions(ModifyBgpPeerAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBgpPeerAttributeResponse>(DoRequest("ModifyBgpPeerAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyBgpPeerAttributeResponse> ModifyBgpPeerAttributeWithOptionsAsync(ModifyBgpPeerAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBgpPeerAttributeResponse>(await DoRequestAsync("ModifyBgpPeerAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyBgpPeerAttributeResponse ModifyBgpPeerAttribute(ModifyBgpPeerAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyBgpPeerAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyBgpPeerAttributeResponse> ModifyBgpPeerAttributeAsync(ModifyBgpPeerAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyBgpPeerAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeVpnSslServerLogsResponse DescribeVpnSslServerLogsWithOptions(DescribeVpnSslServerLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnSslServerLogsResponse>(DoRequest("DescribeVpnSslServerLogs", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpnSslServerLogsResponse> DescribeVpnSslServerLogsWithOptionsAsync(DescribeVpnSslServerLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnSslServerLogsResponse>(await DoRequestAsync("DescribeVpnSslServerLogs", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpnSslServerLogsResponse DescribeVpnSslServerLogs(DescribeVpnSslServerLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpnSslServerLogsWithOptions(request, runtime);
        }

        public async Task<DescribeVpnSslServerLogsResponse> DescribeVpnSslServerLogsAsync(DescribeVpnSslServerLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpnSslServerLogsWithOptionsAsync(request, runtime);
        }

        public ModifyExpressCloudConnectionBandwidthResponse ModifyExpressCloudConnectionBandwidthWithOptions(ModifyExpressCloudConnectionBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyExpressCloudConnectionBandwidthResponse>(DoRequest("ModifyExpressCloudConnectionBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyExpressCloudConnectionBandwidthResponse> ModifyExpressCloudConnectionBandwidthWithOptionsAsync(ModifyExpressCloudConnectionBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyExpressCloudConnectionBandwidthResponse>(await DoRequestAsync("ModifyExpressCloudConnectionBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyExpressCloudConnectionBandwidthResponse ModifyExpressCloudConnectionBandwidth(ModifyExpressCloudConnectionBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyExpressCloudConnectionBandwidthWithOptions(request, runtime);
        }

        public async Task<ModifyExpressCloudConnectionBandwidthResponse> ModifyExpressCloudConnectionBandwidthAsync(ModifyExpressCloudConnectionBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyExpressCloudConnectionBandwidthWithOptionsAsync(request, runtime);
        }

        public ModifyExpressCloudConnectionAttributeResponse ModifyExpressCloudConnectionAttributeWithOptions(ModifyExpressCloudConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyExpressCloudConnectionAttributeResponse>(DoRequest("ModifyExpressCloudConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyExpressCloudConnectionAttributeResponse> ModifyExpressCloudConnectionAttributeWithOptionsAsync(ModifyExpressCloudConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyExpressCloudConnectionAttributeResponse>(await DoRequestAsync("ModifyExpressCloudConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyExpressCloudConnectionAttributeResponse ModifyExpressCloudConnectionAttribute(ModifyExpressCloudConnectionAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyExpressCloudConnectionAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyExpressCloudConnectionAttributeResponse> ModifyExpressCloudConnectionAttributeAsync(ModifyExpressCloudConnectionAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyExpressCloudConnectionAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeExpressCloudConnectionsResponse DescribeExpressCloudConnectionsWithOptions(DescribeExpressCloudConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExpressCloudConnectionsResponse>(DoRequest("DescribeExpressCloudConnections", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeExpressCloudConnectionsResponse> DescribeExpressCloudConnectionsWithOptionsAsync(DescribeExpressCloudConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExpressCloudConnectionsResponse>(await DoRequestAsync("DescribeExpressCloudConnections", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeExpressCloudConnectionsResponse DescribeExpressCloudConnections(DescribeExpressCloudConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeExpressCloudConnectionsWithOptions(request, runtime);
        }

        public async Task<DescribeExpressCloudConnectionsResponse> DescribeExpressCloudConnectionsAsync(DescribeExpressCloudConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeExpressCloudConnectionsWithOptionsAsync(request, runtime);
        }

        public CreateExpressCloudConnectionResponse CreateExpressCloudConnectionWithOptions(CreateExpressCloudConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateExpressCloudConnectionResponse>(DoRequest("CreateExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateExpressCloudConnectionResponse> CreateExpressCloudConnectionWithOptionsAsync(CreateExpressCloudConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateExpressCloudConnectionResponse>(await DoRequestAsync("CreateExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateExpressCloudConnectionResponse CreateExpressCloudConnection(CreateExpressCloudConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateExpressCloudConnectionWithOptions(request, runtime);
        }

        public async Task<CreateExpressCloudConnectionResponse> CreateExpressCloudConnectionAsync(CreateExpressCloudConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateExpressCloudConnectionWithOptionsAsync(request, runtime);
        }

        public UpdateNetworkAclEntriesResponse UpdateNetworkAclEntriesWithOptions(UpdateNetworkAclEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateNetworkAclEntriesResponse>(DoRequest("UpdateNetworkAclEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateNetworkAclEntriesResponse> UpdateNetworkAclEntriesWithOptionsAsync(UpdateNetworkAclEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateNetworkAclEntriesResponse>(await DoRequestAsync("UpdateNetworkAclEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UpdateNetworkAclEntriesResponse UpdateNetworkAclEntries(UpdateNetworkAclEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateNetworkAclEntriesWithOptions(request, runtime);
        }

        public async Task<UpdateNetworkAclEntriesResponse> UpdateNetworkAclEntriesAsync(UpdateNetworkAclEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateNetworkAclEntriesWithOptionsAsync(request, runtime);
        }

        public UnassociateNetworkAclResponse UnassociateNetworkAclWithOptions(UnassociateNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateNetworkAclResponse>(DoRequest("UnassociateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateNetworkAclResponse> UnassociateNetworkAclWithOptionsAsync(UnassociateNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateNetworkAclResponse>(await DoRequestAsync("UnassociateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UnassociateNetworkAclResponse UnassociateNetworkAcl(UnassociateNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassociateNetworkAclWithOptions(request, runtime);
        }

        public async Task<UnassociateNetworkAclResponse> UnassociateNetworkAclAsync(UnassociateNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassociateNetworkAclWithOptionsAsync(request, runtime);
        }

        public ModifyNetworkAclAttributesResponse ModifyNetworkAclAttributesWithOptions(ModifyNetworkAclAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNetworkAclAttributesResponse>(DoRequest("ModifyNetworkAclAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyNetworkAclAttributesResponse> ModifyNetworkAclAttributesWithOptionsAsync(ModifyNetworkAclAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNetworkAclAttributesResponse>(await DoRequestAsync("ModifyNetworkAclAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyNetworkAclAttributesResponse ModifyNetworkAclAttributes(ModifyNetworkAclAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyNetworkAclAttributesWithOptions(request, runtime);
        }

        public async Task<ModifyNetworkAclAttributesResponse> ModifyNetworkAclAttributesAsync(ModifyNetworkAclAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyNetworkAclAttributesWithOptionsAsync(request, runtime);
        }

        public DescribeNetworkAclsResponse DescribeNetworkAclsWithOptions(DescribeNetworkAclsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkAclsResponse>(DoRequest("DescribeNetworkAcls", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNetworkAclsResponse> DescribeNetworkAclsWithOptionsAsync(DescribeNetworkAclsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkAclsResponse>(await DoRequestAsync("DescribeNetworkAcls", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNetworkAclsResponse DescribeNetworkAcls(DescribeNetworkAclsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNetworkAclsWithOptions(request, runtime);
        }

        public async Task<DescribeNetworkAclsResponse> DescribeNetworkAclsAsync(DescribeNetworkAclsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNetworkAclsWithOptionsAsync(request, runtime);
        }

        public DescribeNetworkAclAttributesResponse DescribeNetworkAclAttributesWithOptions(DescribeNetworkAclAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkAclAttributesResponse>(DoRequest("DescribeNetworkAclAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNetworkAclAttributesResponse> DescribeNetworkAclAttributesWithOptionsAsync(DescribeNetworkAclAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNetworkAclAttributesResponse>(await DoRequestAsync("DescribeNetworkAclAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeNetworkAclAttributesResponse DescribeNetworkAclAttributes(DescribeNetworkAclAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeNetworkAclAttributesWithOptions(request, runtime);
        }

        public async Task<DescribeNetworkAclAttributesResponse> DescribeNetworkAclAttributesAsync(DescribeNetworkAclAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeNetworkAclAttributesWithOptionsAsync(request, runtime);
        }

        public DeleteNetworkAclResponse DeleteNetworkAclWithOptions(DeleteNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNetworkAclResponse>(DoRequest("DeleteNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteNetworkAclResponse> DeleteNetworkAclWithOptionsAsync(DeleteNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNetworkAclResponse>(await DoRequestAsync("DeleteNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteNetworkAclResponse DeleteNetworkAcl(DeleteNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteNetworkAclWithOptions(request, runtime);
        }

        public async Task<DeleteNetworkAclResponse> DeleteNetworkAclAsync(DeleteNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteNetworkAclWithOptionsAsync(request, runtime);
        }

        public CreateNetworkAclResponse CreateNetworkAclWithOptions(CreateNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNetworkAclResponse>(DoRequest("CreateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateNetworkAclResponse> CreateNetworkAclWithOptionsAsync(CreateNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNetworkAclResponse>(await DoRequestAsync("CreateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateNetworkAclResponse CreateNetworkAcl(CreateNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateNetworkAclWithOptions(request, runtime);
        }

        public async Task<CreateNetworkAclResponse> CreateNetworkAclAsync(CreateNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateNetworkAclWithOptionsAsync(request, runtime);
        }

        public CopyNetworkAclEntriesResponse CopyNetworkAclEntriesWithOptions(CopyNetworkAclEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyNetworkAclEntriesResponse>(DoRequest("CopyNetworkAclEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CopyNetworkAclEntriesResponse> CopyNetworkAclEntriesWithOptionsAsync(CopyNetworkAclEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyNetworkAclEntriesResponse>(await DoRequestAsync("CopyNetworkAclEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CopyNetworkAclEntriesResponse CopyNetworkAclEntries(CopyNetworkAclEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CopyNetworkAclEntriesWithOptions(request, runtime);
        }

        public async Task<CopyNetworkAclEntriesResponse> CopyNetworkAclEntriesAsync(CopyNetworkAclEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CopyNetworkAclEntriesWithOptionsAsync(request, runtime);
        }

        public AssociateNetworkAclResponse AssociateNetworkAclWithOptions(AssociateNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateNetworkAclResponse>(DoRequest("AssociateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateNetworkAclResponse> AssociateNetworkAclWithOptionsAsync(AssociateNetworkAclRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateNetworkAclResponse>(await DoRequestAsync("AssociateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AssociateNetworkAclResponse AssociateNetworkAcl(AssociateNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssociateNetworkAclWithOptions(request, runtime);
        }

        public async Task<AssociateNetworkAclResponse> AssociateNetworkAclAsync(AssociateNetworkAclRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssociateNetworkAclWithOptionsAsync(request, runtime);
        }

        public ModifyCommonBandwidthPackageIpBandwidthResponse ModifyCommonBandwidthPackageIpBandwidthWithOptions(ModifyCommonBandwidthPackageIpBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackageIpBandwidthResponse>(DoRequest("ModifyCommonBandwidthPackageIpBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCommonBandwidthPackageIpBandwidthResponse> ModifyCommonBandwidthPackageIpBandwidthWithOptionsAsync(ModifyCommonBandwidthPackageIpBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackageIpBandwidthResponse>(await DoRequestAsync("ModifyCommonBandwidthPackageIpBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCommonBandwidthPackageIpBandwidthResponse ModifyCommonBandwidthPackageIpBandwidth(ModifyCommonBandwidthPackageIpBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCommonBandwidthPackageIpBandwidthWithOptions(request, runtime);
        }

        public async Task<ModifyCommonBandwidthPackageIpBandwidthResponse> ModifyCommonBandwidthPackageIpBandwidthAsync(ModifyCommonBandwidthPackageIpBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCommonBandwidthPackageIpBandwidthWithOptionsAsync(request, runtime);
        }

        public CancelCommonBandwidthPackageIpBandwidthResponse CancelCommonBandwidthPackageIpBandwidthWithOptions(CancelCommonBandwidthPackageIpBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCommonBandwidthPackageIpBandwidthResponse>(DoRequest("CancelCommonBandwidthPackageIpBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelCommonBandwidthPackageIpBandwidthResponse> CancelCommonBandwidthPackageIpBandwidthWithOptionsAsync(CancelCommonBandwidthPackageIpBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCommonBandwidthPackageIpBandwidthResponse>(await DoRequestAsync("CancelCommonBandwidthPackageIpBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CancelCommonBandwidthPackageIpBandwidthResponse CancelCommonBandwidthPackageIpBandwidth(CancelCommonBandwidthPackageIpBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelCommonBandwidthPackageIpBandwidthWithOptions(request, runtime);
        }

        public async Task<CancelCommonBandwidthPackageIpBandwidthResponse> CancelCommonBandwidthPackageIpBandwidthAsync(CancelCommonBandwidthPackageIpBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelCommonBandwidthPackageIpBandwidthWithOptionsAsync(request, runtime);
        }

        public CreateVpnPbrRouteEntryResponse CreateVpnPbrRouteEntryWithOptions(CreateVpnPbrRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnPbrRouteEntryResponse>(DoRequest("CreateVpnPbrRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVpnPbrRouteEntryResponse> CreateVpnPbrRouteEntryWithOptionsAsync(CreateVpnPbrRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnPbrRouteEntryResponse>(await DoRequestAsync("CreateVpnPbrRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateVpnPbrRouteEntryResponse CreateVpnPbrRouteEntry(CreateVpnPbrRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVpnPbrRouteEntryWithOptions(request, runtime);
        }

        public async Task<CreateVpnPbrRouteEntryResponse> CreateVpnPbrRouteEntryAsync(CreateVpnPbrRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVpnPbrRouteEntryWithOptionsAsync(request, runtime);
        }

        public CreateVpnRouteEntryResponse CreateVpnRouteEntryWithOptions(CreateVpnRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnRouteEntryResponse>(DoRequest("CreateVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVpnRouteEntryResponse> CreateVpnRouteEntryWithOptionsAsync(CreateVpnRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnRouteEntryResponse>(await DoRequestAsync("CreateVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateVpnRouteEntryResponse CreateVpnRouteEntry(CreateVpnRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVpnRouteEntryWithOptions(request, runtime);
        }

        public async Task<CreateVpnRouteEntryResponse> CreateVpnRouteEntryAsync(CreateVpnRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVpnRouteEntryWithOptionsAsync(request, runtime);
        }

        public DeleteVpnPbrRouteEntryResponse DeleteVpnPbrRouteEntryWithOptions(DeleteVpnPbrRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnPbrRouteEntryResponse>(DoRequest("DeleteVpnPbrRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVpnPbrRouteEntryResponse> DeleteVpnPbrRouteEntryWithOptionsAsync(DeleteVpnPbrRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnPbrRouteEntryResponse>(await DoRequestAsync("DeleteVpnPbrRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVpnPbrRouteEntryResponse DeleteVpnPbrRouteEntry(DeleteVpnPbrRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVpnPbrRouteEntryWithOptions(request, runtime);
        }

        public async Task<DeleteVpnPbrRouteEntryResponse> DeleteVpnPbrRouteEntryAsync(DeleteVpnPbrRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVpnPbrRouteEntryWithOptionsAsync(request, runtime);
        }

        public DeleteVpnRouteEntryResponse DeleteVpnRouteEntryWithOptions(DeleteVpnRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnRouteEntryResponse>(DoRequest("DeleteVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVpnRouteEntryResponse> DeleteVpnRouteEntryWithOptionsAsync(DeleteVpnRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnRouteEntryResponse>(await DoRequestAsync("DeleteVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVpnRouteEntryResponse DeleteVpnRouteEntry(DeleteVpnRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVpnRouteEntryWithOptions(request, runtime);
        }

        public async Task<DeleteVpnRouteEntryResponse> DeleteVpnRouteEntryAsync(DeleteVpnRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVpnRouteEntryWithOptionsAsync(request, runtime);
        }

        public DescribeVpnRouteEntriesResponse DescribeVpnRouteEntriesWithOptions(DescribeVpnRouteEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnRouteEntriesResponse>(DoRequest("DescribeVpnRouteEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpnRouteEntriesResponse> DescribeVpnRouteEntriesWithOptionsAsync(DescribeVpnRouteEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnRouteEntriesResponse>(await DoRequestAsync("DescribeVpnRouteEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpnRouteEntriesResponse DescribeVpnRouteEntries(DescribeVpnRouteEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpnRouteEntriesWithOptions(request, runtime);
        }

        public async Task<DescribeVpnRouteEntriesResponse> DescribeVpnRouteEntriesAsync(DescribeVpnRouteEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpnRouteEntriesWithOptionsAsync(request, runtime);
        }

        public DescribeVpnPbrRouteEntriesResponse DescribeVpnPbrRouteEntriesWithOptions(DescribeVpnPbrRouteEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnPbrRouteEntriesResponse>(DoRequest("DescribeVpnPbrRouteEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpnPbrRouteEntriesResponse> DescribeVpnPbrRouteEntriesWithOptionsAsync(DescribeVpnPbrRouteEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnPbrRouteEntriesResponse>(await DoRequestAsync("DescribeVpnPbrRouteEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpnPbrRouteEntriesResponse DescribeVpnPbrRouteEntries(DescribeVpnPbrRouteEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpnPbrRouteEntriesWithOptions(request, runtime);
        }

        public async Task<DescribeVpnPbrRouteEntriesResponse> DescribeVpnPbrRouteEntriesAsync(DescribeVpnPbrRouteEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpnPbrRouteEntriesWithOptionsAsync(request, runtime);
        }

        public PublishVpnRouteEntryResponse PublishVpnRouteEntryWithOptions(PublishVpnRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PublishVpnRouteEntryResponse>(DoRequest("PublishVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PublishVpnRouteEntryResponse> PublishVpnRouteEntryWithOptionsAsync(PublishVpnRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PublishVpnRouteEntryResponse>(await DoRequestAsync("PublishVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public PublishVpnRouteEntryResponse PublishVpnRouteEntry(PublishVpnRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PublishVpnRouteEntryWithOptions(request, runtime);
        }

        public async Task<PublishVpnRouteEntryResponse> PublishVpnRouteEntryAsync(PublishVpnRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PublishVpnRouteEntryWithOptionsAsync(request, runtime);
        }

        public ModifyVpnRouteEntryWeightResponse ModifyVpnRouteEntryWeightWithOptions(ModifyVpnRouteEntryWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnRouteEntryWeightResponse>(DoRequest("ModifyVpnRouteEntryWeight", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVpnRouteEntryWeightResponse> ModifyVpnRouteEntryWeightWithOptionsAsync(ModifyVpnRouteEntryWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnRouteEntryWeightResponse>(await DoRequestAsync("ModifyVpnRouteEntryWeight", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVpnRouteEntryWeightResponse ModifyVpnRouteEntryWeight(ModifyVpnRouteEntryWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVpnRouteEntryWeightWithOptions(request, runtime);
        }

        public async Task<ModifyVpnRouteEntryWeightResponse> ModifyVpnRouteEntryWeightAsync(ModifyVpnRouteEntryWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVpnRouteEntryWeightWithOptionsAsync(request, runtime);
        }

        public ModifyVpnPbrRouteEntryWeightResponse ModifyVpnPbrRouteEntryWeightWithOptions(ModifyVpnPbrRouteEntryWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnPbrRouteEntryWeightResponse>(DoRequest("ModifyVpnPbrRouteEntryWeight", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVpnPbrRouteEntryWeightResponse> ModifyVpnPbrRouteEntryWeightWithOptionsAsync(ModifyVpnPbrRouteEntryWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnPbrRouteEntryWeightResponse>(await DoRequestAsync("ModifyVpnPbrRouteEntryWeight", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVpnPbrRouteEntryWeightResponse ModifyVpnPbrRouteEntryWeight(ModifyVpnPbrRouteEntryWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVpnPbrRouteEntryWeightWithOptions(request, runtime);
        }

        public async Task<ModifyVpnPbrRouteEntryWeightResponse> ModifyVpnPbrRouteEntryWeightAsync(ModifyVpnPbrRouteEntryWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVpnPbrRouteEntryWeightWithOptionsAsync(request, runtime);
        }

        /**
         * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public DescribePhysicalConnectionLOAResponse DescribePhysicalConnectionLOAWithOptions(DescribePhysicalConnectionLOARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePhysicalConnectionLOAResponse>(DoRequest("DescribePhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<DescribePhysicalConnectionLOAResponse> DescribePhysicalConnectionLOAWithOptionsAsync(DescribePhysicalConnectionLOARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePhysicalConnectionLOAResponse>(await DoRequestAsync("DescribePhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public DescribePhysicalConnectionLOAResponse DescribePhysicalConnectionLOA(DescribePhysicalConnectionLOARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePhysicalConnectionLOAWithOptions(request, runtime);
        }

        /**
         * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<DescribePhysicalConnectionLOAResponse> DescribePhysicalConnectionLOAAsync(DescribePhysicalConnectionLOARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePhysicalConnectionLOAWithOptionsAsync(request, runtime);
        }

        /**
         * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
          * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
          * &LineOperator=CT
          * &RegionId=cn-shanghai
          * &<CommonParameters>
          * description: 
         */
        public CreatePhysicalConnectionSetupOrderResponse CreatePhysicalConnectionSetupOrderWithOptions(CreatePhysicalConnectionSetupOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionSetupOrderResponse>(DoRequest("CreatePhysicalConnectionSetupOrder", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
          * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
          * &LineOperator=CT
          * &RegionId=cn-shanghai
          * &<CommonParameters>
          * description: 
         */
        public async Task<CreatePhysicalConnectionSetupOrderResponse> CreatePhysicalConnectionSetupOrderWithOptionsAsync(CreatePhysicalConnectionSetupOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionSetupOrderResponse>(await DoRequestAsync("CreatePhysicalConnectionSetupOrder", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
          * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
          * &LineOperator=CT
          * &RegionId=cn-shanghai
          * &<CommonParameters>
          * description: 
         */
        public CreatePhysicalConnectionSetupOrderResponse CreatePhysicalConnectionSetupOrder(CreatePhysicalConnectionSetupOrderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreatePhysicalConnectionSetupOrderWithOptions(request, runtime);
        }

        /**
         * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
          * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
          * &LineOperator=CT
          * &RegionId=cn-shanghai
          * &<CommonParameters>
          * description: 
         */
        public async Task<CreatePhysicalConnectionSetupOrderResponse> CreatePhysicalConnectionSetupOrderAsync(CreatePhysicalConnectionSetupOrderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreatePhysicalConnectionSetupOrderWithOptionsAsync(request, runtime);
        }

        /**
         * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
          * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public CreatePhysicalConnectionOccupancyOrderResponse CreatePhysicalConnectionOccupancyOrderWithOptions(CreatePhysicalConnectionOccupancyOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionOccupancyOrderResponse>(DoRequest("CreatePhysicalConnectionOccupancyOrder", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
          * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<CreatePhysicalConnectionOccupancyOrderResponse> CreatePhysicalConnectionOccupancyOrderWithOptionsAsync(CreatePhysicalConnectionOccupancyOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionOccupancyOrderResponse>(await DoRequestAsync("CreatePhysicalConnectionOccupancyOrder", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
          * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public CreatePhysicalConnectionOccupancyOrderResponse CreatePhysicalConnectionOccupancyOrder(CreatePhysicalConnectionOccupancyOrderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreatePhysicalConnectionOccupancyOrderWithOptions(request, runtime);
        }

        /**
         * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
          * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<CreatePhysicalConnectionOccupancyOrderResponse> CreatePhysicalConnectionOccupancyOrderAsync(CreatePhysicalConnectionOccupancyOrderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreatePhysicalConnectionOccupancyOrderWithOptionsAsync(request, runtime);
        }

        /**
         * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
          * &LineCode=aaa111
          * &LineLabel=bbb222
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public CompletePhysicalConnectionLOAResponse CompletePhysicalConnectionLOAWithOptions(CompletePhysicalConnectionLOARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CompletePhysicalConnectionLOAResponse>(DoRequest("CompletePhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
          * &LineCode=aaa111
          * &LineLabel=bbb222
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<CompletePhysicalConnectionLOAResponse> CompletePhysicalConnectionLOAWithOptionsAsync(CompletePhysicalConnectionLOARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CompletePhysicalConnectionLOAResponse>(await DoRequestAsync("CompletePhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
          * &LineCode=aaa111
          * &LineLabel=bbb222
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public CompletePhysicalConnectionLOAResponse CompletePhysicalConnectionLOA(CompletePhysicalConnectionLOARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CompletePhysicalConnectionLOAWithOptions(request, runtime);
        }

        /**
         * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
          * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
          * &LineCode=aaa111
          * &LineLabel=bbb222
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<CompletePhysicalConnectionLOAResponse> CompletePhysicalConnectionLOAAsync(CompletePhysicalConnectionLOARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CompletePhysicalConnectionLOAWithOptionsAsync(request, runtime);
        }

        /**
         * ApplyPhysicalConnectionLOA Apply for the LOA.
          * request demo:   * http(s)://[Endpoint]/?CompanyName=company
          * &ConstructionTime=2019-02-28T16:00:00.000Z
          * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
          * &LineType=SDH
          * &PeerLocation=Hangzhou
          * &RegionId=cn-hangzhou
          * &Si=Alibaba Cloud
          * &<CommonParameters>
          * description: 
         */
        public ApplyPhysicalConnectionLOAResponse ApplyPhysicalConnectionLOAWithOptions(ApplyPhysicalConnectionLOARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyPhysicalConnectionLOAResponse>(DoRequest("ApplyPhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * ApplyPhysicalConnectionLOA Apply for the LOA.
          * request demo:   * http(s)://[Endpoint]/?CompanyName=company
          * &ConstructionTime=2019-02-28T16:00:00.000Z
          * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
          * &LineType=SDH
          * &PeerLocation=Hangzhou
          * &RegionId=cn-hangzhou
          * &Si=Alibaba Cloud
          * &<CommonParameters>
          * description: 
         */
        public async Task<ApplyPhysicalConnectionLOAResponse> ApplyPhysicalConnectionLOAWithOptionsAsync(ApplyPhysicalConnectionLOARequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyPhysicalConnectionLOAResponse>(await DoRequestAsync("ApplyPhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * ApplyPhysicalConnectionLOA Apply for the LOA.
          * request demo:   * http(s)://[Endpoint]/?CompanyName=company
          * &ConstructionTime=2019-02-28T16:00:00.000Z
          * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
          * &LineType=SDH
          * &PeerLocation=Hangzhou
          * &RegionId=cn-hangzhou
          * &Si=Alibaba Cloud
          * &<CommonParameters>
          * description: 
         */
        public ApplyPhysicalConnectionLOAResponse ApplyPhysicalConnectionLOA(ApplyPhysicalConnectionLOARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ApplyPhysicalConnectionLOAWithOptions(request, runtime);
        }

        /**
         * ApplyPhysicalConnectionLOA Apply for the LOA.
          * request demo:   * http(s)://[Endpoint]/?CompanyName=company
          * &ConstructionTime=2019-02-28T16:00:00.000Z
          * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
          * &LineType=SDH
          * &PeerLocation=Hangzhou
          * &RegionId=cn-hangzhou
          * &Si=Alibaba Cloud
          * &<CommonParameters>
          * description: 
         */
        public async Task<ApplyPhysicalConnectionLOAResponse> ApplyPhysicalConnectionLOAAsync(ApplyPhysicalConnectionLOARequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ApplyPhysicalConnectionLOAWithOptionsAsync(request, runtime);
        }

        public ConvertBandwidthPackageResponse ConvertBandwidthPackageWithOptions(ConvertBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConvertBandwidthPackageResponse>(DoRequest("ConvertBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ConvertBandwidthPackageResponse> ConvertBandwidthPackageWithOptionsAsync(ConvertBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConvertBandwidthPackageResponse>(await DoRequestAsync("ConvertBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ConvertBandwidthPackageResponse ConvertBandwidthPackage(ConvertBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ConvertBandwidthPackageWithOptions(request, runtime);
        }

        public async Task<ConvertBandwidthPackageResponse> ConvertBandwidthPackageAsync(ConvertBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ConvertBandwidthPackageWithOptionsAsync(request, runtime);
        }

        public ModifyRouteEntryResponse ModifyRouteEntryWithOptions(ModifyRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouteEntryResponse>(DoRequest("ModifyRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyRouteEntryResponse> ModifyRouteEntryWithOptionsAsync(ModifyRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouteEntryResponse>(await DoRequestAsync("ModifyRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyRouteEntryResponse ModifyRouteEntry(ModifyRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyRouteEntryWithOptions(request, runtime);
        }

        public async Task<ModifyRouteEntryResponse> ModifyRouteEntryAsync(ModifyRouteEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyRouteEntryWithOptionsAsync(request, runtime);
        }

        public DescribeRouteEntryListResponse DescribeRouteEntryListWithOptions(DescribeRouteEntryListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteEntryListResponse>(DoRequest("DescribeRouteEntryList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRouteEntryListResponse> DescribeRouteEntryListWithOptionsAsync(DescribeRouteEntryListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteEntryListResponse>(await DoRequestAsync("DescribeRouteEntryList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRouteEntryListResponse DescribeRouteEntryList(DescribeRouteEntryListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRouteEntryListWithOptions(request, runtime);
        }

        public async Task<DescribeRouteEntryListResponse> DescribeRouteEntryListAsync(DescribeRouteEntryListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRouteEntryListWithOptionsAsync(request, runtime);
        }

        public CreateIPv6TranslatorAclListResponse CreateIPv6TranslatorAclListWithOptions(CreateIPv6TranslatorAclListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIPv6TranslatorAclListResponse>(DoRequest("CreateIPv6TranslatorAclList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateIPv6TranslatorAclListResponse> CreateIPv6TranslatorAclListWithOptionsAsync(CreateIPv6TranslatorAclListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIPv6TranslatorAclListResponse>(await DoRequestAsync("CreateIPv6TranslatorAclList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateIPv6TranslatorAclListResponse CreateIPv6TranslatorAclList(CreateIPv6TranslatorAclListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateIPv6TranslatorAclListWithOptions(request, runtime);
        }

        public async Task<CreateIPv6TranslatorAclListResponse> CreateIPv6TranslatorAclListAsync(CreateIPv6TranslatorAclListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateIPv6TranslatorAclListWithOptionsAsync(request, runtime);
        }

        public DeleteIPv6TranslatorAclListResponse DeleteIPv6TranslatorAclListWithOptions(DeleteIPv6TranslatorAclListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIPv6TranslatorAclListResponse>(DoRequest("DeleteIPv6TranslatorAclList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteIPv6TranslatorAclListResponse> DeleteIPv6TranslatorAclListWithOptionsAsync(DeleteIPv6TranslatorAclListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIPv6TranslatorAclListResponse>(await DoRequestAsync("DeleteIPv6TranslatorAclList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteIPv6TranslatorAclListResponse DeleteIPv6TranslatorAclList(DeleteIPv6TranslatorAclListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteIPv6TranslatorAclListWithOptions(request, runtime);
        }

        public async Task<DeleteIPv6TranslatorAclListResponse> DeleteIPv6TranslatorAclListAsync(DeleteIPv6TranslatorAclListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteIPv6TranslatorAclListWithOptionsAsync(request, runtime);
        }

        public AddIPv6TranslatorAclListEntryResponse AddIPv6TranslatorAclListEntryWithOptions(AddIPv6TranslatorAclListEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddIPv6TranslatorAclListEntryResponse>(DoRequest("AddIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddIPv6TranslatorAclListEntryResponse> AddIPv6TranslatorAclListEntryWithOptionsAsync(AddIPv6TranslatorAclListEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddIPv6TranslatorAclListEntryResponse>(await DoRequestAsync("AddIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AddIPv6TranslatorAclListEntryResponse AddIPv6TranslatorAclListEntry(AddIPv6TranslatorAclListEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddIPv6TranslatorAclListEntryWithOptions(request, runtime);
        }

        public async Task<AddIPv6TranslatorAclListEntryResponse> AddIPv6TranslatorAclListEntryAsync(AddIPv6TranslatorAclListEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddIPv6TranslatorAclListEntryWithOptionsAsync(request, runtime);
        }

        public DescribeIPv6TranslatorAclListsResponse DescribeIPv6TranslatorAclListsWithOptions(DescribeIPv6TranslatorAclListsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorAclListsResponse>(DoRequest("DescribeIPv6TranslatorAclLists", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIPv6TranslatorAclListsResponse> DescribeIPv6TranslatorAclListsWithOptionsAsync(DescribeIPv6TranslatorAclListsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorAclListsResponse>(await DoRequestAsync("DescribeIPv6TranslatorAclLists", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIPv6TranslatorAclListsResponse DescribeIPv6TranslatorAclLists(DescribeIPv6TranslatorAclListsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIPv6TranslatorAclListsWithOptions(request, runtime);
        }

        public async Task<DescribeIPv6TranslatorAclListsResponse> DescribeIPv6TranslatorAclListsAsync(DescribeIPv6TranslatorAclListsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIPv6TranslatorAclListsWithOptionsAsync(request, runtime);
        }

        public ModifyIPv6TranslatorAclAttributeResponse ModifyIPv6TranslatorAclAttributeWithOptions(ModifyIPv6TranslatorAclAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorAclAttributeResponse>(DoRequest("ModifyIPv6TranslatorAclAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIPv6TranslatorAclAttributeResponse> ModifyIPv6TranslatorAclAttributeWithOptionsAsync(ModifyIPv6TranslatorAclAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorAclAttributeResponse>(await DoRequestAsync("ModifyIPv6TranslatorAclAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIPv6TranslatorAclAttributeResponse ModifyIPv6TranslatorAclAttribute(ModifyIPv6TranslatorAclAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIPv6TranslatorAclAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyIPv6TranslatorAclAttributeResponse> ModifyIPv6TranslatorAclAttributeAsync(ModifyIPv6TranslatorAclAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIPv6TranslatorAclAttributeWithOptionsAsync(request, runtime);
        }

        public RemoveIPv6TranslatorAclListEntryResponse RemoveIPv6TranslatorAclListEntryWithOptions(RemoveIPv6TranslatorAclListEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveIPv6TranslatorAclListEntryResponse>(DoRequest("RemoveIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveIPv6TranslatorAclListEntryResponse> RemoveIPv6TranslatorAclListEntryWithOptionsAsync(RemoveIPv6TranslatorAclListEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveIPv6TranslatorAclListEntryResponse>(await DoRequestAsync("RemoveIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public RemoveIPv6TranslatorAclListEntryResponse RemoveIPv6TranslatorAclListEntry(RemoveIPv6TranslatorAclListEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveIPv6TranslatorAclListEntryWithOptions(request, runtime);
        }

        public async Task<RemoveIPv6TranslatorAclListEntryResponse> RemoveIPv6TranslatorAclListEntryAsync(RemoveIPv6TranslatorAclListEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveIPv6TranslatorAclListEntryWithOptionsAsync(request, runtime);
        }

        public DescribeIPv6TranslatorAclListAttributesResponse DescribeIPv6TranslatorAclListAttributesWithOptions(DescribeIPv6TranslatorAclListAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorAclListAttributesResponse>(DoRequest("DescribeIPv6TranslatorAclListAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIPv6TranslatorAclListAttributesResponse> DescribeIPv6TranslatorAclListAttributesWithOptionsAsync(DescribeIPv6TranslatorAclListAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorAclListAttributesResponse>(await DoRequestAsync("DescribeIPv6TranslatorAclListAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIPv6TranslatorAclListAttributesResponse DescribeIPv6TranslatorAclListAttributes(DescribeIPv6TranslatorAclListAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIPv6TranslatorAclListAttributesWithOptions(request, runtime);
        }

        public async Task<DescribeIPv6TranslatorAclListAttributesResponse> DescribeIPv6TranslatorAclListAttributesAsync(DescribeIPv6TranslatorAclListAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIPv6TranslatorAclListAttributesWithOptionsAsync(request, runtime);
        }

        public ModifyIPv6TranslatorAclListEntryResponse ModifyIPv6TranslatorAclListEntryWithOptions(ModifyIPv6TranslatorAclListEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorAclListEntryResponse>(DoRequest("ModifyIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIPv6TranslatorAclListEntryResponse> ModifyIPv6TranslatorAclListEntryWithOptionsAsync(ModifyIPv6TranslatorAclListEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorAclListEntryResponse>(await DoRequestAsync("ModifyIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIPv6TranslatorAclListEntryResponse ModifyIPv6TranslatorAclListEntry(ModifyIPv6TranslatorAclListEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIPv6TranslatorAclListEntryWithOptions(request, runtime);
        }

        public async Task<ModifyIPv6TranslatorAclListEntryResponse> ModifyIPv6TranslatorAclListEntryAsync(ModifyIPv6TranslatorAclListEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIPv6TranslatorAclListEntryWithOptionsAsync(request, runtime);
        }

        public UnTagResourcesResponse UnTagResourcesWithOptions(UnTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnTagResourcesResponse>(DoRequest("UnTagResources", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnTagResourcesResponse> UnTagResourcesWithOptionsAsync(UnTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnTagResourcesResponse>(await DoRequestAsync("UnTagResources", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UnTagResourcesResponse UnTagResources(UnTagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnTagResourcesWithOptions(request, runtime);
        }

        public async Task<UnTagResourcesResponse> UnTagResourcesAsync(UnTagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnTagResourcesWithOptionsAsync(request, runtime);
        }

        public TagResourcesResponse TagResourcesWithOptions(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(DoRequest("TagResources", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TagResourcesResponse> TagResourcesWithOptionsAsync(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(await DoRequestAsync("TagResources", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<ListTagResourcesResponse>(DoRequest("ListTagResources", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesWithOptionsAsync(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(await DoRequestAsync("ListTagResources", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyIpv6InternetBandwidthResponse ModifyIpv6InternetBandwidthWithOptions(ModifyIpv6InternetBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6InternetBandwidthResponse>(DoRequest("ModifyIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIpv6InternetBandwidthResponse> ModifyIpv6InternetBandwidthWithOptionsAsync(ModifyIpv6InternetBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6InternetBandwidthResponse>(await DoRequestAsync("ModifyIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIpv6InternetBandwidthResponse ModifyIpv6InternetBandwidth(ModifyIpv6InternetBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIpv6InternetBandwidthWithOptions(request, runtime);
        }

        public async Task<ModifyIpv6InternetBandwidthResponse> ModifyIpv6InternetBandwidthAsync(ModifyIpv6InternetBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIpv6InternetBandwidthWithOptionsAsync(request, runtime);
        }

        public ModifyIpv6GatewaySpecResponse ModifyIpv6GatewaySpecWithOptions(ModifyIpv6GatewaySpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6GatewaySpecResponse>(DoRequest("ModifyIpv6GatewaySpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIpv6GatewaySpecResponse> ModifyIpv6GatewaySpecWithOptionsAsync(ModifyIpv6GatewaySpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6GatewaySpecResponse>(await DoRequestAsync("ModifyIpv6GatewaySpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIpv6GatewaySpecResponse ModifyIpv6GatewaySpec(ModifyIpv6GatewaySpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIpv6GatewaySpecWithOptions(request, runtime);
        }

        public async Task<ModifyIpv6GatewaySpecResponse> ModifyIpv6GatewaySpecAsync(ModifyIpv6GatewaySpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIpv6GatewaySpecWithOptionsAsync(request, runtime);
        }

        public ModifyIpv6GatewayAttributeResponse ModifyIpv6GatewayAttributeWithOptions(ModifyIpv6GatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6GatewayAttributeResponse>(DoRequest("ModifyIpv6GatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIpv6GatewayAttributeResponse> ModifyIpv6GatewayAttributeWithOptionsAsync(ModifyIpv6GatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6GatewayAttributeResponse>(await DoRequestAsync("ModifyIpv6GatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIpv6GatewayAttributeResponse ModifyIpv6GatewayAttribute(ModifyIpv6GatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIpv6GatewayAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyIpv6GatewayAttributeResponse> ModifyIpv6GatewayAttributeAsync(ModifyIpv6GatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIpv6GatewayAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyIpv6AddressAttributeResponse ModifyIpv6AddressAttributeWithOptions(ModifyIpv6AddressAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6AddressAttributeResponse>(DoRequest("ModifyIpv6AddressAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIpv6AddressAttributeResponse> ModifyIpv6AddressAttributeWithOptionsAsync(ModifyIpv6AddressAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIpv6AddressAttributeResponse>(await DoRequestAsync("ModifyIpv6AddressAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIpv6AddressAttributeResponse ModifyIpv6AddressAttribute(ModifyIpv6AddressAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIpv6AddressAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyIpv6AddressAttributeResponse> ModifyIpv6AddressAttributeAsync(ModifyIpv6AddressAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIpv6AddressAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeIpv6GatewaysResponse DescribeIpv6GatewaysWithOptions(DescribeIpv6GatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6GatewaysResponse>(DoRequest("DescribeIpv6Gateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIpv6GatewaysResponse> DescribeIpv6GatewaysWithOptionsAsync(DescribeIpv6GatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6GatewaysResponse>(await DoRequestAsync("DescribeIpv6Gateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIpv6GatewaysResponse DescribeIpv6Gateways(DescribeIpv6GatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIpv6GatewaysWithOptions(request, runtime);
        }

        public async Task<DescribeIpv6GatewaysResponse> DescribeIpv6GatewaysAsync(DescribeIpv6GatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIpv6GatewaysWithOptionsAsync(request, runtime);
        }

        public DescribeIpv6GatewayAttributeResponse DescribeIpv6GatewayAttributeWithOptions(DescribeIpv6GatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6GatewayAttributeResponse>(DoRequest("DescribeIpv6GatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIpv6GatewayAttributeResponse> DescribeIpv6GatewayAttributeWithOptionsAsync(DescribeIpv6GatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6GatewayAttributeResponse>(await DoRequestAsync("DescribeIpv6GatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIpv6GatewayAttributeResponse DescribeIpv6GatewayAttribute(DescribeIpv6GatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIpv6GatewayAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeIpv6GatewayAttributeResponse> DescribeIpv6GatewayAttributeAsync(DescribeIpv6GatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIpv6GatewayAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeIpv6EgressOnlyRulesResponse DescribeIpv6EgressOnlyRulesWithOptions(DescribeIpv6EgressOnlyRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6EgressOnlyRulesResponse>(DoRequest("DescribeIpv6EgressOnlyRules", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIpv6EgressOnlyRulesResponse> DescribeIpv6EgressOnlyRulesWithOptionsAsync(DescribeIpv6EgressOnlyRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6EgressOnlyRulesResponse>(await DoRequestAsync("DescribeIpv6EgressOnlyRules", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIpv6EgressOnlyRulesResponse DescribeIpv6EgressOnlyRules(DescribeIpv6EgressOnlyRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIpv6EgressOnlyRulesWithOptions(request, runtime);
        }

        public async Task<DescribeIpv6EgressOnlyRulesResponse> DescribeIpv6EgressOnlyRulesAsync(DescribeIpv6EgressOnlyRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIpv6EgressOnlyRulesWithOptionsAsync(request, runtime);
        }

        public DescribeIpv6AddressesResponse DescribeIpv6AddressesWithOptions(DescribeIpv6AddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6AddressesResponse>(DoRequest("DescribeIpv6Addresses", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIpv6AddressesResponse> DescribeIpv6AddressesWithOptionsAsync(DescribeIpv6AddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIpv6AddressesResponse>(await DoRequestAsync("DescribeIpv6Addresses", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIpv6AddressesResponse DescribeIpv6Addresses(DescribeIpv6AddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIpv6AddressesWithOptions(request, runtime);
        }

        public async Task<DescribeIpv6AddressesResponse> DescribeIpv6AddressesAsync(DescribeIpv6AddressesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIpv6AddressesWithOptionsAsync(request, runtime);
        }

        public DeleteIpv6InternetBandwidthResponse DeleteIpv6InternetBandwidthWithOptions(DeleteIpv6InternetBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIpv6InternetBandwidthResponse>(DoRequest("DeleteIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteIpv6InternetBandwidthResponse> DeleteIpv6InternetBandwidthWithOptionsAsync(DeleteIpv6InternetBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIpv6InternetBandwidthResponse>(await DoRequestAsync("DeleteIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteIpv6InternetBandwidthResponse DeleteIpv6InternetBandwidth(DeleteIpv6InternetBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteIpv6InternetBandwidthWithOptions(request, runtime);
        }

        public async Task<DeleteIpv6InternetBandwidthResponse> DeleteIpv6InternetBandwidthAsync(DeleteIpv6InternetBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteIpv6InternetBandwidthWithOptionsAsync(request, runtime);
        }

        public DeleteIpv6GatewayResponse DeleteIpv6GatewayWithOptions(DeleteIpv6GatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIpv6GatewayResponse>(DoRequest("DeleteIpv6Gateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteIpv6GatewayResponse> DeleteIpv6GatewayWithOptionsAsync(DeleteIpv6GatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIpv6GatewayResponse>(await DoRequestAsync("DeleteIpv6Gateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteIpv6GatewayResponse DeleteIpv6Gateway(DeleteIpv6GatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteIpv6GatewayWithOptions(request, runtime);
        }

        public async Task<DeleteIpv6GatewayResponse> DeleteIpv6GatewayAsync(DeleteIpv6GatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteIpv6GatewayWithOptionsAsync(request, runtime);
        }

        public DeleteIpv6EgressOnlyRuleResponse DeleteIpv6EgressOnlyRuleWithOptions(DeleteIpv6EgressOnlyRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIpv6EgressOnlyRuleResponse>(DoRequest("DeleteIpv6EgressOnlyRule", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteIpv6EgressOnlyRuleResponse> DeleteIpv6EgressOnlyRuleWithOptionsAsync(DeleteIpv6EgressOnlyRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIpv6EgressOnlyRuleResponse>(await DoRequestAsync("DeleteIpv6EgressOnlyRule", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteIpv6EgressOnlyRuleResponse DeleteIpv6EgressOnlyRule(DeleteIpv6EgressOnlyRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteIpv6EgressOnlyRuleWithOptions(request, runtime);
        }

        public async Task<DeleteIpv6EgressOnlyRuleResponse> DeleteIpv6EgressOnlyRuleAsync(DeleteIpv6EgressOnlyRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteIpv6EgressOnlyRuleWithOptionsAsync(request, runtime);
        }

        public CreateIpv6GatewayResponse CreateIpv6GatewayWithOptions(CreateIpv6GatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIpv6GatewayResponse>(DoRequest("CreateIpv6Gateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateIpv6GatewayResponse> CreateIpv6GatewayWithOptionsAsync(CreateIpv6GatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIpv6GatewayResponse>(await DoRequestAsync("CreateIpv6Gateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateIpv6GatewayResponse CreateIpv6Gateway(CreateIpv6GatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateIpv6GatewayWithOptions(request, runtime);
        }

        public async Task<CreateIpv6GatewayResponse> CreateIpv6GatewayAsync(CreateIpv6GatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateIpv6GatewayWithOptionsAsync(request, runtime);
        }

        public CreateIpv6EgressOnlyRuleResponse CreateIpv6EgressOnlyRuleWithOptions(CreateIpv6EgressOnlyRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIpv6EgressOnlyRuleResponse>(DoRequest("CreateIpv6EgressOnlyRule", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateIpv6EgressOnlyRuleResponse> CreateIpv6EgressOnlyRuleWithOptionsAsync(CreateIpv6EgressOnlyRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIpv6EgressOnlyRuleResponse>(await DoRequestAsync("CreateIpv6EgressOnlyRule", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateIpv6EgressOnlyRuleResponse CreateIpv6EgressOnlyRule(CreateIpv6EgressOnlyRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateIpv6EgressOnlyRuleWithOptions(request, runtime);
        }

        public async Task<CreateIpv6EgressOnlyRuleResponse> CreateIpv6EgressOnlyRuleAsync(CreateIpv6EgressOnlyRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateIpv6EgressOnlyRuleWithOptionsAsync(request, runtime);
        }

        public AllocateIpv6InternetBandwidthResponse AllocateIpv6InternetBandwidthWithOptions(AllocateIpv6InternetBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateIpv6InternetBandwidthResponse>(DoRequest("AllocateIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateIpv6InternetBandwidthResponse> AllocateIpv6InternetBandwidthWithOptionsAsync(AllocateIpv6InternetBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateIpv6InternetBandwidthResponse>(await DoRequestAsync("AllocateIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AllocateIpv6InternetBandwidthResponse AllocateIpv6InternetBandwidth(AllocateIpv6InternetBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateIpv6InternetBandwidthWithOptions(request, runtime);
        }

        public async Task<AllocateIpv6InternetBandwidthResponse> AllocateIpv6InternetBandwidthAsync(AllocateIpv6InternetBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateIpv6InternetBandwidthWithOptionsAsync(request, runtime);
        }

        public DeleteExpressConnectResponse DeleteExpressConnectWithOptions(DeleteExpressConnectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExpressConnectResponse>(DoRequest("DeleteExpressConnect", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteExpressConnectResponse> DeleteExpressConnectWithOptionsAsync(DeleteExpressConnectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExpressConnectResponse>(await DoRequestAsync("DeleteExpressConnect", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteExpressConnectResponse DeleteExpressConnect(DeleteExpressConnectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteExpressConnectWithOptions(request, runtime);
        }

        public async Task<DeleteExpressConnectResponse> DeleteExpressConnectAsync(DeleteExpressConnectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteExpressConnectWithOptionsAsync(request, runtime);
        }

        public CreateIPv6TranslatorResponse CreateIPv6TranslatorWithOptions(CreateIPv6TranslatorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIPv6TranslatorResponse>(DoRequest("CreateIPv6Translator", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateIPv6TranslatorResponse> CreateIPv6TranslatorWithOptionsAsync(CreateIPv6TranslatorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIPv6TranslatorResponse>(await DoRequestAsync("CreateIPv6Translator", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateIPv6TranslatorResponse CreateIPv6Translator(CreateIPv6TranslatorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateIPv6TranslatorWithOptions(request, runtime);
        }

        public async Task<CreateIPv6TranslatorResponse> CreateIPv6TranslatorAsync(CreateIPv6TranslatorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateIPv6TranslatorWithOptionsAsync(request, runtime);
        }

        public DescribeIPv6TranslatorsResponse DescribeIPv6TranslatorsWithOptions(DescribeIPv6TranslatorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorsResponse>(DoRequest("DescribeIPv6Translators", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIPv6TranslatorsResponse> DescribeIPv6TranslatorsWithOptionsAsync(DescribeIPv6TranslatorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorsResponse>(await DoRequestAsync("DescribeIPv6Translators", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIPv6TranslatorsResponse DescribeIPv6Translators(DescribeIPv6TranslatorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIPv6TranslatorsWithOptions(request, runtime);
        }

        public async Task<DescribeIPv6TranslatorsResponse> DescribeIPv6TranslatorsAsync(DescribeIPv6TranslatorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIPv6TranslatorsWithOptionsAsync(request, runtime);
        }

        public ModifyIPv6TranslatorAttributeResponse ModifyIPv6TranslatorAttributeWithOptions(ModifyIPv6TranslatorAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorAttributeResponse>(DoRequest("ModifyIPv6TranslatorAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIPv6TranslatorAttributeResponse> ModifyIPv6TranslatorAttributeWithOptionsAsync(ModifyIPv6TranslatorAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorAttributeResponse>(await DoRequestAsync("ModifyIPv6TranslatorAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIPv6TranslatorAttributeResponse ModifyIPv6TranslatorAttribute(ModifyIPv6TranslatorAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIPv6TranslatorAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyIPv6TranslatorAttributeResponse> ModifyIPv6TranslatorAttributeAsync(ModifyIPv6TranslatorAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIPv6TranslatorAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyIPv6TranslatorBandwidthResponse ModifyIPv6TranslatorBandwidthWithOptions(ModifyIPv6TranslatorBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorBandwidthResponse>(DoRequest("ModifyIPv6TranslatorBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIPv6TranslatorBandwidthResponse> ModifyIPv6TranslatorBandwidthWithOptionsAsync(ModifyIPv6TranslatorBandwidthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorBandwidthResponse>(await DoRequestAsync("ModifyIPv6TranslatorBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIPv6TranslatorBandwidthResponse ModifyIPv6TranslatorBandwidth(ModifyIPv6TranslatorBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIPv6TranslatorBandwidthWithOptions(request, runtime);
        }

        public async Task<ModifyIPv6TranslatorBandwidthResponse> ModifyIPv6TranslatorBandwidthAsync(ModifyIPv6TranslatorBandwidthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIPv6TranslatorBandwidthWithOptionsAsync(request, runtime);
        }

        public CreateIPv6TranslatorEntryResponse CreateIPv6TranslatorEntryWithOptions(CreateIPv6TranslatorEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIPv6TranslatorEntryResponse>(DoRequest("CreateIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateIPv6TranslatorEntryResponse> CreateIPv6TranslatorEntryWithOptionsAsync(CreateIPv6TranslatorEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateIPv6TranslatorEntryResponse>(await DoRequestAsync("CreateIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateIPv6TranslatorEntryResponse CreateIPv6TranslatorEntry(CreateIPv6TranslatorEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateIPv6TranslatorEntryWithOptions(request, runtime);
        }

        public async Task<CreateIPv6TranslatorEntryResponse> CreateIPv6TranslatorEntryAsync(CreateIPv6TranslatorEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateIPv6TranslatorEntryWithOptionsAsync(request, runtime);
        }

        public DeleteIPv6TranslatorEntryResponse DeleteIPv6TranslatorEntryWithOptions(DeleteIPv6TranslatorEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIPv6TranslatorEntryResponse>(DoRequest("DeleteIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteIPv6TranslatorEntryResponse> DeleteIPv6TranslatorEntryWithOptionsAsync(DeleteIPv6TranslatorEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIPv6TranslatorEntryResponse>(await DoRequestAsync("DeleteIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteIPv6TranslatorEntryResponse DeleteIPv6TranslatorEntry(DeleteIPv6TranslatorEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteIPv6TranslatorEntryWithOptions(request, runtime);
        }

        public async Task<DeleteIPv6TranslatorEntryResponse> DeleteIPv6TranslatorEntryAsync(DeleteIPv6TranslatorEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteIPv6TranslatorEntryWithOptionsAsync(request, runtime);
        }

        public ModifyIPv6TranslatorEntryResponse ModifyIPv6TranslatorEntryWithOptions(ModifyIPv6TranslatorEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorEntryResponse>(DoRequest("ModifyIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyIPv6TranslatorEntryResponse> ModifyIPv6TranslatorEntryWithOptionsAsync(ModifyIPv6TranslatorEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyIPv6TranslatorEntryResponse>(await DoRequestAsync("ModifyIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyIPv6TranslatorEntryResponse ModifyIPv6TranslatorEntry(ModifyIPv6TranslatorEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyIPv6TranslatorEntryWithOptions(request, runtime);
        }

        public async Task<ModifyIPv6TranslatorEntryResponse> ModifyIPv6TranslatorEntryAsync(ModifyIPv6TranslatorEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyIPv6TranslatorEntryWithOptionsAsync(request, runtime);
        }

        public DescribeIPv6TranslatorEntriesResponse DescribeIPv6TranslatorEntriesWithOptions(DescribeIPv6TranslatorEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorEntriesResponse>(DoRequest("DescribeIPv6TranslatorEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeIPv6TranslatorEntriesResponse> DescribeIPv6TranslatorEntriesWithOptionsAsync(DescribeIPv6TranslatorEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeIPv6TranslatorEntriesResponse>(await DoRequestAsync("DescribeIPv6TranslatorEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeIPv6TranslatorEntriesResponse DescribeIPv6TranslatorEntries(DescribeIPv6TranslatorEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeIPv6TranslatorEntriesWithOptions(request, runtime);
        }

        public async Task<DescribeIPv6TranslatorEntriesResponse> DescribeIPv6TranslatorEntriesAsync(DescribeIPv6TranslatorEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeIPv6TranslatorEntriesWithOptionsAsync(request, runtime);
        }

        public DeleteIPv6TranslatorResponse DeleteIPv6TranslatorWithOptions(DeleteIPv6TranslatorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIPv6TranslatorResponse>(DoRequest("DeleteIPv6Translator", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteIPv6TranslatorResponse> DeleteIPv6TranslatorWithOptionsAsync(DeleteIPv6TranslatorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteIPv6TranslatorResponse>(await DoRequestAsync("DeleteIPv6Translator", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteIPv6TranslatorResponse DeleteIPv6Translator(DeleteIPv6TranslatorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteIPv6TranslatorWithOptions(request, runtime);
        }

        public async Task<DeleteIPv6TranslatorResponse> DeleteIPv6TranslatorAsync(DeleteIPv6TranslatorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteIPv6TranslatorWithOptionsAsync(request, runtime);
        }

        public AllocateEipAddressProResponse AllocateEipAddressProWithOptions(AllocateEipAddressProRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipAddressProResponse>(DoRequest("AllocateEipAddressPro", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateEipAddressProResponse> AllocateEipAddressProWithOptionsAsync(AllocateEipAddressProRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipAddressProResponse>(await DoRequestAsync("AllocateEipAddressPro", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AllocateEipAddressProResponse AllocateEipAddressPro(AllocateEipAddressProRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateEipAddressProWithOptions(request, runtime);
        }

        public async Task<AllocateEipAddressProResponse> AllocateEipAddressProAsync(AllocateEipAddressProRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateEipAddressProWithOptionsAsync(request, runtime);
        }

        public DescribeHighDefinitionMonitorLogAttributeResponse DescribeHighDefinitionMonitorLogAttributeWithOptions(DescribeHighDefinitionMonitorLogAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHighDefinitionMonitorLogAttributeResponse>(DoRequest("DescribeHighDefinitionMonitorLogAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeHighDefinitionMonitorLogAttributeResponse> DescribeHighDefinitionMonitorLogAttributeWithOptionsAsync(DescribeHighDefinitionMonitorLogAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHighDefinitionMonitorLogAttributeResponse>(await DoRequestAsync("DescribeHighDefinitionMonitorLogAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeHighDefinitionMonitorLogAttributeResponse DescribeHighDefinitionMonitorLogAttribute(DescribeHighDefinitionMonitorLogAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeHighDefinitionMonitorLogAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeHighDefinitionMonitorLogAttributeResponse> DescribeHighDefinitionMonitorLogAttributeAsync(DescribeHighDefinitionMonitorLogAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeHighDefinitionMonitorLogAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyFlowLogAttributeResponse ModifyFlowLogAttributeWithOptions(ModifyFlowLogAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyFlowLogAttributeResponse>(DoRequest("ModifyFlowLogAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyFlowLogAttributeResponse> ModifyFlowLogAttributeWithOptionsAsync(ModifyFlowLogAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyFlowLogAttributeResponse>(await DoRequestAsync("ModifyFlowLogAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyFlowLogAttributeResponse ModifyFlowLogAttribute(ModifyFlowLogAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyFlowLogAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyFlowLogAttributeResponse> ModifyFlowLogAttributeAsync(ModifyFlowLogAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyFlowLogAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeFlowLogsResponse DescribeFlowLogsWithOptions(DescribeFlowLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFlowLogsResponse>(DoRequest("DescribeFlowLogs", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeFlowLogsResponse> DescribeFlowLogsWithOptionsAsync(DescribeFlowLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFlowLogsResponse>(await DoRequestAsync("DescribeFlowLogs", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeFlowLogsResponse DescribeFlowLogs(DescribeFlowLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeFlowLogsWithOptions(request, runtime);
        }

        public async Task<DescribeFlowLogsResponse> DescribeFlowLogsAsync(DescribeFlowLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeFlowLogsWithOptionsAsync(request, runtime);
        }

        public DeleteFlowLogResponse DeleteFlowLogWithOptions(DeleteFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFlowLogResponse>(DoRequest("DeleteFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteFlowLogResponse> DeleteFlowLogWithOptionsAsync(DeleteFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFlowLogResponse>(await DoRequestAsync("DeleteFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteFlowLogResponse DeleteFlowLog(DeleteFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteFlowLogWithOptions(request, runtime);
        }

        public async Task<DeleteFlowLogResponse> DeleteFlowLogAsync(DeleteFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteFlowLogWithOptionsAsync(request, runtime);
        }

        public DeactiveFlowLogResponse DeactiveFlowLogWithOptions(DeactiveFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeactiveFlowLogResponse>(DoRequest("DeactiveFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeactiveFlowLogResponse> DeactiveFlowLogWithOptionsAsync(DeactiveFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeactiveFlowLogResponse>(await DoRequestAsync("DeactiveFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeactiveFlowLogResponse DeactiveFlowLog(DeactiveFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeactiveFlowLogWithOptions(request, runtime);
        }

        public async Task<DeactiveFlowLogResponse> DeactiveFlowLogAsync(DeactiveFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeactiveFlowLogWithOptionsAsync(request, runtime);
        }

        public CreateFlowLogResponse CreateFlowLogWithOptions(CreateFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFlowLogResponse>(DoRequest("CreateFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateFlowLogResponse> CreateFlowLogWithOptionsAsync(CreateFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFlowLogResponse>(await DoRequestAsync("CreateFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateFlowLogResponse CreateFlowLog(CreateFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateFlowLogWithOptions(request, runtime);
        }

        public async Task<CreateFlowLogResponse> CreateFlowLogAsync(CreateFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateFlowLogWithOptionsAsync(request, runtime);
        }

        public ActiveFlowLogResponse ActiveFlowLogWithOptions(ActiveFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ActiveFlowLogResponse>(DoRequest("ActiveFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ActiveFlowLogResponse> ActiveFlowLogWithOptionsAsync(ActiveFlowLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ActiveFlowLogResponse>(await DoRequestAsync("ActiveFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ActiveFlowLogResponse ActiveFlowLog(ActiveFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ActiveFlowLogWithOptions(request, runtime);
        }

        public async Task<ActiveFlowLogResponse> ActiveFlowLogAsync(ActiveFlowLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ActiveFlowLogWithOptionsAsync(request, runtime);
        }

        public UnassociateRouteTableResponse UnassociateRouteTableWithOptions(UnassociateRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateRouteTableResponse>(DoRequest("UnassociateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateRouteTableResponse> UnassociateRouteTableWithOptionsAsync(UnassociateRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateRouteTableResponse>(await DoRequestAsync("UnassociateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UnassociateRouteTableResponse UnassociateRouteTable(UnassociateRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassociateRouteTableWithOptions(request, runtime);
        }

        public async Task<UnassociateRouteTableResponse> UnassociateRouteTableAsync(UnassociateRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassociateRouteTableWithOptionsAsync(request, runtime);
        }

        public DeleteRouteTableResponse DeleteRouteTableWithOptions(DeleteRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouteTableResponse>(DoRequest("DeleteRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRouteTableResponse> DeleteRouteTableWithOptionsAsync(DeleteRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouteTableResponse>(await DoRequestAsync("DeleteRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteRouteTableResponse DeleteRouteTable(DeleteRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRouteTableWithOptions(request, runtime);
        }

        public async Task<DeleteRouteTableResponse> DeleteRouteTableAsync(DeleteRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRouteTableWithOptionsAsync(request, runtime);
        }

        public CreateRouteTableResponse CreateRouteTableWithOptions(CreateRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouteTableResponse>(DoRequest("CreateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRouteTableResponse> CreateRouteTableWithOptionsAsync(CreateRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouteTableResponse>(await DoRequestAsync("CreateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateRouteTableResponse CreateRouteTable(CreateRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRouteTableWithOptions(request, runtime);
        }

        public async Task<CreateRouteTableResponse> CreateRouteTableAsync(CreateRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRouteTableWithOptionsAsync(request, runtime);
        }

        public AssociateRouteTableResponse AssociateRouteTableWithOptions(AssociateRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateRouteTableResponse>(DoRequest("AssociateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateRouteTableResponse> AssociateRouteTableWithOptionsAsync(AssociateRouteTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateRouteTableResponse>(await DoRequestAsync("AssociateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AssociateRouteTableResponse AssociateRouteTable(AssociateRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssociateRouteTableWithOptions(request, runtime);
        }

        public async Task<AssociateRouteTableResponse> AssociateRouteTableAsync(AssociateRouteTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssociateRouteTableWithOptionsAsync(request, runtime);
        }

        public CreateVpnGatewayResponse CreateVpnGatewayWithOptions(CreateVpnGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnGatewayResponse>(DoRequest("CreateVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVpnGatewayResponse> CreateVpnGatewayWithOptionsAsync(CreateVpnGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnGatewayResponse>(await DoRequestAsync("CreateVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateVpnGatewayResponse CreateVpnGateway(CreateVpnGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVpnGatewayWithOptions(request, runtime);
        }

        public async Task<CreateVpnGatewayResponse> CreateVpnGatewayAsync(CreateVpnGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVpnGatewayWithOptionsAsync(request, runtime);
        }

        public MoveResourceGroupResponse MoveResourceGroupWithOptions(MoveResourceGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MoveResourceGroupResponse>(DoRequest("MoveResourceGroup", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<MoveResourceGroupResponse> MoveResourceGroupWithOptionsAsync(MoveResourceGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MoveResourceGroupResponse>(await DoRequestAsync("MoveResourceGroup", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public MoveResourceGroupResponse MoveResourceGroup(MoveResourceGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return MoveResourceGroupWithOptions(request, runtime);
        }

        public async Task<MoveResourceGroupResponse> MoveResourceGroupAsync(MoveResourceGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await MoveResourceGroupWithOptionsAsync(request, runtime);
        }

        public RevokeInstanceFromCenResponse RevokeInstanceFromCenWithOptions(RevokeInstanceFromCenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeInstanceFromCenResponse>(DoRequest("RevokeInstanceFromCen", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RevokeInstanceFromCenResponse> RevokeInstanceFromCenWithOptionsAsync(RevokeInstanceFromCenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RevokeInstanceFromCenResponse>(await DoRequestAsync("RevokeInstanceFromCen", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public RevokeInstanceFromCenResponse RevokeInstanceFromCen(RevokeInstanceFromCenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RevokeInstanceFromCenWithOptions(request, runtime);
        }

        public async Task<RevokeInstanceFromCenResponse> RevokeInstanceFromCenAsync(RevokeInstanceFromCenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RevokeInstanceFromCenWithOptionsAsync(request, runtime);
        }

        public GrantInstanceToCenResponse GrantInstanceToCenWithOptions(GrantInstanceToCenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantInstanceToCenResponse>(DoRequest("GrantInstanceToCen", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GrantInstanceToCenResponse> GrantInstanceToCenWithOptionsAsync(GrantInstanceToCenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GrantInstanceToCenResponse>(await DoRequestAsync("GrantInstanceToCen", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public GrantInstanceToCenResponse GrantInstanceToCen(GrantInstanceToCenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GrantInstanceToCenWithOptions(request, runtime);
        }

        public async Task<GrantInstanceToCenResponse> GrantInstanceToCenAsync(GrantInstanceToCenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GrantInstanceToCenWithOptionsAsync(request, runtime);
        }

        public DescribeGrantRulesToCenResponse DescribeGrantRulesToCenWithOptions(DescribeGrantRulesToCenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGrantRulesToCenResponse>(DoRequest("DescribeGrantRulesToCen", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGrantRulesToCenResponse> DescribeGrantRulesToCenWithOptionsAsync(DescribeGrantRulesToCenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGrantRulesToCenResponse>(await DoRequestAsync("DescribeGrantRulesToCen", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGrantRulesToCenResponse DescribeGrantRulesToCen(DescribeGrantRulesToCenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGrantRulesToCenWithOptions(request, runtime);
        }

        public async Task<DescribeGrantRulesToCenResponse> DescribeGrantRulesToCenAsync(DescribeGrantRulesToCenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGrantRulesToCenWithOptionsAsync(request, runtime);
        }

        public ModifySslVpnServerResponse ModifySslVpnServerWithOptions(ModifySslVpnServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySslVpnServerResponse>(DoRequest("ModifySslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySslVpnServerResponse> ModifySslVpnServerWithOptionsAsync(ModifySslVpnServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySslVpnServerResponse>(await DoRequestAsync("ModifySslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifySslVpnServerResponse ModifySslVpnServer(ModifySslVpnServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySslVpnServerWithOptions(request, runtime);
        }

        public async Task<ModifySslVpnServerResponse> ModifySslVpnServerAsync(ModifySslVpnServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySslVpnServerWithOptionsAsync(request, runtime);
        }

        public ModifySslVpnClientCertResponse ModifySslVpnClientCertWithOptions(ModifySslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySslVpnClientCertResponse>(DoRequest("ModifySslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySslVpnClientCertResponse> ModifySslVpnClientCertWithOptionsAsync(ModifySslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySslVpnClientCertResponse>(await DoRequestAsync("ModifySslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifySslVpnClientCertResponse ModifySslVpnClientCert(ModifySslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySslVpnClientCertWithOptions(request, runtime);
        }

        public async Task<ModifySslVpnClientCertResponse> ModifySslVpnClientCertAsync(ModifySslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySslVpnClientCertWithOptionsAsync(request, runtime);
        }

        public DescribeSslVpnServersResponse DescribeSslVpnServersWithOptions(DescribeSslVpnServersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSslVpnServersResponse>(DoRequest("DescribeSslVpnServers", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSslVpnServersResponse> DescribeSslVpnServersWithOptionsAsync(DescribeSslVpnServersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSslVpnServersResponse>(await DoRequestAsync("DescribeSslVpnServers", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSslVpnServersResponse DescribeSslVpnServers(DescribeSslVpnServersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSslVpnServersWithOptions(request, runtime);
        }

        public async Task<DescribeSslVpnServersResponse> DescribeSslVpnServersAsync(DescribeSslVpnServersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSslVpnServersWithOptionsAsync(request, runtime);
        }

        public DescribeSslVpnClientCertsResponse DescribeSslVpnClientCertsWithOptions(DescribeSslVpnClientCertsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSslVpnClientCertsResponse>(DoRequest("DescribeSslVpnClientCerts", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSslVpnClientCertsResponse> DescribeSslVpnClientCertsWithOptionsAsync(DescribeSslVpnClientCertsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSslVpnClientCertsResponse>(await DoRequestAsync("DescribeSslVpnClientCerts", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSslVpnClientCertsResponse DescribeSslVpnClientCerts(DescribeSslVpnClientCertsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSslVpnClientCertsWithOptions(request, runtime);
        }

        public async Task<DescribeSslVpnClientCertsResponse> DescribeSslVpnClientCertsAsync(DescribeSslVpnClientCertsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSslVpnClientCertsWithOptionsAsync(request, runtime);
        }

        public DescribeSslVpnClientCertResponse DescribeSslVpnClientCertWithOptions(DescribeSslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSslVpnClientCertResponse>(DoRequest("DescribeSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSslVpnClientCertResponse> DescribeSslVpnClientCertWithOptionsAsync(DescribeSslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSslVpnClientCertResponse>(await DoRequestAsync("DescribeSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSslVpnClientCertResponse DescribeSslVpnClientCert(DescribeSslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSslVpnClientCertWithOptions(request, runtime);
        }

        public async Task<DescribeSslVpnClientCertResponse> DescribeSslVpnClientCertAsync(DescribeSslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSslVpnClientCertWithOptionsAsync(request, runtime);
        }

        public DeleteSslVpnServerResponse DeleteSslVpnServerWithOptions(DeleteSslVpnServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSslVpnServerResponse>(DoRequest("DeleteSslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSslVpnServerResponse> DeleteSslVpnServerWithOptionsAsync(DeleteSslVpnServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSslVpnServerResponse>(await DoRequestAsync("DeleteSslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSslVpnServerResponse DeleteSslVpnServer(DeleteSslVpnServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSslVpnServerWithOptions(request, runtime);
        }

        public async Task<DeleteSslVpnServerResponse> DeleteSslVpnServerAsync(DeleteSslVpnServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSslVpnServerWithOptionsAsync(request, runtime);
        }

        public DeleteSslVpnClientCertResponse DeleteSslVpnClientCertWithOptions(DeleteSslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSslVpnClientCertResponse>(DoRequest("DeleteSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSslVpnClientCertResponse> DeleteSslVpnClientCertWithOptionsAsync(DeleteSslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSslVpnClientCertResponse>(await DoRequestAsync("DeleteSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSslVpnClientCertResponse DeleteSslVpnClientCert(DeleteSslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSslVpnClientCertWithOptions(request, runtime);
        }

        public async Task<DeleteSslVpnClientCertResponse> DeleteSslVpnClientCertAsync(DeleteSslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSslVpnClientCertWithOptionsAsync(request, runtime);
        }

        public CreateSslVpnServerResponse CreateSslVpnServerWithOptions(CreateSslVpnServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSslVpnServerResponse>(DoRequest("CreateSslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSslVpnServerResponse> CreateSslVpnServerWithOptionsAsync(CreateSslVpnServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSslVpnServerResponse>(await DoRequestAsync("CreateSslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateSslVpnServerResponse CreateSslVpnServer(CreateSslVpnServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSslVpnServerWithOptions(request, runtime);
        }

        public async Task<CreateSslVpnServerResponse> CreateSslVpnServerAsync(CreateSslVpnServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSslVpnServerWithOptionsAsync(request, runtime);
        }

        public CreateSslVpnClientCertResponse CreateSslVpnClientCertWithOptions(CreateSslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSslVpnClientCertResponse>(DoRequest("CreateSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSslVpnClientCertResponse> CreateSslVpnClientCertWithOptionsAsync(CreateSslVpnClientCertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSslVpnClientCertResponse>(await DoRequestAsync("CreateSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateSslVpnClientCertResponse CreateSslVpnClientCert(CreateSslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSslVpnClientCertWithOptions(request, runtime);
        }

        public async Task<CreateSslVpnClientCertResponse> CreateSslVpnClientCertAsync(CreateSslVpnClientCertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSslVpnClientCertWithOptionsAsync(request, runtime);
        }

        public RemoveGlobalAccelerationInstanceIpResponse RemoveGlobalAccelerationInstanceIpWithOptions(RemoveGlobalAccelerationInstanceIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveGlobalAccelerationInstanceIpResponse>(DoRequest("RemoveGlobalAccelerationInstanceIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveGlobalAccelerationInstanceIpResponse> RemoveGlobalAccelerationInstanceIpWithOptionsAsync(RemoveGlobalAccelerationInstanceIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveGlobalAccelerationInstanceIpResponse>(await DoRequestAsync("RemoveGlobalAccelerationInstanceIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public RemoveGlobalAccelerationInstanceIpResponse RemoveGlobalAccelerationInstanceIp(RemoveGlobalAccelerationInstanceIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveGlobalAccelerationInstanceIpWithOptions(request, runtime);
        }

        public async Task<RemoveGlobalAccelerationInstanceIpResponse> RemoveGlobalAccelerationInstanceIpAsync(RemoveGlobalAccelerationInstanceIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveGlobalAccelerationInstanceIpWithOptionsAsync(request, runtime);
        }

        public AddGlobalAccelerationInstanceIpResponse AddGlobalAccelerationInstanceIpWithOptions(AddGlobalAccelerationInstanceIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGlobalAccelerationInstanceIpResponse>(DoRequest("AddGlobalAccelerationInstanceIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddGlobalAccelerationInstanceIpResponse> AddGlobalAccelerationInstanceIpWithOptionsAsync(AddGlobalAccelerationInstanceIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGlobalAccelerationInstanceIpResponse>(await DoRequestAsync("AddGlobalAccelerationInstanceIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AddGlobalAccelerationInstanceIpResponse AddGlobalAccelerationInstanceIp(AddGlobalAccelerationInstanceIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddGlobalAccelerationInstanceIpWithOptions(request, runtime);
        }

        public async Task<AddGlobalAccelerationInstanceIpResponse> AddGlobalAccelerationInstanceIpAsync(AddGlobalAccelerationInstanceIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddGlobalAccelerationInstanceIpWithOptionsAsync(request, runtime);
        }

        public DescribeRouteTableListResponse DescribeRouteTableListWithOptions(DescribeRouteTableListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteTableListResponse>(DoRequest("DescribeRouteTableList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRouteTableListResponse> DescribeRouteTableListWithOptionsAsync(DescribeRouteTableListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteTableListResponse>(await DoRequestAsync("DescribeRouteTableList", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRouteTableListResponse DescribeRouteTableList(DescribeRouteTableListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRouteTableListWithOptions(request, runtime);
        }

        public async Task<DescribeRouteTableListResponse> DescribeRouteTableListAsync(DescribeRouteTableListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRouteTableListWithOptionsAsync(request, runtime);
        }

        public ModifyRouteTableAttributesResponse ModifyRouteTableAttributesWithOptions(ModifyRouteTableAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouteTableAttributesResponse>(DoRequest("ModifyRouteTableAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyRouteTableAttributesResponse> ModifyRouteTableAttributesWithOptionsAsync(ModifyRouteTableAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouteTableAttributesResponse>(await DoRequestAsync("ModifyRouteTableAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyRouteTableAttributesResponse ModifyRouteTableAttributes(ModifyRouteTableAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyRouteTableAttributesWithOptions(request, runtime);
        }

        public async Task<ModifyRouteTableAttributesResponse> ModifyRouteTableAttributesAsync(ModifyRouteTableAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyRouteTableAttributesWithOptionsAsync(request, runtime);
        }

        public DescribeBgpNetworksResponse DescribeBgpNetworksWithOptions(DescribeBgpNetworksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBgpNetworksResponse>(DoRequest("DescribeBgpNetworks", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBgpNetworksResponse> DescribeBgpNetworksWithOptionsAsync(DescribeBgpNetworksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBgpNetworksResponse>(await DoRequestAsync("DescribeBgpNetworks", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBgpNetworksResponse DescribeBgpNetworks(DescribeBgpNetworksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBgpNetworksWithOptions(request, runtime);
        }

        public async Task<DescribeBgpNetworksResponse> DescribeBgpNetworksAsync(DescribeBgpNetworksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBgpNetworksWithOptionsAsync(request, runtime);
        }

        public ModifyCommonBandwidthPackagePayTypeResponse ModifyCommonBandwidthPackagePayTypeWithOptions(ModifyCommonBandwidthPackagePayTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackagePayTypeResponse>(DoRequest("ModifyCommonBandwidthPackagePayType", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCommonBandwidthPackagePayTypeResponse> ModifyCommonBandwidthPackagePayTypeWithOptionsAsync(ModifyCommonBandwidthPackagePayTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackagePayTypeResponse>(await DoRequestAsync("ModifyCommonBandwidthPackagePayType", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCommonBandwidthPackagePayTypeResponse ModifyCommonBandwidthPackagePayType(ModifyCommonBandwidthPackagePayTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCommonBandwidthPackagePayTypeWithOptions(request, runtime);
        }

        public async Task<ModifyCommonBandwidthPackagePayTypeResponse> ModifyCommonBandwidthPackagePayTypeAsync(ModifyCommonBandwidthPackagePayTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCommonBandwidthPackagePayTypeWithOptionsAsync(request, runtime);
        }

        public UnassociateGlobalAccelerationInstanceResponse UnassociateGlobalAccelerationInstanceWithOptions(UnassociateGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateGlobalAccelerationInstanceResponse>(DoRequest("UnassociateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateGlobalAccelerationInstanceResponse> UnassociateGlobalAccelerationInstanceWithOptionsAsync(UnassociateGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateGlobalAccelerationInstanceResponse>(await DoRequestAsync("UnassociateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UnassociateGlobalAccelerationInstanceResponse UnassociateGlobalAccelerationInstance(UnassociateGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassociateGlobalAccelerationInstanceWithOptions(request, runtime);
        }

        public async Task<UnassociateGlobalAccelerationInstanceResponse> UnassociateGlobalAccelerationInstanceAsync(UnassociateGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassociateGlobalAccelerationInstanceWithOptionsAsync(request, runtime);
        }

        public ModifyGlobalAccelerationInstanceSpecResponse ModifyGlobalAccelerationInstanceSpecWithOptions(ModifyGlobalAccelerationInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyGlobalAccelerationInstanceSpecResponse>(DoRequest("ModifyGlobalAccelerationInstanceSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyGlobalAccelerationInstanceSpecResponse> ModifyGlobalAccelerationInstanceSpecWithOptionsAsync(ModifyGlobalAccelerationInstanceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyGlobalAccelerationInstanceSpecResponse>(await DoRequestAsync("ModifyGlobalAccelerationInstanceSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyGlobalAccelerationInstanceSpecResponse ModifyGlobalAccelerationInstanceSpec(ModifyGlobalAccelerationInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyGlobalAccelerationInstanceSpecWithOptions(request, runtime);
        }

        public async Task<ModifyGlobalAccelerationInstanceSpecResponse> ModifyGlobalAccelerationInstanceSpecAsync(ModifyGlobalAccelerationInstanceSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyGlobalAccelerationInstanceSpecWithOptionsAsync(request, runtime);
        }

        public ModifyGlobalAccelerationInstanceAttributesResponse ModifyGlobalAccelerationInstanceAttributesWithOptions(ModifyGlobalAccelerationInstanceAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyGlobalAccelerationInstanceAttributesResponse>(DoRequest("ModifyGlobalAccelerationInstanceAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyGlobalAccelerationInstanceAttributesResponse> ModifyGlobalAccelerationInstanceAttributesWithOptionsAsync(ModifyGlobalAccelerationInstanceAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyGlobalAccelerationInstanceAttributesResponse>(await DoRequestAsync("ModifyGlobalAccelerationInstanceAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyGlobalAccelerationInstanceAttributesResponse ModifyGlobalAccelerationInstanceAttributes(ModifyGlobalAccelerationInstanceAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyGlobalAccelerationInstanceAttributesWithOptions(request, runtime);
        }

        public async Task<ModifyGlobalAccelerationInstanceAttributesResponse> ModifyGlobalAccelerationInstanceAttributesAsync(ModifyGlobalAccelerationInstanceAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyGlobalAccelerationInstanceAttributesWithOptionsAsync(request, runtime);
        }

        public DescribeServerRelatedGlobalAccelerationInstancesResponse DescribeServerRelatedGlobalAccelerationInstancesWithOptions(DescribeServerRelatedGlobalAccelerationInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeServerRelatedGlobalAccelerationInstancesResponse>(DoRequest("DescribeServerRelatedGlobalAccelerationInstances", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeServerRelatedGlobalAccelerationInstancesResponse> DescribeServerRelatedGlobalAccelerationInstancesWithOptionsAsync(DescribeServerRelatedGlobalAccelerationInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeServerRelatedGlobalAccelerationInstancesResponse>(await DoRequestAsync("DescribeServerRelatedGlobalAccelerationInstances", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeServerRelatedGlobalAccelerationInstancesResponse DescribeServerRelatedGlobalAccelerationInstances(DescribeServerRelatedGlobalAccelerationInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeServerRelatedGlobalAccelerationInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeServerRelatedGlobalAccelerationInstancesResponse> DescribeServerRelatedGlobalAccelerationInstancesAsync(DescribeServerRelatedGlobalAccelerationInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeServerRelatedGlobalAccelerationInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeGlobalAccelerationInstancesResponse DescribeGlobalAccelerationInstancesWithOptions(DescribeGlobalAccelerationInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGlobalAccelerationInstancesResponse>(DoRequest("DescribeGlobalAccelerationInstances", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGlobalAccelerationInstancesResponse> DescribeGlobalAccelerationInstancesWithOptionsAsync(DescribeGlobalAccelerationInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGlobalAccelerationInstancesResponse>(await DoRequestAsync("DescribeGlobalAccelerationInstances", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGlobalAccelerationInstancesResponse DescribeGlobalAccelerationInstances(DescribeGlobalAccelerationInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGlobalAccelerationInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeGlobalAccelerationInstancesResponse> DescribeGlobalAccelerationInstancesAsync(DescribeGlobalAccelerationInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGlobalAccelerationInstancesWithOptionsAsync(request, runtime);
        }

        public DeleteGlobalAccelerationInstanceResponse DeleteGlobalAccelerationInstanceWithOptions(DeleteGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGlobalAccelerationInstanceResponse>(DoRequest("DeleteGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteGlobalAccelerationInstanceResponse> DeleteGlobalAccelerationInstanceWithOptionsAsync(DeleteGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGlobalAccelerationInstanceResponse>(await DoRequestAsync("DeleteGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteGlobalAccelerationInstanceResponse DeleteGlobalAccelerationInstance(DeleteGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteGlobalAccelerationInstanceWithOptions(request, runtime);
        }

        public async Task<DeleteGlobalAccelerationInstanceResponse> DeleteGlobalAccelerationInstanceAsync(DeleteGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteGlobalAccelerationInstanceWithOptionsAsync(request, runtime);
        }

        public CreateGlobalAccelerationInstanceResponse CreateGlobalAccelerationInstanceWithOptions(CreateGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGlobalAccelerationInstanceResponse>(DoRequest("CreateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateGlobalAccelerationInstanceResponse> CreateGlobalAccelerationInstanceWithOptionsAsync(CreateGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGlobalAccelerationInstanceResponse>(await DoRequestAsync("CreateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateGlobalAccelerationInstanceResponse CreateGlobalAccelerationInstance(CreateGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateGlobalAccelerationInstanceWithOptions(request, runtime);
        }

        public async Task<CreateGlobalAccelerationInstanceResponse> CreateGlobalAccelerationInstanceAsync(CreateGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateGlobalAccelerationInstanceWithOptionsAsync(request, runtime);
        }

        public AssociateGlobalAccelerationInstanceResponse AssociateGlobalAccelerationInstanceWithOptions(AssociateGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateGlobalAccelerationInstanceResponse>(DoRequest("AssociateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateGlobalAccelerationInstanceResponse> AssociateGlobalAccelerationInstanceWithOptionsAsync(AssociateGlobalAccelerationInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateGlobalAccelerationInstanceResponse>(await DoRequestAsync("AssociateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AssociateGlobalAccelerationInstanceResponse AssociateGlobalAccelerationInstance(AssociateGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssociateGlobalAccelerationInstanceWithOptions(request, runtime);
        }

        public async Task<AssociateGlobalAccelerationInstanceResponse> AssociateGlobalAccelerationInstanceAsync(AssociateGlobalAccelerationInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssociateGlobalAccelerationInstanceWithOptionsAsync(request, runtime);
        }

        public DescribeVSwitchAttributesResponse DescribeVSwitchAttributesWithOptions(DescribeVSwitchAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVSwitchAttributesResponse>(DoRequest("DescribeVSwitchAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVSwitchAttributesResponse> DescribeVSwitchAttributesWithOptionsAsync(DescribeVSwitchAttributesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVSwitchAttributesResponse>(await DoRequestAsync("DescribeVSwitchAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVSwitchAttributesResponse DescribeVSwitchAttributes(DescribeVSwitchAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVSwitchAttributesWithOptions(request, runtime);
        }

        public async Task<DescribeVSwitchAttributesResponse> DescribeVSwitchAttributesAsync(DescribeVSwitchAttributesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVSwitchAttributesWithOptionsAsync(request, runtime);
        }

        public RemoveCommonBandwidthPackageIpResponse RemoveCommonBandwidthPackageIpWithOptions(RemoveCommonBandwidthPackageIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveCommonBandwidthPackageIpResponse>(DoRequest("RemoveCommonBandwidthPackageIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveCommonBandwidthPackageIpResponse> RemoveCommonBandwidthPackageIpWithOptionsAsync(RemoveCommonBandwidthPackageIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveCommonBandwidthPackageIpResponse>(await DoRequestAsync("RemoveCommonBandwidthPackageIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public RemoveCommonBandwidthPackageIpResponse RemoveCommonBandwidthPackageIp(RemoveCommonBandwidthPackageIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveCommonBandwidthPackageIpWithOptions(request, runtime);
        }

        public async Task<RemoveCommonBandwidthPackageIpResponse> RemoveCommonBandwidthPackageIpAsync(RemoveCommonBandwidthPackageIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveCommonBandwidthPackageIpWithOptionsAsync(request, runtime);
        }

        public ModifyCommonBandwidthPackageSpecResponse ModifyCommonBandwidthPackageSpecWithOptions(ModifyCommonBandwidthPackageSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackageSpecResponse>(DoRequest("ModifyCommonBandwidthPackageSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCommonBandwidthPackageSpecResponse> ModifyCommonBandwidthPackageSpecWithOptionsAsync(ModifyCommonBandwidthPackageSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackageSpecResponse>(await DoRequestAsync("ModifyCommonBandwidthPackageSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCommonBandwidthPackageSpecResponse ModifyCommonBandwidthPackageSpec(ModifyCommonBandwidthPackageSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCommonBandwidthPackageSpecWithOptions(request, runtime);
        }

        public async Task<ModifyCommonBandwidthPackageSpecResponse> ModifyCommonBandwidthPackageSpecAsync(ModifyCommonBandwidthPackageSpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCommonBandwidthPackageSpecWithOptionsAsync(request, runtime);
        }

        public ModifyCommonBandwidthPackageAttributeResponse ModifyCommonBandwidthPackageAttributeWithOptions(ModifyCommonBandwidthPackageAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackageAttributeResponse>(DoRequest("ModifyCommonBandwidthPackageAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCommonBandwidthPackageAttributeResponse> ModifyCommonBandwidthPackageAttributeWithOptionsAsync(ModifyCommonBandwidthPackageAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCommonBandwidthPackageAttributeResponse>(await DoRequestAsync("ModifyCommonBandwidthPackageAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCommonBandwidthPackageAttributeResponse ModifyCommonBandwidthPackageAttribute(ModifyCommonBandwidthPackageAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCommonBandwidthPackageAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyCommonBandwidthPackageAttributeResponse> ModifyCommonBandwidthPackageAttributeAsync(ModifyCommonBandwidthPackageAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCommonBandwidthPackageAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeCommonBandwidthPackagesResponse DescribeCommonBandwidthPackagesWithOptions(DescribeCommonBandwidthPackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCommonBandwidthPackagesResponse>(DoRequest("DescribeCommonBandwidthPackages", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCommonBandwidthPackagesResponse> DescribeCommonBandwidthPackagesWithOptionsAsync(DescribeCommonBandwidthPackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCommonBandwidthPackagesResponse>(await DoRequestAsync("DescribeCommonBandwidthPackages", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCommonBandwidthPackagesResponse DescribeCommonBandwidthPackages(DescribeCommonBandwidthPackagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCommonBandwidthPackagesWithOptions(request, runtime);
        }

        public async Task<DescribeCommonBandwidthPackagesResponse> DescribeCommonBandwidthPackagesAsync(DescribeCommonBandwidthPackagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCommonBandwidthPackagesWithOptionsAsync(request, runtime);
        }

        public DeleteCommonBandwidthPackageResponse DeleteCommonBandwidthPackageWithOptions(DeleteCommonBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCommonBandwidthPackageResponse>(DoRequest("DeleteCommonBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteCommonBandwidthPackageResponse> DeleteCommonBandwidthPackageWithOptionsAsync(DeleteCommonBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCommonBandwidthPackageResponse>(await DoRequestAsync("DeleteCommonBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteCommonBandwidthPackageResponse DeleteCommonBandwidthPackage(DeleteCommonBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteCommonBandwidthPackageWithOptions(request, runtime);
        }

        public async Task<DeleteCommonBandwidthPackageResponse> DeleteCommonBandwidthPackageAsync(DeleteCommonBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteCommonBandwidthPackageWithOptionsAsync(request, runtime);
        }

        public CreateCommonBandwidthPackageResponse CreateCommonBandwidthPackageWithOptions(CreateCommonBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCommonBandwidthPackageResponse>(DoRequest("CreateCommonBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateCommonBandwidthPackageResponse> CreateCommonBandwidthPackageWithOptionsAsync(CreateCommonBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCommonBandwidthPackageResponse>(await DoRequestAsync("CreateCommonBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateCommonBandwidthPackageResponse CreateCommonBandwidthPackage(CreateCommonBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateCommonBandwidthPackageWithOptions(request, runtime);
        }

        public async Task<CreateCommonBandwidthPackageResponse> CreateCommonBandwidthPackageAsync(CreateCommonBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateCommonBandwidthPackageWithOptionsAsync(request, runtime);
        }

        public AddCommonBandwidthPackageIpResponse AddCommonBandwidthPackageIpWithOptions(AddCommonBandwidthPackageIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddCommonBandwidthPackageIpResponse>(DoRequest("AddCommonBandwidthPackageIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddCommonBandwidthPackageIpResponse> AddCommonBandwidthPackageIpWithOptionsAsync(AddCommonBandwidthPackageIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddCommonBandwidthPackageIpResponse>(await DoRequestAsync("AddCommonBandwidthPackageIp", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AddCommonBandwidthPackageIpResponse AddCommonBandwidthPackageIp(AddCommonBandwidthPackageIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddCommonBandwidthPackageIpWithOptions(request, runtime);
        }

        public async Task<AddCommonBandwidthPackageIpResponse> AddCommonBandwidthPackageIpAsync(AddCommonBandwidthPackageIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddCommonBandwidthPackageIpWithOptionsAsync(request, runtime);
        }

        public ModifyVpnGatewayAttributeResponse ModifyVpnGatewayAttributeWithOptions(ModifyVpnGatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnGatewayAttributeResponse>(DoRequest("ModifyVpnGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVpnGatewayAttributeResponse> ModifyVpnGatewayAttributeWithOptionsAsync(ModifyVpnGatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnGatewayAttributeResponse>(await DoRequestAsync("ModifyVpnGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVpnGatewayAttributeResponse ModifyVpnGatewayAttribute(ModifyVpnGatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVpnGatewayAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyVpnGatewayAttributeResponse> ModifyVpnGatewayAttributeAsync(ModifyVpnGatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVpnGatewayAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyVpnConnectionAttributeResponse ModifyVpnConnectionAttributeWithOptions(ModifyVpnConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnConnectionAttributeResponse>(DoRequest("ModifyVpnConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVpnConnectionAttributeResponse> ModifyVpnConnectionAttributeWithOptionsAsync(ModifyVpnConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpnConnectionAttributeResponse>(await DoRequestAsync("ModifyVpnConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyVpnConnectionAttributeResponse ModifyVpnConnectionAttribute(ModifyVpnConnectionAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyVpnConnectionAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyVpnConnectionAttributeResponse> ModifyVpnConnectionAttributeAsync(ModifyVpnConnectionAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyVpnConnectionAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyCustomerGatewayAttributeResponse ModifyCustomerGatewayAttributeWithOptions(ModifyCustomerGatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCustomerGatewayAttributeResponse>(DoRequest("ModifyCustomerGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCustomerGatewayAttributeResponse> ModifyCustomerGatewayAttributeWithOptionsAsync(ModifyCustomerGatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCustomerGatewayAttributeResponse>(await DoRequestAsync("ModifyCustomerGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCustomerGatewayAttributeResponse ModifyCustomerGatewayAttribute(ModifyCustomerGatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCustomerGatewayAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyCustomerGatewayAttributeResponse> ModifyCustomerGatewayAttributeAsync(ModifyCustomerGatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCustomerGatewayAttributeWithOptionsAsync(request, runtime);
        }

        public DownloadVpnConnectionConfigResponse DownloadVpnConnectionConfigWithOptions(DownloadVpnConnectionConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DownloadVpnConnectionConfigResponse>(DoRequest("DownloadVpnConnectionConfig", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DownloadVpnConnectionConfigResponse> DownloadVpnConnectionConfigWithOptionsAsync(DownloadVpnConnectionConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DownloadVpnConnectionConfigResponse>(await DoRequestAsync("DownloadVpnConnectionConfig", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DownloadVpnConnectionConfigResponse DownloadVpnConnectionConfig(DownloadVpnConnectionConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DownloadVpnConnectionConfigWithOptions(request, runtime);
        }

        public async Task<DownloadVpnConnectionConfigResponse> DownloadVpnConnectionConfigAsync(DownloadVpnConnectionConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DownloadVpnConnectionConfigWithOptionsAsync(request, runtime);
        }

        public DescribeVpnGatewaysResponse DescribeVpnGatewaysWithOptions(DescribeVpnGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnGatewaysResponse>(DoRequest("DescribeVpnGateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpnGatewaysResponse> DescribeVpnGatewaysWithOptionsAsync(DescribeVpnGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnGatewaysResponse>(await DoRequestAsync("DescribeVpnGateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpnGatewaysResponse DescribeVpnGateways(DescribeVpnGatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpnGatewaysWithOptions(request, runtime);
        }

        public async Task<DescribeVpnGatewaysResponse> DescribeVpnGatewaysAsync(DescribeVpnGatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpnGatewaysWithOptionsAsync(request, runtime);
        }

        public DescribeVpnGatewayResponse DescribeVpnGatewayWithOptions(DescribeVpnGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnGatewayResponse>(DoRequest("DescribeVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpnGatewayResponse> DescribeVpnGatewayWithOptionsAsync(DescribeVpnGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnGatewayResponse>(await DoRequestAsync("DescribeVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpnGatewayResponse DescribeVpnGateway(DescribeVpnGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpnGatewayWithOptions(request, runtime);
        }

        public async Task<DescribeVpnGatewayResponse> DescribeVpnGatewayAsync(DescribeVpnGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpnGatewayWithOptionsAsync(request, runtime);
        }

        public DescribeVpnConnectionsResponse DescribeVpnConnectionsWithOptions(DescribeVpnConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnConnectionsResponse>(DoRequest("DescribeVpnConnections", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpnConnectionsResponse> DescribeVpnConnectionsWithOptionsAsync(DescribeVpnConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnConnectionsResponse>(await DoRequestAsync("DescribeVpnConnections", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpnConnectionsResponse DescribeVpnConnections(DescribeVpnConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpnConnectionsWithOptions(request, runtime);
        }

        public async Task<DescribeVpnConnectionsResponse> DescribeVpnConnectionsAsync(DescribeVpnConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpnConnectionsWithOptionsAsync(request, runtime);
        }

        public DescribeVpnConnectionResponse DescribeVpnConnectionWithOptions(DescribeVpnConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnConnectionResponse>(DoRequest("DescribeVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpnConnectionResponse> DescribeVpnConnectionWithOptionsAsync(DescribeVpnConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpnConnectionResponse>(await DoRequestAsync("DescribeVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpnConnectionResponse DescribeVpnConnection(DescribeVpnConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpnConnectionWithOptions(request, runtime);
        }

        public async Task<DescribeVpnConnectionResponse> DescribeVpnConnectionAsync(DescribeVpnConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpnConnectionWithOptionsAsync(request, runtime);
        }

        public DescribeCustomerGatewaysResponse DescribeCustomerGatewaysWithOptions(DescribeCustomerGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomerGatewaysResponse>(DoRequest("DescribeCustomerGateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomerGatewaysResponse> DescribeCustomerGatewaysWithOptionsAsync(DescribeCustomerGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomerGatewaysResponse>(await DoRequestAsync("DescribeCustomerGateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomerGatewaysResponse DescribeCustomerGateways(DescribeCustomerGatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomerGatewaysWithOptions(request, runtime);
        }

        public async Task<DescribeCustomerGatewaysResponse> DescribeCustomerGatewaysAsync(DescribeCustomerGatewaysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomerGatewaysWithOptionsAsync(request, runtime);
        }

        public DescribeCustomerGatewayResponse DescribeCustomerGatewayWithOptions(DescribeCustomerGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomerGatewayResponse>(DoRequest("DescribeCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomerGatewayResponse> DescribeCustomerGatewayWithOptionsAsync(DescribeCustomerGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomerGatewayResponse>(await DoRequestAsync("DescribeCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomerGatewayResponse DescribeCustomerGateway(DescribeCustomerGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomerGatewayWithOptions(request, runtime);
        }

        public async Task<DescribeCustomerGatewayResponse> DescribeCustomerGatewayAsync(DescribeCustomerGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomerGatewayWithOptionsAsync(request, runtime);
        }

        public DeleteVpnGatewayResponse DeleteVpnGatewayWithOptions(DeleteVpnGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnGatewayResponse>(DoRequest("DeleteVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVpnGatewayResponse> DeleteVpnGatewayWithOptionsAsync(DeleteVpnGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnGatewayResponse>(await DoRequestAsync("DeleteVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVpnGatewayResponse DeleteVpnGateway(DeleteVpnGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVpnGatewayWithOptions(request, runtime);
        }

        public async Task<DeleteVpnGatewayResponse> DeleteVpnGatewayAsync(DeleteVpnGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVpnGatewayWithOptionsAsync(request, runtime);
        }

        public DeleteVpnConnectionResponse DeleteVpnConnectionWithOptions(DeleteVpnConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnConnectionResponse>(DoRequest("DeleteVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVpnConnectionResponse> DeleteVpnConnectionWithOptionsAsync(DeleteVpnConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpnConnectionResponse>(await DoRequestAsync("DeleteVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVpnConnectionResponse DeleteVpnConnection(DeleteVpnConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVpnConnectionWithOptions(request, runtime);
        }

        public async Task<DeleteVpnConnectionResponse> DeleteVpnConnectionAsync(DeleteVpnConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVpnConnectionWithOptionsAsync(request, runtime);
        }

        public DeleteCustomerGatewayResponse DeleteCustomerGatewayWithOptions(DeleteCustomerGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCustomerGatewayResponse>(DoRequest("DeleteCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteCustomerGatewayResponse> DeleteCustomerGatewayWithOptionsAsync(DeleteCustomerGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCustomerGatewayResponse>(await DoRequestAsync("DeleteCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteCustomerGatewayResponse DeleteCustomerGateway(DeleteCustomerGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteCustomerGatewayWithOptions(request, runtime);
        }

        public async Task<DeleteCustomerGatewayResponse> DeleteCustomerGatewayAsync(DeleteCustomerGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteCustomerGatewayWithOptionsAsync(request, runtime);
        }

        public CreateVpnConnectionResponse CreateVpnConnectionWithOptions(CreateVpnConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnConnectionResponse>(DoRequest("CreateVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVpnConnectionResponse> CreateVpnConnectionWithOptionsAsync(CreateVpnConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpnConnectionResponse>(await DoRequestAsync("CreateVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateVpnConnectionResponse CreateVpnConnection(CreateVpnConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVpnConnectionWithOptions(request, runtime);
        }

        public async Task<CreateVpnConnectionResponse> CreateVpnConnectionAsync(CreateVpnConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVpnConnectionWithOptionsAsync(request, runtime);
        }

        public CreateCustomerGatewayResponse CreateCustomerGatewayWithOptions(CreateCustomerGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCustomerGatewayResponse>(DoRequest("CreateCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateCustomerGatewayResponse> CreateCustomerGatewayWithOptionsAsync(CreateCustomerGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCustomerGatewayResponse>(await DoRequestAsync("CreateCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateCustomerGatewayResponse CreateCustomerGateway(CreateCustomerGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateCustomerGatewayWithOptions(request, runtime);
        }

        public async Task<CreateCustomerGatewayResponse> CreateCustomerGatewayAsync(CreateCustomerGatewayRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateCustomerGatewayWithOptionsAsync(request, runtime);
        }

        public ModifyBgpGroupAttributeResponse ModifyBgpGroupAttributeWithOptions(ModifyBgpGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBgpGroupAttributeResponse>(DoRequest("ModifyBgpGroupAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyBgpGroupAttributeResponse> ModifyBgpGroupAttributeWithOptionsAsync(ModifyBgpGroupAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBgpGroupAttributeResponse>(await DoRequestAsync("ModifyBgpGroupAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyBgpGroupAttributeResponse ModifyBgpGroupAttribute(ModifyBgpGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyBgpGroupAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyBgpGroupAttributeResponse> ModifyBgpGroupAttributeAsync(ModifyBgpGroupAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyBgpGroupAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeBgpPeersResponse DescribeBgpPeersWithOptions(DescribeBgpPeersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBgpPeersResponse>(DoRequest("DescribeBgpPeers", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBgpPeersResponse> DescribeBgpPeersWithOptionsAsync(DescribeBgpPeersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBgpPeersResponse>(await DoRequestAsync("DescribeBgpPeers", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBgpPeersResponse DescribeBgpPeers(DescribeBgpPeersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBgpPeersWithOptions(request, runtime);
        }

        public async Task<DescribeBgpPeersResponse> DescribeBgpPeersAsync(DescribeBgpPeersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBgpPeersWithOptionsAsync(request, runtime);
        }

        public DescribeBgpGroupsResponse DescribeBgpGroupsWithOptions(DescribeBgpGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBgpGroupsResponse>(DoRequest("DescribeBgpGroups", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBgpGroupsResponse> DescribeBgpGroupsWithOptionsAsync(DescribeBgpGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBgpGroupsResponse>(await DoRequestAsync("DescribeBgpGroups", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBgpGroupsResponse DescribeBgpGroups(DescribeBgpGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBgpGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeBgpGroupsResponse> DescribeBgpGroupsAsync(DescribeBgpGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBgpGroupsWithOptionsAsync(request, runtime);
        }

        public DeleteBgpPeerResponse DeleteBgpPeerWithOptions(DeleteBgpPeerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBgpPeerResponse>(DoRequest("DeleteBgpPeer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBgpPeerResponse> DeleteBgpPeerWithOptionsAsync(DeleteBgpPeerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBgpPeerResponse>(await DoRequestAsync("DeleteBgpPeer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteBgpPeerResponse DeleteBgpPeer(DeleteBgpPeerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteBgpPeerWithOptions(request, runtime);
        }

        public async Task<DeleteBgpPeerResponse> DeleteBgpPeerAsync(DeleteBgpPeerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteBgpPeerWithOptionsAsync(request, runtime);
        }

        public DeleteBgpNetworkResponse DeleteBgpNetworkWithOptions(DeleteBgpNetworkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBgpNetworkResponse>(DoRequest("DeleteBgpNetwork", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBgpNetworkResponse> DeleteBgpNetworkWithOptionsAsync(DeleteBgpNetworkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBgpNetworkResponse>(await DoRequestAsync("DeleteBgpNetwork", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteBgpNetworkResponse DeleteBgpNetwork(DeleteBgpNetworkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteBgpNetworkWithOptions(request, runtime);
        }

        public async Task<DeleteBgpNetworkResponse> DeleteBgpNetworkAsync(DeleteBgpNetworkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteBgpNetworkWithOptionsAsync(request, runtime);
        }

        public DeleteBgpGroupResponse DeleteBgpGroupWithOptions(DeleteBgpGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBgpGroupResponse>(DoRequest("DeleteBgpGroup", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBgpGroupResponse> DeleteBgpGroupWithOptionsAsync(DeleteBgpGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBgpGroupResponse>(await DoRequestAsync("DeleteBgpGroup", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteBgpGroupResponse DeleteBgpGroup(DeleteBgpGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteBgpGroupWithOptions(request, runtime);
        }

        public async Task<DeleteBgpGroupResponse> DeleteBgpGroupAsync(DeleteBgpGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteBgpGroupWithOptionsAsync(request, runtime);
        }

        public CreateBgpPeerResponse CreateBgpPeerWithOptions(CreateBgpPeerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBgpPeerResponse>(DoRequest("CreateBgpPeer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateBgpPeerResponse> CreateBgpPeerWithOptionsAsync(CreateBgpPeerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBgpPeerResponse>(await DoRequestAsync("CreateBgpPeer", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateBgpPeerResponse CreateBgpPeer(CreateBgpPeerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateBgpPeerWithOptions(request, runtime);
        }

        public async Task<CreateBgpPeerResponse> CreateBgpPeerAsync(CreateBgpPeerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateBgpPeerWithOptionsAsync(request, runtime);
        }

        public CreateBgpGroupResponse CreateBgpGroupWithOptions(CreateBgpGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBgpGroupResponse>(DoRequest("CreateBgpGroup", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateBgpGroupResponse> CreateBgpGroupWithOptionsAsync(CreateBgpGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBgpGroupResponse>(await DoRequestAsync("CreateBgpGroup", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateBgpGroupResponse CreateBgpGroup(CreateBgpGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateBgpGroupWithOptions(request, runtime);
        }

        public async Task<CreateBgpGroupResponse> CreateBgpGroupAsync(CreateBgpGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateBgpGroupWithOptionsAsync(request, runtime);
        }

        public AddBgpNetworkResponse AddBgpNetworkWithOptions(AddBgpNetworkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddBgpNetworkResponse>(DoRequest("AddBgpNetwork", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddBgpNetworkResponse> AddBgpNetworkWithOptionsAsync(AddBgpNetworkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddBgpNetworkResponse>(await DoRequestAsync("AddBgpNetwork", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AddBgpNetworkResponse AddBgpNetwork(AddBgpNetworkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddBgpNetworkWithOptions(request, runtime);
        }

        public async Task<AddBgpNetworkResponse> AddBgpNetworkAsync(AddBgpNetworkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddBgpNetworkWithOptionsAsync(request, runtime);
        }

        public EnableVpcClassicLinkResponse EnableVpcClassicLinkWithOptions(EnableVpcClassicLinkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableVpcClassicLinkResponse>(DoRequest("EnableVpcClassicLink", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableVpcClassicLinkResponse> EnableVpcClassicLinkWithOptionsAsync(EnableVpcClassicLinkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableVpcClassicLinkResponse>(await DoRequestAsync("EnableVpcClassicLink", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public EnableVpcClassicLinkResponse EnableVpcClassicLink(EnableVpcClassicLinkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableVpcClassicLinkWithOptions(request, runtime);
        }

        public async Task<EnableVpcClassicLinkResponse> EnableVpcClassicLinkAsync(EnableVpcClassicLinkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableVpcClassicLinkWithOptionsAsync(request, runtime);
        }

        public DisableVpcClassicLinkResponse DisableVpcClassicLinkWithOptions(DisableVpcClassicLinkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableVpcClassicLinkResponse>(DoRequest("DisableVpcClassicLink", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DisableVpcClassicLinkResponse> DisableVpcClassicLinkWithOptionsAsync(DisableVpcClassicLinkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableVpcClassicLinkResponse>(await DoRequestAsync("DisableVpcClassicLink", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DisableVpcClassicLinkResponse DisableVpcClassicLink(DisableVpcClassicLinkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableVpcClassicLinkWithOptions(request, runtime);
        }

        public async Task<DisableVpcClassicLinkResponse> DisableVpcClassicLinkAsync(DisableVpcClassicLinkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableVpcClassicLinkWithOptionsAsync(request, runtime);
        }

        public DescribeVpcAttributeResponse DescribeVpcAttributeWithOptions(DescribeVpcAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpcAttributeResponse>(DoRequest("DescribeVpcAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpcAttributeResponse> DescribeVpcAttributeWithOptionsAsync(DescribeVpcAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpcAttributeResponse>(await DoRequestAsync("DescribeVpcAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVpcAttributeResponse DescribeVpcAttribute(DescribeVpcAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVpcAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeVpcAttributeResponse> DescribeVpcAttributeAsync(DescribeVpcAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVpcAttributeWithOptionsAsync(request, runtime);
        }

        public UnassociatePhysicalConnectionFromVirtualBorderRouterResponse UnassociatePhysicalConnectionFromVirtualBorderRouterWithOptions(UnassociatePhysicalConnectionFromVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociatePhysicalConnectionFromVirtualBorderRouterResponse>(DoRequest("UnassociatePhysicalConnectionFromVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociatePhysicalConnectionFromVirtualBorderRouterResponse> UnassociatePhysicalConnectionFromVirtualBorderRouterWithOptionsAsync(UnassociatePhysicalConnectionFromVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociatePhysicalConnectionFromVirtualBorderRouterResponse>(await DoRequestAsync("UnassociatePhysicalConnectionFromVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public UnassociatePhysicalConnectionFromVirtualBorderRouterResponse UnassociatePhysicalConnectionFromVirtualBorderRouter(UnassociatePhysicalConnectionFromVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnassociatePhysicalConnectionFromVirtualBorderRouterWithOptions(request, runtime);
        }

        public async Task<UnassociatePhysicalConnectionFromVirtualBorderRouterResponse> UnassociatePhysicalConnectionFromVirtualBorderRouterAsync(UnassociatePhysicalConnectionFromVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnassociatePhysicalConnectionFromVirtualBorderRouterWithOptionsAsync(request, runtime);
        }

        public AssociatePhysicalConnectionToVirtualBorderRouterResponse AssociatePhysicalConnectionToVirtualBorderRouterWithOptions(AssociatePhysicalConnectionToVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociatePhysicalConnectionToVirtualBorderRouterResponse>(DoRequest("AssociatePhysicalConnectionToVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociatePhysicalConnectionToVirtualBorderRouterResponse> AssociatePhysicalConnectionToVirtualBorderRouterWithOptionsAsync(AssociatePhysicalConnectionToVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociatePhysicalConnectionToVirtualBorderRouterResponse>(await DoRequestAsync("AssociatePhysicalConnectionToVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public AssociatePhysicalConnectionToVirtualBorderRouterResponse AssociatePhysicalConnectionToVirtualBorderRouter(AssociatePhysicalConnectionToVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AssociatePhysicalConnectionToVirtualBorderRouterWithOptions(request, runtime);
        }

        public async Task<AssociatePhysicalConnectionToVirtualBorderRouterResponse> AssociatePhysicalConnectionToVirtualBorderRouterAsync(AssociatePhysicalConnectionToVirtualBorderRouterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AssociatePhysicalConnectionToVirtualBorderRouterWithOptionsAsync(request, runtime);
        }

        public ModifySnatEntryResponse ModifySnatEntryWithOptions(ModifySnatEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySnatEntryResponse>(DoRequest("ModifySnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySnatEntryResponse> ModifySnatEntryWithOptionsAsync(ModifySnatEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySnatEntryResponse>(await DoRequestAsync("ModifySnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifySnatEntryResponse ModifySnatEntry(ModifySnatEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySnatEntryWithOptions(request, runtime);
        }

        public async Task<ModifySnatEntryResponse> ModifySnatEntryAsync(ModifySnatEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySnatEntryWithOptionsAsync(request, runtime);
        }

        public ModifyNatGatewaySpecResponse ModifyNatGatewaySpecWithOptions(ModifyNatGatewaySpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNatGatewaySpecResponse>(DoRequest("ModifyNatGatewaySpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyNatGatewaySpecResponse> ModifyNatGatewaySpecWithOptionsAsync(ModifyNatGatewaySpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNatGatewaySpecResponse>(await DoRequestAsync("ModifyNatGatewaySpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyNatGatewaySpecResponse ModifyNatGatewaySpec(ModifyNatGatewaySpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyNatGatewaySpecWithOptions(request, runtime);
        }

        public async Task<ModifyNatGatewaySpecResponse> ModifyNatGatewaySpecAsync(ModifyNatGatewaySpecRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyNatGatewaySpecWithOptionsAsync(request, runtime);
        }

        public ModifyNatGatewayAttributeResponse ModifyNatGatewayAttributeWithOptions(ModifyNatGatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNatGatewayAttributeResponse>(DoRequest("ModifyNatGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyNatGatewayAttributeResponse> ModifyNatGatewayAttributeWithOptionsAsync(ModifyNatGatewayAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyNatGatewayAttributeResponse>(await DoRequestAsync("ModifyNatGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyNatGatewayAttributeResponse ModifyNatGatewayAttribute(ModifyNatGatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyNatGatewayAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyNatGatewayAttributeResponse> ModifyNatGatewayAttributeAsync(ModifyNatGatewayAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyNatGatewayAttributeWithOptionsAsync(request, runtime);
        }

        public ModifyBandwidthPackageAttributeResponse ModifyBandwidthPackageAttributeWithOptions(ModifyBandwidthPackageAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBandwidthPackageAttributeResponse>(DoRequest("ModifyBandwidthPackageAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyBandwidthPackageAttributeResponse> ModifyBandwidthPackageAttributeWithOptionsAsync(ModifyBandwidthPackageAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBandwidthPackageAttributeResponse>(await DoRequestAsync("ModifyBandwidthPackageAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public ModifyBandwidthPackageAttributeResponse ModifyBandwidthPackageAttribute(ModifyBandwidthPackageAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyBandwidthPackageAttributeWithOptions(request, runtime);
        }

        public async Task<ModifyBandwidthPackageAttributeResponse> ModifyBandwidthPackageAttributeAsync(ModifyBandwidthPackageAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyBandwidthPackageAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeSnatTableEntriesResponse DescribeSnatTableEntriesWithOptions(DescribeSnatTableEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnatTableEntriesResponse>(DoRequest("DescribeSnatTableEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSnatTableEntriesResponse> DescribeSnatTableEntriesWithOptionsAsync(DescribeSnatTableEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnatTableEntriesResponse>(await DoRequestAsync("DescribeSnatTableEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSnatTableEntriesResponse DescribeSnatTableEntries(DescribeSnatTableEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSnatTableEntriesWithOptions(request, runtime);
        }

        public async Task<DescribeSnatTableEntriesResponse> DescribeSnatTableEntriesAsync(DescribeSnatTableEntriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSnatTableEntriesWithOptionsAsync(request, runtime);
        }

        public DeleteSnatEntryResponse DeleteSnatEntryWithOptions(DeleteSnatEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSnatEntryResponse>(DoRequest("DeleteSnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSnatEntryResponse> DeleteSnatEntryWithOptionsAsync(DeleteSnatEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSnatEntryResponse>(await DoRequestAsync("DeleteSnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSnatEntryResponse DeleteSnatEntry(DeleteSnatEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSnatEntryWithOptions(request, runtime);
        }

        public async Task<DeleteSnatEntryResponse> DeleteSnatEntryAsync(DeleteSnatEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSnatEntryWithOptionsAsync(request, runtime);
        }

        public CreateSnatEntryResponse CreateSnatEntryWithOptions(CreateSnatEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSnatEntryResponse>(DoRequest("CreateSnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSnatEntryResponse> CreateSnatEntryWithOptionsAsync(CreateSnatEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSnatEntryResponse>(await DoRequestAsync("CreateSnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateSnatEntryResponse CreateSnatEntry(CreateSnatEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSnatEntryWithOptions(request, runtime);
        }

        public async Task<CreateSnatEntryResponse> CreateSnatEntryAsync(CreateSnatEntryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSnatEntryWithOptionsAsync(request, runtime);
        }

        public CreateBandwidthPackageResponse CreateBandwidthPackageWithOptions(CreateBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBandwidthPackageResponse>(DoRequest("CreateBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateBandwidthPackageResponse> CreateBandwidthPackageWithOptionsAsync(CreateBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateBandwidthPackageResponse>(await DoRequestAsync("CreateBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public CreateBandwidthPackageResponse CreateBandwidthPackage(CreateBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateBandwidthPackageWithOptions(request, runtime);
        }

        public async Task<CreateBandwidthPackageResponse> CreateBandwidthPackageAsync(CreateBandwidthPackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateBandwidthPackageWithOptionsAsync(request, runtime);
        }

        public UnassociateHaVipResponse UnassociateHaVipWithOptions(UnassociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateHaVipResponse>(DoRequest("UnassociateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateHaVipResponse> UnassociateHaVipWithOptionsAsync(UnassociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateHaVipResponse>(await DoRequestAsync("UnassociateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public UnassociateEipAddressResponse UnassociateEipAddressWithOptions(UnassociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateEipAddressResponse>(DoRequest("UnassociateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnassociateEipAddressResponse> UnassociateEipAddressWithOptionsAsync(UnassociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnassociateEipAddressResponse>(await DoRequestAsync("UnassociateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public TerminateVirtualBorderRouterResponse TerminateVirtualBorderRouterWithOptions(TerminateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminateVirtualBorderRouterResponse>(DoRequest("TerminateVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TerminateVirtualBorderRouterResponse> TerminateVirtualBorderRouterWithOptionsAsync(TerminateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminateVirtualBorderRouterResponse>(await DoRequestAsync("TerminateVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<TerminatePhysicalConnectionResponse>(DoRequest("TerminatePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TerminatePhysicalConnectionResponse> TerminatePhysicalConnectionWithOptionsAsync(TerminatePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TerminatePhysicalConnectionResponse>(await DoRequestAsync("TerminatePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public RemoveBandwidthPackageIpsResponse RemoveBandwidthPackageIpsWithOptions(RemoveBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveBandwidthPackageIpsResponse>(DoRequest("RemoveBandwidthPackageIps", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveBandwidthPackageIpsResponse> RemoveBandwidthPackageIpsWithOptionsAsync(RemoveBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveBandwidthPackageIpsResponse>(await DoRequestAsync("RemoveBandwidthPackageIps", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ReleaseEipAddressResponse ReleaseEipAddressWithOptions(ReleaseEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseEipAddressResponse>(DoRequest("ReleaseEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReleaseEipAddressResponse> ReleaseEipAddressWithOptionsAsync(ReleaseEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReleaseEipAddressResponse>(await DoRequestAsync("ReleaseEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public RecoverVirtualBorderRouterResponse RecoverVirtualBorderRouterWithOptions(RecoverVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecoverVirtualBorderRouterResponse>(DoRequest("RecoverVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecoverVirtualBorderRouterResponse> RecoverVirtualBorderRouterWithOptionsAsync(RecoverVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecoverVirtualBorderRouterResponse>(await DoRequestAsync("RecoverVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyVSwitchAttributeResponse ModifyVSwitchAttributeWithOptions(ModifyVSwitchAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVSwitchAttributeResponse>(DoRequest("ModifyVSwitchAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVSwitchAttributeResponse> ModifyVSwitchAttributeWithOptionsAsync(ModifyVSwitchAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVSwitchAttributeResponse>(await DoRequestAsync("ModifyVSwitchAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<ModifyVRouterAttributeResponse>(DoRequest("ModifyVRouterAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVRouterAttributeResponse> ModifyVRouterAttributeWithOptionsAsync(ModifyVRouterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVRouterAttributeResponse>(await DoRequestAsync("ModifyVRouterAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<ModifyVpcAttributeResponse>(DoRequest("ModifyVpcAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVpcAttributeResponse> ModifyVpcAttributeWithOptionsAsync(ModifyVpcAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVpcAttributeResponse>(await DoRequestAsync("ModifyVpcAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyVirtualBorderRouterAttributeResponse ModifyVirtualBorderRouterAttributeWithOptions(ModifyVirtualBorderRouterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVirtualBorderRouterAttributeResponse>(DoRequest("ModifyVirtualBorderRouterAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyVirtualBorderRouterAttributeResponse> ModifyVirtualBorderRouterAttributeWithOptionsAsync(ModifyVirtualBorderRouterAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyVirtualBorderRouterAttributeResponse>(await DoRequestAsync("ModifyVirtualBorderRouterAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyRouterInterfaceSpecResponse ModifyRouterInterfaceSpecWithOptions(ModifyRouterInterfaceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouterInterfaceSpecResponse>(DoRequest("ModifyRouterInterfaceSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyRouterInterfaceSpecResponse> ModifyRouterInterfaceSpecWithOptionsAsync(ModifyRouterInterfaceSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouterInterfaceSpecResponse>(await DoRequestAsync("ModifyRouterInterfaceSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<ModifyRouterInterfaceAttributeResponse>(DoRequest("ModifyRouterInterfaceAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyRouterInterfaceAttributeResponse> ModifyRouterInterfaceAttributeWithOptionsAsync(ModifyRouterInterfaceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyRouterInterfaceAttributeResponse>(await DoRequestAsync("ModifyRouterInterfaceAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyPhysicalConnectionAttributeResponse ModifyPhysicalConnectionAttributeWithOptions(ModifyPhysicalConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyPhysicalConnectionAttributeResponse>(DoRequest("ModifyPhysicalConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyPhysicalConnectionAttributeResponse> ModifyPhysicalConnectionAttributeWithOptionsAsync(ModifyPhysicalConnectionAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyPhysicalConnectionAttributeResponse>(await DoRequestAsync("ModifyPhysicalConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyHaVipAttributeResponse ModifyHaVipAttributeWithOptions(ModifyHaVipAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHaVipAttributeResponse>(DoRequest("ModifyHaVipAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyHaVipAttributeResponse> ModifyHaVipAttributeWithOptionsAsync(ModifyHaVipAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHaVipAttributeResponse>(await DoRequestAsync("ModifyHaVipAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyForwardEntryResponse ModifyForwardEntryWithOptions(ModifyForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyForwardEntryResponse>(DoRequest("ModifyForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyForwardEntryResponse> ModifyForwardEntryWithOptionsAsync(ModifyForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyForwardEntryResponse>(await DoRequestAsync("ModifyForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyEipAddressAttributeResponse ModifyEipAddressAttributeWithOptions(ModifyEipAddressAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyEipAddressAttributeResponse>(DoRequest("ModifyEipAddressAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyEipAddressAttributeResponse> ModifyEipAddressAttributeWithOptionsAsync(ModifyEipAddressAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyEipAddressAttributeResponse>(await DoRequestAsync("ModifyEipAddressAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ModifyBandwidthPackageSpecResponse ModifyBandwidthPackageSpecWithOptions(ModifyBandwidthPackageSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBandwidthPackageSpecResponse>(DoRequest("ModifyBandwidthPackageSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyBandwidthPackageSpecResponse> ModifyBandwidthPackageSpecWithOptionsAsync(ModifyBandwidthPackageSpecRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyBandwidthPackageSpecResponse>(await DoRequestAsync("ModifyBandwidthPackageSpec", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public EnablePhysicalConnectionResponse EnablePhysicalConnectionWithOptions(EnablePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnablePhysicalConnectionResponse>(DoRequest("EnablePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnablePhysicalConnectionResponse> EnablePhysicalConnectionWithOptionsAsync(EnablePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnablePhysicalConnectionResponse>(await DoRequestAsync("EnablePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeZonesResponse DescribeZonesWithOptions(DescribeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeZonesResponse>(DoRequest("DescribeZones", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeZonesResponse> DescribeZonesWithOptionsAsync(DescribeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeZonesResponse>(await DoRequestAsync("DescribeZones", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DescribeVSwitchesResponse>(DoRequest("DescribeVSwitches", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVSwitchesResponse> DescribeVSwitchesWithOptionsAsync(DescribeVSwitchesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVSwitchesResponse>(await DoRequestAsync("DescribeVSwitches", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DescribeVRoutersResponse>(DoRequest("DescribeVRouters", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVRoutersResponse> DescribeVRoutersWithOptionsAsync(DescribeVRoutersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVRoutersResponse>(await DoRequestAsync("DescribeVRouters", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DescribeVpcsResponse>(DoRequest("DescribeVpcs", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVpcsResponse> DescribeVpcsWithOptionsAsync(DescribeVpcsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVpcsResponse>(await DoRequestAsync("DescribeVpcs", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeVirtualBorderRoutersForPhysicalConnectionResponse DescribeVirtualBorderRoutersForPhysicalConnectionWithOptions(DescribeVirtualBorderRoutersForPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVirtualBorderRoutersForPhysicalConnectionResponse>(DoRequest("DescribeVirtualBorderRoutersForPhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVirtualBorderRoutersForPhysicalConnectionResponse> DescribeVirtualBorderRoutersForPhysicalConnectionWithOptionsAsync(DescribeVirtualBorderRoutersForPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVirtualBorderRoutersForPhysicalConnectionResponse>(await DoRequestAsync("DescribeVirtualBorderRoutersForPhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DescribeVirtualBorderRoutersResponse>(DoRequest("DescribeVirtualBorderRouters", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVirtualBorderRoutersResponse> DescribeVirtualBorderRoutersWithOptionsAsync(DescribeVirtualBorderRoutersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVirtualBorderRoutersResponse>(await DoRequestAsync("DescribeVirtualBorderRouters", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeRouteTablesResponse DescribeRouteTablesWithOptions(DescribeRouteTablesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteTablesResponse>(DoRequest("DescribeRouteTables", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRouteTablesResponse> DescribeRouteTablesWithOptionsAsync(DescribeRouteTablesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouteTablesResponse>(await DoRequestAsync("DescribeRouteTables", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeRouterInterfacesResponse DescribeRouterInterfacesWithOptions(DescribeRouterInterfacesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouterInterfacesResponse>(DoRequest("DescribeRouterInterfaces", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRouterInterfacesResponse> DescribeRouterInterfacesWithOptionsAsync(DescribeRouterInterfacesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRouterInterfacesResponse>(await DoRequestAsync("DescribeRouterInterfaces", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        /**
         * DescribePhysicalConnections Query physical connections in a region.
          * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public DescribePhysicalConnectionsResponse DescribePhysicalConnectionsWithOptions(DescribePhysicalConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePhysicalConnectionsResponse>(DoRequest("DescribePhysicalConnections", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribePhysicalConnections Query physical connections in a region.
          * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<DescribePhysicalConnectionsResponse> DescribePhysicalConnectionsWithOptionsAsync(DescribePhysicalConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePhysicalConnectionsResponse>(await DoRequestAsync("DescribePhysicalConnections", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        /**
         * DescribePhysicalConnections Query physical connections in a region.
          * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public DescribePhysicalConnectionsResponse DescribePhysicalConnections(DescribePhysicalConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePhysicalConnectionsWithOptions(request, runtime);
        }

        /**
         * DescribePhysicalConnections Query physical connections in a region.
          * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
          * &RegionId=cn-hangzhou
          * &<CommonParameters>
          * description: 
         */
        public async Task<DescribePhysicalConnectionsResponse> DescribePhysicalConnectionsAsync(DescribePhysicalConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePhysicalConnectionsWithOptionsAsync(request, runtime);
        }

        public DescribeNewProjectEipMonitorDataResponse DescribeNewProjectEipMonitorDataWithOptions(DescribeNewProjectEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNewProjectEipMonitorDataResponse>(DoRequest("DescribeNewProjectEipMonitorData", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNewProjectEipMonitorDataResponse> DescribeNewProjectEipMonitorDataWithOptionsAsync(DescribeNewProjectEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNewProjectEipMonitorDataResponse>(await DoRequestAsync("DescribeNewProjectEipMonitorData", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeNatGatewaysResponse DescribeNatGatewaysWithOptions(DescribeNatGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNatGatewaysResponse>(DoRequest("DescribeNatGateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeNatGatewaysResponse> DescribeNatGatewaysWithOptionsAsync(DescribeNatGatewaysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeNatGatewaysResponse>(await DoRequestAsync("DescribeNatGateways", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeHaVipsResponse DescribeHaVipsWithOptions(DescribeHaVipsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHaVipsResponse>(DoRequest("DescribeHaVips", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeHaVipsResponse> DescribeHaVipsWithOptionsAsync(DescribeHaVipsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHaVipsResponse>(await DoRequestAsync("DescribeHaVips", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeForwardTableEntriesResponse DescribeForwardTableEntriesWithOptions(DescribeForwardTableEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeForwardTableEntriesResponse>(DoRequest("DescribeForwardTableEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeForwardTableEntriesResponse> DescribeForwardTableEntriesWithOptionsAsync(DescribeForwardTableEntriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeForwardTableEntriesResponse>(await DoRequestAsync("DescribeForwardTableEntries", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeEipMonitorDataResponse DescribeEipMonitorDataWithOptions(DescribeEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipMonitorDataResponse>(DoRequest("DescribeEipMonitorData", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEipMonitorDataResponse> DescribeEipMonitorDataWithOptionsAsync(DescribeEipMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipMonitorDataResponse>(await DoRequestAsync("DescribeEipMonitorData", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DescribeEipAddressesResponse>(DoRequest("DescribeEipAddresses", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEipAddressesResponse> DescribeEipAddressesWithOptionsAsync(DescribeEipAddressesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEipAddressesResponse>(await DoRequestAsync("DescribeEipAddresses", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeBandwidthPackagesResponse DescribeBandwidthPackagesWithOptions(DescribeBandwidthPackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBandwidthPackagesResponse>(DoRequest("DescribeBandwidthPackages", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBandwidthPackagesResponse> DescribeBandwidthPackagesWithOptionsAsync(DescribeBandwidthPackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBandwidthPackagesResponse>(await DoRequestAsync("DescribeBandwidthPackages", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DescribeAccessPointsResponse DescribeAccessPointsWithOptions(DescribeAccessPointsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessPointsResponse>(DoRequest("DescribeAccessPoints", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAccessPointsResponse> DescribeAccessPointsWithOptionsAsync(DescribeAccessPointsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessPointsResponse>(await DoRequestAsync("DescribeAccessPoints", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeleteVSwitchResponse DeleteVSwitchWithOptions(DeleteVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVSwitchResponse>(DoRequest("DeleteVSwitch", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVSwitchResponse> DeleteVSwitchWithOptionsAsync(DeleteVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVSwitchResponse>(await DoRequestAsync("DeleteVSwitch", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DeleteVpcResponse>(DoRequest("DeleteVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVpcResponse> DeleteVpcWithOptionsAsync(DeleteVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVpcResponse>(await DoRequestAsync("DeleteVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeleteVirtualBorderRouterResponse DeleteVirtualBorderRouterWithOptions(DeleteVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVirtualBorderRouterResponse>(DoRequest("DeleteVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVirtualBorderRouterResponse> DeleteVirtualBorderRouterWithOptionsAsync(DeleteVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVirtualBorderRouterResponse>(await DoRequestAsync("DeleteVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeleteRouterInterfaceResponse DeleteRouterInterfaceWithOptions(DeleteRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouterInterfaceResponse>(DoRequest("DeleteRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRouterInterfaceResponse> DeleteRouterInterfaceWithOptionsAsync(DeleteRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouterInterfaceResponse>(await DoRequestAsync("DeleteRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeleteRouteEntryResponse DeleteRouteEntryWithOptions(DeleteRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouteEntryResponse>(DoRequest("DeleteRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRouteEntryResponse> DeleteRouteEntryWithOptionsAsync(DeleteRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRouteEntryResponse>(await DoRequestAsync("DeleteRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeletePhysicalConnectionResponse DeletePhysicalConnectionWithOptions(DeletePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePhysicalConnectionResponse>(DoRequest("DeletePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeletePhysicalConnectionResponse> DeletePhysicalConnectionWithOptionsAsync(DeletePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePhysicalConnectionResponse>(await DoRequestAsync("DeletePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeleteNatGatewayResponse DeleteNatGatewayWithOptions(DeleteNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNatGatewayResponse>(DoRequest("DeleteNatGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteNatGatewayResponse> DeleteNatGatewayWithOptionsAsync(DeleteNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteNatGatewayResponse>(await DoRequestAsync("DeleteNatGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeleteHaVipResponse DeleteHaVipWithOptions(DeleteHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHaVipResponse>(DoRequest("DeleteHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteHaVipResponse> DeleteHaVipWithOptionsAsync(DeleteHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHaVipResponse>(await DoRequestAsync("DeleteHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeleteForwardEntryResponse DeleteForwardEntryWithOptions(DeleteForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteForwardEntryResponse>(DoRequest("DeleteForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteForwardEntryResponse> DeleteForwardEntryWithOptionsAsync(DeleteForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteForwardEntryResponse>(await DoRequestAsync("DeleteForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<DeleteBandwidthPackageResponse>(DoRequest("DeleteBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBandwidthPackageResponse> DeleteBandwidthPackageWithOptionsAsync(DeleteBandwidthPackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBandwidthPackageResponse>(await DoRequestAsync("DeleteBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public DeactivateRouterInterfaceResponse DeactivateRouterInterfaceWithOptions(DeactivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeactivateRouterInterfaceResponse>(DoRequest("DeactivateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeactivateRouterInterfaceResponse> DeactivateRouterInterfaceWithOptionsAsync(DeactivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeactivateRouterInterfaceResponse>(await DoRequestAsync("DeactivateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreateVSwitchResponse CreateVSwitchWithOptions(CreateVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVSwitchResponse>(DoRequest("CreateVSwitch", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVSwitchResponse> CreateVSwitchWithOptionsAsync(CreateVSwitchRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVSwitchResponse>(await DoRequestAsync("CreateVSwitch", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<CreateVpcResponse>(DoRequest("CreateVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVpcResponse> CreateVpcWithOptionsAsync(CreateVpcRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVpcResponse>(await DoRequestAsync("CreateVpc", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreateVirtualBorderRouterResponse CreateVirtualBorderRouterWithOptions(CreateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVirtualBorderRouterResponse>(DoRequest("CreateVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVirtualBorderRouterResponse> CreateVirtualBorderRouterWithOptionsAsync(CreateVirtualBorderRouterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVirtualBorderRouterResponse>(await DoRequestAsync("CreateVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreateRouterInterfaceResponse CreateRouterInterfaceWithOptions(CreateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouterInterfaceResponse>(DoRequest("CreateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRouterInterfaceResponse> CreateRouterInterfaceWithOptionsAsync(CreateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouterInterfaceResponse>(await DoRequestAsync("CreateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreateRouteEntryResponse CreateRouteEntryWithOptions(CreateRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouteEntryResponse>(DoRequest("CreateRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRouteEntryResponse> CreateRouteEntryWithOptionsAsync(CreateRouteEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRouteEntryResponse>(await DoRequestAsync("CreateRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreatePhysicalConnectionResponse CreatePhysicalConnectionWithOptions(CreatePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionResponse>(DoRequest("CreatePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreatePhysicalConnectionResponse> CreatePhysicalConnectionWithOptionsAsync(CreatePhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePhysicalConnectionResponse>(await DoRequestAsync("CreatePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreateNatGatewayResponse CreateNatGatewayWithOptions(CreateNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNatGatewayResponse>(DoRequest("CreateNatGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateNatGatewayResponse> CreateNatGatewayWithOptionsAsync(CreateNatGatewayRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNatGatewayResponse>(await DoRequestAsync("CreateNatGateway", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreateHaVipResponse CreateHaVipWithOptions(CreateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHaVipResponse>(DoRequest("CreateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateHaVipResponse> CreateHaVipWithOptionsAsync(CreateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHaVipResponse>(await DoRequestAsync("CreateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CreateForwardEntryResponse CreateForwardEntryWithOptions(CreateForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateForwardEntryResponse>(DoRequest("CreateForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateForwardEntryResponse> CreateForwardEntryWithOptionsAsync(CreateForwardEntryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateForwardEntryResponse>(await DoRequestAsync("CreateForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ConnectRouterInterfaceResponse ConnectRouterInterfaceWithOptions(ConnectRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConnectRouterInterfaceResponse>(DoRequest("ConnectRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ConnectRouterInterfaceResponse> ConnectRouterInterfaceWithOptionsAsync(ConnectRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConnectRouterInterfaceResponse>(await DoRequestAsync("ConnectRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public CancelPhysicalConnectionResponse CancelPhysicalConnectionWithOptions(CancelPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelPhysicalConnectionResponse>(DoRequest("CancelPhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelPhysicalConnectionResponse> CancelPhysicalConnectionWithOptionsAsync(CancelPhysicalConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelPhysicalConnectionResponse>(await DoRequestAsync("CancelPhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public AssociateHaVipResponse AssociateHaVipWithOptions(AssociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateHaVipResponse>(DoRequest("AssociateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateHaVipResponse> AssociateHaVipWithOptionsAsync(AssociateHaVipRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateHaVipResponse>(await DoRequestAsync("AssociateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public AssociateEipAddressResponse AssociateEipAddressWithOptions(AssociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateEipAddressResponse>(DoRequest("AssociateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AssociateEipAddressResponse> AssociateEipAddressWithOptionsAsync(AssociateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AssociateEipAddressResponse>(await DoRequestAsync("AssociateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public AllocateEipAddressResponse AllocateEipAddressWithOptions(AllocateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipAddressResponse>(DoRequest("AllocateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateEipAddressResponse> AllocateEipAddressWithOptionsAsync(AllocateEipAddressRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateEipAddressResponse>(await DoRequestAsync("AllocateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public AddBandwidthPackageIpsResponse AddBandwidthPackageIpsWithOptions(AddBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddBandwidthPackageIpsResponse>(DoRequest("AddBandwidthPackageIps", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddBandwidthPackageIpsResponse> AddBandwidthPackageIpsWithOptionsAsync(AddBandwidthPackageIpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddBandwidthPackageIpsResponse>(await DoRequestAsync("AddBandwidthPackageIps", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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

        public ActivateRouterInterfaceResponse ActivateRouterInterfaceWithOptions(ActivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ActivateRouterInterfaceResponse>(DoRequest("ActivateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ActivateRouterInterfaceResponse> ActivateRouterInterfaceWithOptionsAsync(ActivateRouterInterfaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ActivateRouterInterfaceResponse>(await DoRequestAsync("ActivateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, request.ToMap(), runtime));
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
