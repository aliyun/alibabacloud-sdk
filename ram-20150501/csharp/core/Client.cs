// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Ram20150501.Models;

namespace AlibabaCloud.SDK.Ram20150501
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "central";
            CheckConfig(config);
            this._endpoint = GetEndpoint("ram", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public GetAccessKeyLastUsedResponse GetAccessKeyLastUsedWithOptions(GetAccessKeyLastUsedRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAccessKeyLastUsedResponse>(DoRequest("GetAccessKeyLastUsed", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAccessKeyLastUsedResponse> GetAccessKeyLastUsedWithOptionsAsync(GetAccessKeyLastUsedRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAccessKeyLastUsedResponse>(await DoRequestAsync("GetAccessKeyLastUsed", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetAccessKeyLastUsedResponse GetAccessKeyLastUsed(GetAccessKeyLastUsedRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAccessKeyLastUsedWithOptions(request, runtime);
        }

        public async Task<GetAccessKeyLastUsedResponse> GetAccessKeyLastUsedAsync(GetAccessKeyLastUsedRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAccessKeyLastUsedWithOptionsAsync(request, runtime);
        }

        public ChangePasswordResponse ChangePasswordWithOptions(ChangePasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangePasswordResponse>(DoRequest("ChangePassword", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ChangePasswordResponse> ChangePasswordWithOptionsAsync(ChangePasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangePasswordResponse>(await DoRequestAsync("ChangePassword", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ChangePasswordResponse ChangePassword(ChangePasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ChangePasswordWithOptions(request, runtime);
        }

        public async Task<ChangePasswordResponse> ChangePasswordAsync(ChangePasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ChangePasswordWithOptionsAsync(request, runtime);
        }

        public UpdateRoleResponse UpdateRoleWithOptions(UpdateRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateRoleResponse>(DoRequest("UpdateRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateRoleResponse> UpdateRoleWithOptionsAsync(UpdateRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateRoleResponse>(await DoRequestAsync("UpdateRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public UpdateRoleResponse UpdateRole(UpdateRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateRoleWithOptions(request, runtime);
        }

        public async Task<UpdateRoleResponse> UpdateRoleAsync(UpdateRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateRoleWithOptionsAsync(request, runtime);
        }

        public SetSecurityPreferenceResponse SetSecurityPreferenceWithOptions(SetSecurityPreferenceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetSecurityPreferenceResponse>(DoRequest("SetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetSecurityPreferenceResponse> SetSecurityPreferenceWithOptionsAsync(SetSecurityPreferenceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetSecurityPreferenceResponse>(await DoRequestAsync("SetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public SetSecurityPreferenceResponse SetSecurityPreference(SetSecurityPreferenceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetSecurityPreferenceWithOptions(request, runtime);
        }

        public async Task<SetSecurityPreferenceResponse> SetSecurityPreferenceAsync(SetSecurityPreferenceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetSecurityPreferenceWithOptionsAsync(request, runtime);
        }

        public ListRolesResponse ListRolesWithOptions(ListRolesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRolesResponse>(DoRequest("ListRoles", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListRolesResponse> ListRolesWithOptionsAsync(ListRolesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRolesResponse>(await DoRequestAsync("ListRoles", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListRolesResponse ListRoles(ListRolesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListRolesWithOptions(request, runtime);
        }

        public async Task<ListRolesResponse> ListRolesAsync(ListRolesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListRolesWithOptionsAsync(request, runtime);
        }

        public ListPoliciesForRoleResponse ListPoliciesForRoleWithOptions(ListPoliciesForRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesForRoleResponse>(DoRequest("ListPoliciesForRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListPoliciesForRoleResponse> ListPoliciesForRoleWithOptionsAsync(ListPoliciesForRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesForRoleResponse>(await DoRequestAsync("ListPoliciesForRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListPoliciesForRoleResponse ListPoliciesForRole(ListPoliciesForRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListPoliciesForRoleWithOptions(request, runtime);
        }

        public async Task<ListPoliciesForRoleResponse> ListPoliciesForRoleAsync(ListPoliciesForRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListPoliciesForRoleWithOptionsAsync(request, runtime);
        }

        public GetSecurityPreferenceResponse GetSecurityPreferenceWithOptions(GetSecurityPreferenceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetSecurityPreferenceResponse>(DoRequest("GetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetSecurityPreferenceResponse> GetSecurityPreferenceWithOptionsAsync(GetSecurityPreferenceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetSecurityPreferenceResponse>(await DoRequestAsync("GetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetSecurityPreferenceResponse GetSecurityPreference(GetSecurityPreferenceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetSecurityPreferenceWithOptions(request, runtime);
        }

        public async Task<GetSecurityPreferenceResponse> GetSecurityPreferenceAsync(GetSecurityPreferenceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetSecurityPreferenceWithOptionsAsync(request, runtime);
        }

        public GetRoleResponse GetRoleWithOptions(GetRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRoleResponse>(DoRequest("GetRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetRoleResponse> GetRoleWithOptionsAsync(GetRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRoleResponse>(await DoRequestAsync("GetRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetRoleResponse GetRole(GetRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetRoleWithOptions(request, runtime);
        }

        public async Task<GetRoleResponse> GetRoleAsync(GetRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetRoleWithOptionsAsync(request, runtime);
        }

        public DetachPolicyFromRoleResponse DetachPolicyFromRoleWithOptions(DetachPolicyFromRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachPolicyFromRoleResponse>(DoRequest("DetachPolicyFromRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachPolicyFromRoleResponse> DetachPolicyFromRoleWithOptionsAsync(DetachPolicyFromRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachPolicyFromRoleResponse>(await DoRequestAsync("DetachPolicyFromRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DetachPolicyFromRoleResponse DetachPolicyFromRole(DetachPolicyFromRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachPolicyFromRoleWithOptions(request, runtime);
        }

        public async Task<DetachPolicyFromRoleResponse> DetachPolicyFromRoleAsync(DetachPolicyFromRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachPolicyFromRoleWithOptionsAsync(request, runtime);
        }

        public DeleteRoleResponse DeleteRoleWithOptions(DeleteRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRoleResponse>(DoRequest("DeleteRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRoleResponse> DeleteRoleWithOptionsAsync(DeleteRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRoleResponse>(await DoRequestAsync("DeleteRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteRoleResponse DeleteRole(DeleteRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRoleWithOptions(request, runtime);
        }

        public async Task<DeleteRoleResponse> DeleteRoleAsync(DeleteRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRoleWithOptionsAsync(request, runtime);
        }

        public CreateRoleResponse CreateRoleWithOptions(CreateRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRoleResponse>(DoRequest("CreateRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRoleResponse> CreateRoleWithOptionsAsync(CreateRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRoleResponse>(await DoRequestAsync("CreateRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateRoleResponse CreateRole(CreateRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRoleWithOptions(request, runtime);
        }

        public async Task<CreateRoleResponse> CreateRoleAsync(CreateRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRoleWithOptionsAsync(request, runtime);
        }

        public AttachPolicyToRoleResponse AttachPolicyToRoleWithOptions(AttachPolicyToRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachPolicyToRoleResponse>(DoRequest("AttachPolicyToRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachPolicyToRoleResponse> AttachPolicyToRoleWithOptionsAsync(AttachPolicyToRoleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachPolicyToRoleResponse>(await DoRequestAsync("AttachPolicyToRole", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public AttachPolicyToRoleResponse AttachPolicyToRole(AttachPolicyToRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachPolicyToRoleWithOptions(request, runtime);
        }

        public async Task<AttachPolicyToRoleResponse> AttachPolicyToRoleAsync(AttachPolicyToRoleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachPolicyToRoleWithOptionsAsync(request, runtime);
        }

        public UnbindMFADeviceResponse UnbindMFADeviceWithOptions(UnbindMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindMFADeviceResponse>(DoRequest("UnbindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnbindMFADeviceResponse> UnbindMFADeviceWithOptionsAsync(UnbindMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindMFADeviceResponse>(await DoRequestAsync("UnbindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public UnbindMFADeviceResponse UnbindMFADevice(UnbindMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnbindMFADeviceWithOptions(request, runtime);
        }

        public async Task<UnbindMFADeviceResponse> UnbindMFADeviceAsync(UnbindMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnbindMFADeviceWithOptionsAsync(request, runtime);
        }

        public ListVirtualMFADevicesResponse ListVirtualMFADevicesWithOptions(ListVirtualMFADevicesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListVirtualMFADevicesResponse>(DoRequest("ListVirtualMFADevices", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListVirtualMFADevicesResponse> ListVirtualMFADevicesWithOptionsAsync(ListVirtualMFADevicesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListVirtualMFADevicesResponse>(await DoRequestAsync("ListVirtualMFADevices", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListVirtualMFADevicesResponse ListVirtualMFADevices(ListVirtualMFADevicesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListVirtualMFADevicesWithOptions(request, runtime);
        }

        public async Task<ListVirtualMFADevicesResponse> ListVirtualMFADevicesAsync(ListVirtualMFADevicesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListVirtualMFADevicesWithOptionsAsync(request, runtime);
        }

        public GetUserMFAInfoResponse GetUserMFAInfoWithOptions(GetUserMFAInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUserMFAInfoResponse>(DoRequest("GetUserMFAInfo", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetUserMFAInfoResponse> GetUserMFAInfoWithOptionsAsync(GetUserMFAInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUserMFAInfoResponse>(await DoRequestAsync("GetUserMFAInfo", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetUserMFAInfoResponse GetUserMFAInfo(GetUserMFAInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetUserMFAInfoWithOptions(request, runtime);
        }

        public async Task<GetUserMFAInfoResponse> GetUserMFAInfoAsync(GetUserMFAInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetUserMFAInfoWithOptionsAsync(request, runtime);
        }

        public DeleteVirtualMFADeviceResponse DeleteVirtualMFADeviceWithOptions(DeleteVirtualMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVirtualMFADeviceResponse>(DoRequest("DeleteVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVirtualMFADeviceResponse> DeleteVirtualMFADeviceWithOptionsAsync(DeleteVirtualMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVirtualMFADeviceResponse>(await DoRequestAsync("DeleteVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVirtualMFADeviceResponse DeleteVirtualMFADevice(DeleteVirtualMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVirtualMFADeviceWithOptions(request, runtime);
        }

        public async Task<DeleteVirtualMFADeviceResponse> DeleteVirtualMFADeviceAsync(DeleteVirtualMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVirtualMFADeviceWithOptionsAsync(request, runtime);
        }

        public CreateVirtualMFADeviceResponse CreateVirtualMFADeviceWithOptions(CreateVirtualMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVirtualMFADeviceResponse>(DoRequest("CreateVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateVirtualMFADeviceResponse> CreateVirtualMFADeviceWithOptionsAsync(CreateVirtualMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateVirtualMFADeviceResponse>(await DoRequestAsync("CreateVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateVirtualMFADeviceResponse CreateVirtualMFADevice(CreateVirtualMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateVirtualMFADeviceWithOptions(request, runtime);
        }

        public async Task<CreateVirtualMFADeviceResponse> CreateVirtualMFADeviceAsync(CreateVirtualMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateVirtualMFADeviceWithOptionsAsync(request, runtime);
        }

        public BindMFADeviceResponse BindMFADeviceWithOptions(BindMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindMFADeviceResponse>(DoRequest("BindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<BindMFADeviceResponse> BindMFADeviceWithOptionsAsync(BindMFADeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindMFADeviceResponse>(await DoRequestAsync("BindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public BindMFADeviceResponse BindMFADevice(BindMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BindMFADeviceWithOptions(request, runtime);
        }

        public async Task<BindMFADeviceResponse> BindMFADeviceAsync(BindMFADeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BindMFADeviceWithOptionsAsync(request, runtime);
        }

        public UpdateLoginProfileResponse UpdateLoginProfileWithOptions(UpdateLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateLoginProfileResponse>(DoRequest("UpdateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateLoginProfileResponse> UpdateLoginProfileWithOptionsAsync(UpdateLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateLoginProfileResponse>(await DoRequestAsync("UpdateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public UpdateLoginProfileResponse UpdateLoginProfile(UpdateLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateLoginProfileWithOptions(request, runtime);
        }

        public async Task<UpdateLoginProfileResponse> UpdateLoginProfileAsync(UpdateLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateLoginProfileWithOptionsAsync(request, runtime);
        }

        public GetLoginProfileResponse GetLoginProfileWithOptions(GetLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetLoginProfileResponse>(DoRequest("GetLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetLoginProfileResponse> GetLoginProfileWithOptionsAsync(GetLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetLoginProfileResponse>(await DoRequestAsync("GetLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetLoginProfileResponse GetLoginProfile(GetLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetLoginProfileWithOptions(request, runtime);
        }

        public async Task<GetLoginProfileResponse> GetLoginProfileAsync(GetLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetLoginProfileWithOptionsAsync(request, runtime);
        }

        public DeleteLoginProfileResponse DeleteLoginProfileWithOptions(DeleteLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLoginProfileResponse>(DoRequest("DeleteLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteLoginProfileResponse> DeleteLoginProfileWithOptionsAsync(DeleteLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLoginProfileResponse>(await DoRequestAsync("DeleteLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteLoginProfileResponse DeleteLoginProfile(DeleteLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteLoginProfileWithOptions(request, runtime);
        }

        public async Task<DeleteLoginProfileResponse> DeleteLoginProfileAsync(DeleteLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteLoginProfileWithOptionsAsync(request, runtime);
        }

        public CreateLoginProfileResponse CreateLoginProfileWithOptions(CreateLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLoginProfileResponse>(DoRequest("CreateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateLoginProfileResponse> CreateLoginProfileWithOptionsAsync(CreateLoginProfileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLoginProfileResponse>(await DoRequestAsync("CreateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateLoginProfileResponse CreateLoginProfile(CreateLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateLoginProfileWithOptions(request, runtime);
        }

        public async Task<CreateLoginProfileResponse> CreateLoginProfileAsync(CreateLoginProfileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateLoginProfileWithOptionsAsync(request, runtime);
        }

        public UpdateUserResponse UpdateUserWithOptions(UpdateUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateUserResponse>(DoRequest("UpdateUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateUserResponse> UpdateUserWithOptionsAsync(UpdateUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateUserResponse>(await DoRequestAsync("UpdateUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public UpdateUserResponse UpdateUser(UpdateUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateUserWithOptions(request, runtime);
        }

        public async Task<UpdateUserResponse> UpdateUserAsync(UpdateUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateUserWithOptionsAsync(request, runtime);
        }

        public ListUsersResponse ListUsersWithOptions(ListUsersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListUsersResponse>(DoRequest("ListUsers", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListUsersResponse> ListUsersWithOptionsAsync(ListUsersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListUsersResponse>(await DoRequestAsync("ListUsers", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListUsersResponse ListUsers(ListUsersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListUsersWithOptions(request, runtime);
        }

        public async Task<ListUsersResponse> ListUsersAsync(ListUsersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListUsersWithOptionsAsync(request, runtime);
        }

        public GetUserResponse GetUserWithOptions(GetUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUserResponse>(DoRequest("GetUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetUserResponse> GetUserWithOptionsAsync(GetUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUserResponse>(await DoRequestAsync("GetUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetUserResponse GetUser(GetUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetUserWithOptions(request, runtime);
        }

        public async Task<GetUserResponse> GetUserAsync(GetUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetUserWithOptionsAsync(request, runtime);
        }

        public DeleteUserResponse DeleteUserWithOptions(DeleteUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteUserResponse>(DoRequest("DeleteUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteUserResponse> DeleteUserWithOptionsAsync(DeleteUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteUserResponse>(await DoRequestAsync("DeleteUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteUserResponse DeleteUser(DeleteUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteUserWithOptions(request, runtime);
        }

        public async Task<DeleteUserResponse> DeleteUserAsync(DeleteUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteUserWithOptionsAsync(request, runtime);
        }

        public CreateUserResponse CreateUserWithOptions(CreateUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUserResponse>(DoRequest("CreateUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateUserResponse> CreateUserWithOptionsAsync(CreateUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUserResponse>(await DoRequestAsync("CreateUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateUserResponse CreateUser(CreateUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateUserWithOptions(request, runtime);
        }

        public async Task<CreateUserResponse> CreateUserAsync(CreateUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateUserWithOptionsAsync(request, runtime);
        }

        public UpdateAccessKeyResponse UpdateAccessKeyWithOptions(UpdateAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAccessKeyResponse>(DoRequest("UpdateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateAccessKeyResponse> UpdateAccessKeyWithOptionsAsync(UpdateAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAccessKeyResponse>(await DoRequestAsync("UpdateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public UpdateAccessKeyResponse UpdateAccessKey(UpdateAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAccessKeyWithOptions(request, runtime);
        }

        public async Task<UpdateAccessKeyResponse> UpdateAccessKeyAsync(UpdateAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAccessKeyWithOptionsAsync(request, runtime);
        }

        public ListAccessKeysResponse ListAccessKeysWithOptions(ListAccessKeysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAccessKeysResponse>(DoRequest("ListAccessKeys", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListAccessKeysResponse> ListAccessKeysWithOptionsAsync(ListAccessKeysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAccessKeysResponse>(await DoRequestAsync("ListAccessKeys", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListAccessKeysResponse ListAccessKeys(ListAccessKeysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAccessKeysWithOptions(request, runtime);
        }

        public async Task<ListAccessKeysResponse> ListAccessKeysAsync(ListAccessKeysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAccessKeysWithOptionsAsync(request, runtime);
        }

        public DeleteAccessKeyResponse DeleteAccessKeyWithOptions(DeleteAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccessKeyResponse>(DoRequest("DeleteAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAccessKeyResponse> DeleteAccessKeyWithOptionsAsync(DeleteAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccessKeyResponse>(await DoRequestAsync("DeleteAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAccessKeyResponse DeleteAccessKey(DeleteAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAccessKeyWithOptions(request, runtime);
        }

        public async Task<DeleteAccessKeyResponse> DeleteAccessKeyAsync(DeleteAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAccessKeyWithOptionsAsync(request, runtime);
        }

        public CreateAccessKeyResponse CreateAccessKeyWithOptions(CreateAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccessKeyResponse>(DoRequest("CreateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAccessKeyResponse> CreateAccessKeyWithOptionsAsync(CreateAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccessKeyResponse>(await DoRequestAsync("CreateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateAccessKeyResponse CreateAccessKey(CreateAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAccessKeyWithOptions(request, runtime);
        }

        public async Task<CreateAccessKeyResponse> CreateAccessKeyAsync(CreateAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAccessKeyWithOptionsAsync(request, runtime);
        }

        public SetPasswordPolicyResponse SetPasswordPolicyWithOptions(SetPasswordPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetPasswordPolicyResponse>(DoRequest("SetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetPasswordPolicyResponse> SetPasswordPolicyWithOptionsAsync(SetPasswordPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetPasswordPolicyResponse>(await DoRequestAsync("SetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public SetPasswordPolicyResponse SetPasswordPolicy(SetPasswordPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetPasswordPolicyWithOptions(request, runtime);
        }

        public async Task<SetPasswordPolicyResponse> SetPasswordPolicyAsync(SetPasswordPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetPasswordPolicyWithOptionsAsync(request, runtime);
        }

        public SetAccountAliasResponse SetAccountAliasWithOptions(SetAccountAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetAccountAliasResponse>(DoRequest("SetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetAccountAliasResponse> SetAccountAliasWithOptionsAsync(SetAccountAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetAccountAliasResponse>(await DoRequestAsync("SetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public SetAccountAliasResponse SetAccountAlias(SetAccountAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetAccountAliasWithOptions(request, runtime);
        }

        public async Task<SetAccountAliasResponse> SetAccountAliasAsync(SetAccountAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetAccountAliasWithOptionsAsync(request, runtime);
        }

        public GetPasswordPolicyResponse GetPasswordPolicyWithOptions(GetPasswordPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPasswordPolicyResponse>(DoRequest("GetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetPasswordPolicyResponse> GetPasswordPolicyWithOptionsAsync(GetPasswordPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPasswordPolicyResponse>(await DoRequestAsync("GetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetPasswordPolicyResponse GetPasswordPolicy(GetPasswordPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetPasswordPolicyWithOptions(request, runtime);
        }

        public async Task<GetPasswordPolicyResponse> GetPasswordPolicyAsync(GetPasswordPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetPasswordPolicyWithOptionsAsync(request, runtime);
        }

        public GetAccountAliasResponse GetAccountAliasWithOptions(GetAccountAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAccountAliasResponse>(DoRequest("GetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAccountAliasResponse> GetAccountAliasWithOptionsAsync(GetAccountAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAccountAliasResponse>(await DoRequestAsync("GetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetAccountAliasResponse GetAccountAlias(GetAccountAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAccountAliasWithOptions(request, runtime);
        }

        public async Task<GetAccountAliasResponse> GetAccountAliasAsync(GetAccountAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAccountAliasWithOptionsAsync(request, runtime);
        }

        public ClearAccountAliasResponse ClearAccountAliasWithOptions(ClearAccountAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClearAccountAliasResponse>(DoRequest("ClearAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ClearAccountAliasResponse> ClearAccountAliasWithOptionsAsync(ClearAccountAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClearAccountAliasResponse>(await DoRequestAsync("ClearAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ClearAccountAliasResponse ClearAccountAlias(ClearAccountAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ClearAccountAliasWithOptions(request, runtime);
        }

        public async Task<ClearAccountAliasResponse> ClearAccountAliasAsync(ClearAccountAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ClearAccountAliasWithOptionsAsync(request, runtime);
        }

        public SetDefaultPolicyVersionResponse SetDefaultPolicyVersionWithOptions(SetDefaultPolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultPolicyVersionResponse>(DoRequest("SetDefaultPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDefaultPolicyVersionResponse> SetDefaultPolicyVersionWithOptionsAsync(SetDefaultPolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultPolicyVersionResponse>(await DoRequestAsync("SetDefaultPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public SetDefaultPolicyVersionResponse SetDefaultPolicyVersion(SetDefaultPolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDefaultPolicyVersionWithOptions(request, runtime);
        }

        public async Task<SetDefaultPolicyVersionResponse> SetDefaultPolicyVersionAsync(SetDefaultPolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDefaultPolicyVersionWithOptionsAsync(request, runtime);
        }

        public ListPolicyVersionsResponse ListPolicyVersionsWithOptions(ListPolicyVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPolicyVersionsResponse>(DoRequest("ListPolicyVersions", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListPolicyVersionsResponse> ListPolicyVersionsWithOptionsAsync(ListPolicyVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPolicyVersionsResponse>(await DoRequestAsync("ListPolicyVersions", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListPolicyVersionsResponse ListPolicyVersions(ListPolicyVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListPolicyVersionsWithOptions(request, runtime);
        }

        public async Task<ListPolicyVersionsResponse> ListPolicyVersionsAsync(ListPolicyVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListPolicyVersionsWithOptionsAsync(request, runtime);
        }

        public GetPolicyVersionResponse GetPolicyVersionWithOptions(GetPolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPolicyVersionResponse>(DoRequest("GetPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetPolicyVersionResponse> GetPolicyVersionWithOptionsAsync(GetPolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPolicyVersionResponse>(await DoRequestAsync("GetPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetPolicyVersionResponse GetPolicyVersion(GetPolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetPolicyVersionWithOptions(request, runtime);
        }

        public async Task<GetPolicyVersionResponse> GetPolicyVersionAsync(GetPolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetPolicyVersionWithOptionsAsync(request, runtime);
        }

        public DeletePolicyVersionResponse DeletePolicyVersionWithOptions(DeletePolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePolicyVersionResponse>(DoRequest("DeletePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeletePolicyVersionResponse> DeletePolicyVersionWithOptionsAsync(DeletePolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePolicyVersionResponse>(await DoRequestAsync("DeletePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeletePolicyVersionResponse DeletePolicyVersion(DeletePolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeletePolicyVersionWithOptions(request, runtime);
        }

        public async Task<DeletePolicyVersionResponse> DeletePolicyVersionAsync(DeletePolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeletePolicyVersionWithOptionsAsync(request, runtime);
        }

        public CreatePolicyVersionResponse CreatePolicyVersionWithOptions(CreatePolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePolicyVersionResponse>(DoRequest("CreatePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreatePolicyVersionResponse> CreatePolicyVersionWithOptionsAsync(CreatePolicyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePolicyVersionResponse>(await DoRequestAsync("CreatePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreatePolicyVersionResponse CreatePolicyVersion(CreatePolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreatePolicyVersionWithOptions(request, runtime);
        }

        public async Task<CreatePolicyVersionResponse> CreatePolicyVersionAsync(CreatePolicyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreatePolicyVersionWithOptionsAsync(request, runtime);
        }

        public ListPoliciesForUserResponse ListPoliciesForUserWithOptions(ListPoliciesForUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesForUserResponse>(DoRequest("ListPoliciesForUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListPoliciesForUserResponse> ListPoliciesForUserWithOptionsAsync(ListPoliciesForUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesForUserResponse>(await DoRequestAsync("ListPoliciesForUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListPoliciesForUserResponse ListPoliciesForUser(ListPoliciesForUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListPoliciesForUserWithOptions(request, runtime);
        }

        public async Task<ListPoliciesForUserResponse> ListPoliciesForUserAsync(ListPoliciesForUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListPoliciesForUserWithOptionsAsync(request, runtime);
        }

        public ListPoliciesForGroupResponse ListPoliciesForGroupWithOptions(ListPoliciesForGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesForGroupResponse>(DoRequest("ListPoliciesForGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListPoliciesForGroupResponse> ListPoliciesForGroupWithOptionsAsync(ListPoliciesForGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesForGroupResponse>(await DoRequestAsync("ListPoliciesForGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListPoliciesForGroupResponse ListPoliciesForGroup(ListPoliciesForGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListPoliciesForGroupWithOptions(request, runtime);
        }

        public async Task<ListPoliciesForGroupResponse> ListPoliciesForGroupAsync(ListPoliciesForGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListPoliciesForGroupWithOptionsAsync(request, runtime);
        }

        public ListEntitiesForPolicyResponse ListEntitiesForPolicyWithOptions(ListEntitiesForPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListEntitiesForPolicyResponse>(DoRequest("ListEntitiesForPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListEntitiesForPolicyResponse> ListEntitiesForPolicyWithOptionsAsync(ListEntitiesForPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListEntitiesForPolicyResponse>(await DoRequestAsync("ListEntitiesForPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListEntitiesForPolicyResponse ListEntitiesForPolicy(ListEntitiesForPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListEntitiesForPolicyWithOptions(request, runtime);
        }

        public async Task<ListEntitiesForPolicyResponse> ListEntitiesForPolicyAsync(ListEntitiesForPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListEntitiesForPolicyWithOptionsAsync(request, runtime);
        }

        public DetachPolicyFromUserResponse DetachPolicyFromUserWithOptions(DetachPolicyFromUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachPolicyFromUserResponse>(DoRequest("DetachPolicyFromUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachPolicyFromUserResponse> DetachPolicyFromUserWithOptionsAsync(DetachPolicyFromUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachPolicyFromUserResponse>(await DoRequestAsync("DetachPolicyFromUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DetachPolicyFromUserResponse DetachPolicyFromUser(DetachPolicyFromUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachPolicyFromUserWithOptions(request, runtime);
        }

        public async Task<DetachPolicyFromUserResponse> DetachPolicyFromUserAsync(DetachPolicyFromUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachPolicyFromUserWithOptionsAsync(request, runtime);
        }

        public DetachPolicyFromGroupResponse DetachPolicyFromGroupWithOptions(DetachPolicyFromGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachPolicyFromGroupResponse>(DoRequest("DetachPolicyFromGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachPolicyFromGroupResponse> DetachPolicyFromGroupWithOptionsAsync(DetachPolicyFromGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachPolicyFromGroupResponse>(await DoRequestAsync("DetachPolicyFromGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DetachPolicyFromGroupResponse DetachPolicyFromGroup(DetachPolicyFromGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachPolicyFromGroupWithOptions(request, runtime);
        }

        public async Task<DetachPolicyFromGroupResponse> DetachPolicyFromGroupAsync(DetachPolicyFromGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachPolicyFromGroupWithOptionsAsync(request, runtime);
        }

        public AttachPolicyToUserResponse AttachPolicyToUserWithOptions(AttachPolicyToUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachPolicyToUserResponse>(DoRequest("AttachPolicyToUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachPolicyToUserResponse> AttachPolicyToUserWithOptionsAsync(AttachPolicyToUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachPolicyToUserResponse>(await DoRequestAsync("AttachPolicyToUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public AttachPolicyToUserResponse AttachPolicyToUser(AttachPolicyToUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachPolicyToUserWithOptions(request, runtime);
        }

        public async Task<AttachPolicyToUserResponse> AttachPolicyToUserAsync(AttachPolicyToUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachPolicyToUserWithOptionsAsync(request, runtime);
        }

        public AttachPolicyToGroupResponse AttachPolicyToGroupWithOptions(AttachPolicyToGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachPolicyToGroupResponse>(DoRequest("AttachPolicyToGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachPolicyToGroupResponse> AttachPolicyToGroupWithOptionsAsync(AttachPolicyToGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachPolicyToGroupResponse>(await DoRequestAsync("AttachPolicyToGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public AttachPolicyToGroupResponse AttachPolicyToGroup(AttachPolicyToGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachPolicyToGroupWithOptions(request, runtime);
        }

        public async Task<AttachPolicyToGroupResponse> AttachPolicyToGroupAsync(AttachPolicyToGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachPolicyToGroupWithOptionsAsync(request, runtime);
        }

        public ListPoliciesResponse ListPoliciesWithOptions(ListPoliciesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesResponse>(DoRequest("ListPolicies", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListPoliciesResponse> ListPoliciesWithOptionsAsync(ListPoliciesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPoliciesResponse>(await DoRequestAsync("ListPolicies", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListPoliciesResponse ListPolicies(ListPoliciesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListPoliciesWithOptions(request, runtime);
        }

        public async Task<ListPoliciesResponse> ListPoliciesAsync(ListPoliciesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListPoliciesWithOptionsAsync(request, runtime);
        }

        public GetPolicyResponse GetPolicyWithOptions(GetPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPolicyResponse>(DoRequest("GetPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetPolicyResponse> GetPolicyWithOptionsAsync(GetPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPolicyResponse>(await DoRequestAsync("GetPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetPolicyResponse GetPolicy(GetPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetPolicyWithOptions(request, runtime);
        }

        public async Task<GetPolicyResponse> GetPolicyAsync(GetPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetPolicyWithOptionsAsync(request, runtime);
        }

        public DeletePolicyResponse DeletePolicyWithOptions(DeletePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePolicyResponse>(DoRequest("DeletePolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeletePolicyResponse> DeletePolicyWithOptionsAsync(DeletePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeletePolicyResponse>(await DoRequestAsync("DeletePolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeletePolicyResponse DeletePolicy(DeletePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeletePolicyWithOptions(request, runtime);
        }

        public async Task<DeletePolicyResponse> DeletePolicyAsync(DeletePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeletePolicyWithOptionsAsync(request, runtime);
        }

        public CreatePolicyResponse CreatePolicyWithOptions(CreatePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePolicyResponse>(DoRequest("CreatePolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreatePolicyResponse> CreatePolicyWithOptionsAsync(CreatePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreatePolicyResponse>(await DoRequestAsync("CreatePolicy", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreatePolicyResponse CreatePolicy(CreatePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreatePolicyWithOptions(request, runtime);
        }

        public async Task<CreatePolicyResponse> CreatePolicyAsync(CreatePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreatePolicyWithOptionsAsync(request, runtime);
        }

        public RemoveUserFromGroupResponse RemoveUserFromGroupWithOptions(RemoveUserFromGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveUserFromGroupResponse>(DoRequest("RemoveUserFromGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveUserFromGroupResponse> RemoveUserFromGroupWithOptionsAsync(RemoveUserFromGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveUserFromGroupResponse>(await DoRequestAsync("RemoveUserFromGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public RemoveUserFromGroupResponse RemoveUserFromGroup(RemoveUserFromGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveUserFromGroupWithOptions(request, runtime);
        }

        public async Task<RemoveUserFromGroupResponse> RemoveUserFromGroupAsync(RemoveUserFromGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveUserFromGroupWithOptionsAsync(request, runtime);
        }

        public ListUsersForGroupResponse ListUsersForGroupWithOptions(ListUsersForGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListUsersForGroupResponse>(DoRequest("ListUsersForGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListUsersForGroupResponse> ListUsersForGroupWithOptionsAsync(ListUsersForGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListUsersForGroupResponse>(await DoRequestAsync("ListUsersForGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListUsersForGroupResponse ListUsersForGroup(ListUsersForGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListUsersForGroupWithOptions(request, runtime);
        }

        public async Task<ListUsersForGroupResponse> ListUsersForGroupAsync(ListUsersForGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListUsersForGroupWithOptionsAsync(request, runtime);
        }

        public ListGroupsForUserResponse ListGroupsForUserWithOptions(ListGroupsForUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListGroupsForUserResponse>(DoRequest("ListGroupsForUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListGroupsForUserResponse> ListGroupsForUserWithOptionsAsync(ListGroupsForUserRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListGroupsForUserResponse>(await DoRequestAsync("ListGroupsForUser", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListGroupsForUserResponse ListGroupsForUser(ListGroupsForUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListGroupsForUserWithOptions(request, runtime);
        }

        public async Task<ListGroupsForUserResponse> ListGroupsForUserAsync(ListGroupsForUserRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListGroupsForUserWithOptionsAsync(request, runtime);
        }

        public AddUserToGroupResponse AddUserToGroupWithOptions(AddUserToGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddUserToGroupResponse>(DoRequest("AddUserToGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddUserToGroupResponse> AddUserToGroupWithOptionsAsync(AddUserToGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddUserToGroupResponse>(await DoRequestAsync("AddUserToGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public AddUserToGroupResponse AddUserToGroup(AddUserToGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddUserToGroupWithOptions(request, runtime);
        }

        public async Task<AddUserToGroupResponse> AddUserToGroupAsync(AddUserToGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddUserToGroupWithOptionsAsync(request, runtime);
        }

        public UpdateGroupResponse UpdateGroupWithOptions(UpdateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGroupResponse>(DoRequest("UpdateGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateGroupResponse> UpdateGroupWithOptionsAsync(UpdateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGroupResponse>(await DoRequestAsync("UpdateGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public UpdateGroupResponse UpdateGroup(UpdateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateGroupWithOptions(request, runtime);
        }

        public async Task<UpdateGroupResponse> UpdateGroupAsync(UpdateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateGroupWithOptionsAsync(request, runtime);
        }

        public ListGroupsResponse ListGroupsWithOptions(ListGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListGroupsResponse>(DoRequest("ListGroups", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListGroupsResponse> ListGroupsWithOptionsAsync(ListGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListGroupsResponse>(await DoRequestAsync("ListGroups", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public ListGroupsResponse ListGroups(ListGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListGroupsWithOptions(request, runtime);
        }

        public async Task<ListGroupsResponse> ListGroupsAsync(ListGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListGroupsWithOptionsAsync(request, runtime);
        }

        public GetGroupResponse GetGroupWithOptions(GetGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetGroupResponse>(DoRequest("GetGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetGroupResponse> GetGroupWithOptionsAsync(GetGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetGroupResponse>(await DoRequestAsync("GetGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public GetGroupResponse GetGroup(GetGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetGroupWithOptions(request, runtime);
        }

        public async Task<GetGroupResponse> GetGroupAsync(GetGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetGroupWithOptionsAsync(request, runtime);
        }

        public DeleteGroupResponse DeleteGroupWithOptions(DeleteGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGroupResponse>(DoRequest("DeleteGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteGroupResponse> DeleteGroupWithOptionsAsync(DeleteGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGroupResponse>(await DoRequestAsync("DeleteGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteGroupResponse DeleteGroup(DeleteGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteGroupWithOptions(request, runtime);
        }

        public async Task<DeleteGroupResponse> DeleteGroupAsync(DeleteGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteGroupWithOptionsAsync(request, runtime);
        }

        public CreateGroupResponse CreateGroupWithOptions(CreateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGroupResponse>(DoRequest("CreateGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateGroupResponse> CreateGroupWithOptionsAsync(CreateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGroupResponse>(await DoRequestAsync("CreateGroup", "HTTPS", "POST", "2015-05-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateGroupResponse CreateGroup(CreateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateGroupWithOptions(request, runtime);
        }

        public async Task<CreateGroupResponse> CreateGroupAsync(CreateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateGroupWithOptionsAsync(request, runtime);
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
