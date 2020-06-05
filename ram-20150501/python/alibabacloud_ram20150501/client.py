# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_ram20150501 import models as ram_20150501_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "central"
        self.check_config(config)
        self._endpoint = self.get_endpoint("ram", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def get_access_key_last_used_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetAccessKeyLastUsedResponse().from_map(self.do_request("GetAccessKeyLastUsed", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_access_key_last_used(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_access_key_last_used_with_options(request, runtime)

    def change_password_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ChangePasswordResponse().from_map(self.do_request("ChangePassword", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def change_password(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.change_password_with_options(request, runtime)

    def update_role_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.UpdateRoleResponse().from_map(self.do_request("UpdateRole", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def update_role(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_role_with_options(request, runtime)

    def set_security_preference_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.SetSecurityPreferenceResponse().from_map(self.do_request("SetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def set_security_preference(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_security_preference_with_options(request, runtime)

    def list_roles_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListRolesResponse().from_map(self.do_request("ListRoles", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_roles(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_roles_with_options(request, runtime)

    def list_policies_for_role_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListPoliciesForRoleResponse().from_map(self.do_request("ListPoliciesForRole", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_policies_for_role(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_policies_for_role_with_options(request, runtime)

    def get_security_preference_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetSecurityPreferenceResponse().from_map(self.do_request("GetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_security_preference(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_security_preference_with_options(request, runtime)

    def get_role_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetRoleResponse().from_map(self.do_request("GetRole", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_role(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_role_with_options(request, runtime)

    def detach_policy_from_role_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DetachPolicyFromRoleResponse().from_map(self.do_request("DetachPolicyFromRole", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def detach_policy_from_role(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.detach_policy_from_role_with_options(request, runtime)

    def delete_role_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeleteRoleResponse().from_map(self.do_request("DeleteRole", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_role(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_role_with_options(request, runtime)

    def create_role_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreateRoleResponse().from_map(self.do_request("CreateRole", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_role(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_role_with_options(request, runtime)

    def attach_policy_to_role_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.AttachPolicyToRoleResponse().from_map(self.do_request("AttachPolicyToRole", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def attach_policy_to_role(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.attach_policy_to_role_with_options(request, runtime)

    def unbind_mfadevice_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.UnbindMFADeviceResponse().from_map(self.do_request("UnbindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def unbind_mfadevice(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.unbind_mfadevice_with_options(request, runtime)

    def list_virtual_mfadevices_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListVirtualMFADevicesResponse().from_map(self.do_request("ListVirtualMFADevices", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_virtual_mfadevices(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_virtual_mfadevices_with_options(request, runtime)

    def get_user_mfainfo_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetUserMFAInfoResponse().from_map(self.do_request("GetUserMFAInfo", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_user_mfainfo(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_user_mfainfo_with_options(request, runtime)

    def delete_virtual_mfadevice_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeleteVirtualMFADeviceResponse().from_map(self.do_request("DeleteVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_virtual_mfadevice(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_virtual_mfadevice_with_options(request, runtime)

    def create_virtual_mfadevice_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreateVirtualMFADeviceResponse().from_map(self.do_request("CreateVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_virtual_mfadevice(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_virtual_mfadevice_with_options(request, runtime)

    def bind_mfadevice_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.BindMFADeviceResponse().from_map(self.do_request("BindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def bind_mfadevice(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.bind_mfadevice_with_options(request, runtime)

    def update_login_profile_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.UpdateLoginProfileResponse().from_map(self.do_request("UpdateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def update_login_profile(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_login_profile_with_options(request, runtime)

    def get_login_profile_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetLoginProfileResponse().from_map(self.do_request("GetLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_login_profile(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_login_profile_with_options(request, runtime)

    def delete_login_profile_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeleteLoginProfileResponse().from_map(self.do_request("DeleteLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_login_profile(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_login_profile_with_options(request, runtime)

    def create_login_profile_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreateLoginProfileResponse().from_map(self.do_request("CreateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_login_profile(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_login_profile_with_options(request, runtime)

    def update_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.UpdateUserResponse().from_map(self.do_request("UpdateUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def update_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_user_with_options(request, runtime)

    def list_users_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListUsersResponse().from_map(self.do_request("ListUsers", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_users(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_users_with_options(request, runtime)

    def get_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetUserResponse().from_map(self.do_request("GetUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_user_with_options(request, runtime)

    def delete_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeleteUserResponse().from_map(self.do_request("DeleteUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_user_with_options(request, runtime)

    def create_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreateUserResponse().from_map(self.do_request("CreateUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_user_with_options(request, runtime)

    def update_access_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.UpdateAccessKeyResponse().from_map(self.do_request("UpdateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def update_access_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_access_key_with_options(request, runtime)

    def list_access_keys_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListAccessKeysResponse().from_map(self.do_request("ListAccessKeys", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_access_keys(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_access_keys_with_options(request, runtime)

    def delete_access_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeleteAccessKeyResponse().from_map(self.do_request("DeleteAccessKey", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_access_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_access_key_with_options(request, runtime)

    def create_access_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreateAccessKeyResponse().from_map(self.do_request("CreateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_access_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_access_key_with_options(request, runtime)

    def set_password_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.SetPasswordPolicyResponse().from_map(self.do_request("SetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def set_password_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_password_policy_with_options(request, runtime)

    def set_account_alias_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.SetAccountAliasResponse().from_map(self.do_request("SetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def set_account_alias(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_account_alias_with_options(request, runtime)

    def get_password_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetPasswordPolicyResponse().from_map(self.do_request("GetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_password_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_password_policy_with_options(request, runtime)

    def get_account_alias_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetAccountAliasResponse().from_map(self.do_request("GetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_account_alias(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_account_alias_with_options(request, runtime)

    def clear_account_alias_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ClearAccountAliasResponse().from_map(self.do_request("ClearAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def clear_account_alias(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.clear_account_alias_with_options(request, runtime)

    def set_default_policy_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.SetDefaultPolicyVersionResponse().from_map(self.do_request("SetDefaultPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def set_default_policy_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_default_policy_version_with_options(request, runtime)

    def list_policy_versions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListPolicyVersionsResponse().from_map(self.do_request("ListPolicyVersions", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_policy_versions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_policy_versions_with_options(request, runtime)

    def get_policy_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetPolicyVersionResponse().from_map(self.do_request("GetPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_policy_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_policy_version_with_options(request, runtime)

    def delete_policy_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeletePolicyVersionResponse().from_map(self.do_request("DeletePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_policy_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_policy_version_with_options(request, runtime)

    def create_policy_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreatePolicyVersionResponse().from_map(self.do_request("CreatePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_policy_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_policy_version_with_options(request, runtime)

    def list_policies_for_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListPoliciesForUserResponse().from_map(self.do_request("ListPoliciesForUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_policies_for_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_policies_for_user_with_options(request, runtime)

    def list_policies_for_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListPoliciesForGroupResponse().from_map(self.do_request("ListPoliciesForGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_policies_for_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_policies_for_group_with_options(request, runtime)

    def list_entities_for_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListEntitiesForPolicyResponse().from_map(self.do_request("ListEntitiesForPolicy", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_entities_for_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_entities_for_policy_with_options(request, runtime)

    def detach_policy_from_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DetachPolicyFromUserResponse().from_map(self.do_request("DetachPolicyFromUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def detach_policy_from_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.detach_policy_from_user_with_options(request, runtime)

    def detach_policy_from_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DetachPolicyFromGroupResponse().from_map(self.do_request("DetachPolicyFromGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def detach_policy_from_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.detach_policy_from_group_with_options(request, runtime)

    def attach_policy_to_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.AttachPolicyToUserResponse().from_map(self.do_request("AttachPolicyToUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def attach_policy_to_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.attach_policy_to_user_with_options(request, runtime)

    def attach_policy_to_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.AttachPolicyToGroupResponse().from_map(self.do_request("AttachPolicyToGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def attach_policy_to_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.attach_policy_to_group_with_options(request, runtime)

    def list_policies_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListPoliciesResponse().from_map(self.do_request("ListPolicies", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_policies(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_policies_with_options(request, runtime)

    def get_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetPolicyResponse().from_map(self.do_request("GetPolicy", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_policy_with_options(request, runtime)

    def delete_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeletePolicyResponse().from_map(self.do_request("DeletePolicy", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_policy_with_options(request, runtime)

    def create_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreatePolicyResponse().from_map(self.do_request("CreatePolicy", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_policy_with_options(request, runtime)

    def remove_user_from_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.RemoveUserFromGroupResponse().from_map(self.do_request("RemoveUserFromGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def remove_user_from_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_user_from_group_with_options(request, runtime)

    def list_users_for_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListUsersForGroupResponse().from_map(self.do_request("ListUsersForGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_users_for_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_users_for_group_with_options(request, runtime)

    def list_groups_for_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListGroupsForUserResponse().from_map(self.do_request("ListGroupsForUser", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_groups_for_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_groups_for_user_with_options(request, runtime)

    def add_user_to_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.AddUserToGroupResponse().from_map(self.do_request("AddUserToGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def add_user_to_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_user_to_group_with_options(request, runtime)

    def update_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.UpdateGroupResponse().from_map(self.do_request("UpdateGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def update_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_group_with_options(request, runtime)

    def list_groups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.ListGroupsResponse().from_map(self.do_request("ListGroups", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def list_groups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_groups_with_options(request, runtime)

    def get_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.GetGroupResponse().from_map(self.do_request("GetGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def get_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_group_with_options(request, runtime)

    def delete_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.DeleteGroupResponse().from_map(self.do_request("DeleteGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def delete_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_group_with_options(request, runtime)

    def create_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return ram_20150501_models.CreateGroupResponse().from_map(self.do_request("CreateGroup", "HTTPS", "POST", "2015-05-01", "AK", None, request.to_map(), runtime))


    def create_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_group_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
