<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ram\V20150501\Models\AddUserToGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AddUserToGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\BindMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\BindMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ChangePasswordRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ChangePasswordResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ClearAccountAliasRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ClearAccountAliasResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteAccessKeyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteAccessKeyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccountAliasRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccountAliasResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPasswordPolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\RemoveUserFromGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\RemoveUserFromGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetAccountAliasRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetAccountAliasResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetDefaultPolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetDefaultPolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetPasswordPolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateAccessKeyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateAccessKeyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ram extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ram', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsedWithOptions(GetAccessKeyLastUsedRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAccessKeyLastUsedResponse::fromMap($this->doRequest('GetAccessKeyLastUsed', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsed(GetAccessKeyLastUsedRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ChangePasswordResponse
     */
    public function changePasswordWithOptions(ChangePasswordRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ChangePasswordResponse::fromMap($this->doRequest('ChangePassword', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ChangePasswordResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changePasswordWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions(UpdateRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateRoleResponse::fromMap($this->doRequest('UpdateRole', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRoleResponse
     */
    public function updateRole(UpdateRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreferenceWithOptions(SetSecurityPreferenceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetSecurityPreferenceResponse::fromMap($this->doRequest('SetSecurityPreference', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreference(SetSecurityPreferenceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSecurityPreferenceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions(ListRolesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListRolesResponse::fromMap($this->doRequest('ListRoles', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListRolesResponse
     */
    public function listRoles(ListRolesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesForRoleResponse
     */
    public function listPoliciesForRoleWithOptions(ListPoliciesForRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListPoliciesForRoleResponse::fromMap($this->doRequest('ListPoliciesForRole', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesForRoleResponse
     */
    public function listPoliciesForRole(ListPoliciesForRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreferenceWithOptions(GetSecurityPreferenceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetSecurityPreferenceResponse::fromMap($this->doRequest('GetSecurityPreference', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreference(GetSecurityPreferenceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityPreferenceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions(GetRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRoleResponse::fromMap($this->doRequest('GetRole', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRoleResponse
     */
    public function getRole(GetRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachPolicyFromRoleResponse
     */
    public function detachPolicyFromRoleWithOptions(DetachPolicyFromRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachPolicyFromRoleResponse::fromMap($this->doRequest('DetachPolicyFromRole', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachPolicyFromRoleResponse
     */
    public function detachPolicyFromRole(DetachPolicyFromRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions(DeleteRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteRoleResponse::fromMap($this->doRequest('DeleteRole', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRoleResponse
     */
    public function deleteRole(DeleteRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions(CreateRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateRoleResponse::fromMap($this->doRequest('CreateRole', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateRoleResponse
     */
    public function createRole(CreateRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachPolicyToRoleResponse
     */
    public function attachPolicyToRoleWithOptions(AttachPolicyToRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachPolicyToRoleResponse::fromMap($this->doRequest('AttachPolicyToRole', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachPolicyToRoleResponse
     */
    public function attachPolicyToRole(AttachPolicyToRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnbindMFADeviceResponse
     */
    public function unbindMFADeviceWithOptions(UnbindMFADeviceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnbindMFADeviceResponse::fromMap($this->doRequest('UnbindMFADevice', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnbindMFADeviceResponse
     */
    public function unbindMFADevice(UnbindMFADeviceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevicesWithOptions(ListVirtualMFADevicesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListVirtualMFADevicesResponse::fromMap($this->doRequest('ListVirtualMFADevices', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices(ListVirtualMFADevicesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualMFADevicesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetUserMFAInfoResponse
     */
    public function getUserMFAInfoWithOptions(GetUserMFAInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetUserMFAInfoResponse::fromMap($this->doRequest('GetUserMFAInfo', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetUserMFAInfoResponse
     */
    public function getUserMFAInfo(GetUserMFAInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions(DeleteVirtualMFADeviceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVirtualMFADeviceResponse::fromMap($this->doRequest('DeleteVirtualMFADevice', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADevice(DeleteVirtualMFADeviceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADeviceWithOptions(CreateVirtualMFADeviceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateVirtualMFADeviceResponse::fromMap($this->doRequest('CreateVirtualMFADevice', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADevice(CreateVirtualMFADeviceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BindMFADeviceResponse
     */
    public function bindMFADeviceWithOptions(BindMFADeviceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BindMFADeviceResponse::fromMap($this->doRequest('BindMFADevice', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BindMFADeviceResponse
     */
    public function bindMFADevice(BindMFADeviceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateLoginProfileResponse
     */
    public function updateLoginProfileWithOptions(UpdateLoginProfileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateLoginProfileResponse::fromMap($this->doRequest('UpdateLoginProfile', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateLoginProfileResponse
     */
    public function updateLoginProfile(UpdateLoginProfileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetLoginProfileResponse
     */
    public function getLoginProfileWithOptions(GetLoginProfileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetLoginProfileResponse::fromMap($this->doRequest('GetLoginProfile', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetLoginProfileResponse
     */
    public function getLoginProfile(GetLoginProfileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLoginProfileResponse
     */
    public function deleteLoginProfileWithOptions(DeleteLoginProfileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteLoginProfileResponse::fromMap($this->doRequest('DeleteLoginProfile', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLoginProfileResponse
     */
    public function deleteLoginProfile(DeleteLoginProfileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfileWithOptions(CreateLoginProfileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateLoginProfileResponse::fromMap($this->doRequest('CreateLoginProfile', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfile(CreateLoginProfileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions(UpdateUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateUserResponse::fromMap($this->doRequest('UpdateUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateUserResponse
     */
    public function updateUser(UpdateUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions(ListUsersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListUsersResponse::fromMap($this->doRequest('ListUsers', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListUsersResponse
     */
    public function listUsers(ListUsersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions(GetUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetUserResponse::fromMap($this->doRequest('GetUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetUserResponse
     */
    public function getUser(GetUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions(DeleteUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteUserResponse::fromMap($this->doRequest('DeleteUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteUserResponse
     */
    public function deleteUser(DeleteUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions(CreateUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateUserResponse::fromMap($this->doRequest('CreateUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateUserResponse
     */
    public function createUser(CreateUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAccessKeyResponse
     */
    public function updateAccessKeyWithOptions(UpdateAccessKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAccessKeyResponse::fromMap($this->doRequest('UpdateAccessKey', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAccessKeyResponse
     */
    public function updateAccessKey(UpdateAccessKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAccessKeysResponse
     */
    public function listAccessKeysWithOptions(ListAccessKeysRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAccessKeysResponse::fromMap($this->doRequest('ListAccessKeys', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAccessKeysResponse
     */
    public function listAccessKeys(ListAccessKeysRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessKeysWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccessKeyResponse
     */
    public function deleteAccessKeyWithOptions(DeleteAccessKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccessKeyResponse::fromMap($this->doRequest('DeleteAccessKey', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccessKeyResponse
     */
    public function deleteAccessKey(DeleteAccessKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccessKeyResponse
     */
    public function createAccessKeyWithOptions(CreateAccessKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAccessKeyResponse::fromMap($this->doRequest('CreateAccessKey', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccessKeyResponse
     */
    public function createAccessKey(CreateAccessKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetPasswordPolicyResponse
     */
    public function setPasswordPolicyWithOptions(SetPasswordPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetPasswordPolicyResponse::fromMap($this->doRequest('SetPasswordPolicy', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetPasswordPolicyResponse
     */
    public function setPasswordPolicy(SetPasswordPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetAccountAliasResponse
     */
    public function setAccountAliasWithOptions(SetAccountAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetAccountAliasResponse::fromMap($this->doRequest('SetAccountAlias', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetAccountAliasResponse
     */
    public function setAccountAlias(SetAccountAliasRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccountAliasWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions(GetPasswordPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPasswordPolicyResponse::fromMap($this->doRequest('GetPasswordPolicy', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicy(GetPasswordPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAccountAliasResponse
     */
    public function getAccountAliasWithOptions(GetAccountAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAccountAliasResponse::fromMap($this->doRequest('GetAccountAlias', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAccountAliasResponse
     */
    public function getAccountAlias(GetAccountAliasRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountAliasWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ClearAccountAliasResponse
     */
    public function clearAccountAliasWithOptions(ClearAccountAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ClearAccountAliasResponse::fromMap($this->doRequest('ClearAccountAlias', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ClearAccountAliasResponse
     */
    public function clearAccountAlias(ClearAccountAliasRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearAccountAliasWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersionWithOptions(SetDefaultPolicyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDefaultPolicyVersionResponse::fromMap($this->doRequest('SetDefaultPolicyVersion', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersion(SetDefaultPolicyVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersionsWithOptions(ListPolicyVersionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListPolicyVersionsResponse::fromMap($this->doRequest('ListPolicyVersions', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersions(ListPolicyVersionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyVersionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersionWithOptions(GetPolicyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPolicyVersionResponse::fromMap($this->doRequest('GetPolicyVersion', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersion(GetPolicyVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersionWithOptions(DeletePolicyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeletePolicyVersionResponse::fromMap($this->doRequest('DeletePolicyVersion', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersion(DeletePolicyVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersionWithOptions(CreatePolicyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreatePolicyVersionResponse::fromMap($this->doRequest('CreatePolicyVersion', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersion(CreatePolicyVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesForUserResponse
     */
    public function listPoliciesForUserWithOptions(ListPoliciesForUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListPoliciesForUserResponse::fromMap($this->doRequest('ListPoliciesForUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesForUserResponse
     */
    public function listPoliciesForUser(ListPoliciesForUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesForGroupResponse
     */
    public function listPoliciesForGroupWithOptions(ListPoliciesForGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListPoliciesForGroupResponse::fromMap($this->doRequest('ListPoliciesForGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesForGroupResponse
     */
    public function listPoliciesForGroup(ListPoliciesForGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicyWithOptions(ListEntitiesForPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListEntitiesForPolicyResponse::fromMap($this->doRequest('ListEntitiesForPolicy', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicy(ListEntitiesForPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntitiesForPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachPolicyFromUserResponse
     */
    public function detachPolicyFromUserWithOptions(DetachPolicyFromUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachPolicyFromUserResponse::fromMap($this->doRequest('DetachPolicyFromUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachPolicyFromUserResponse
     */
    public function detachPolicyFromUser(DetachPolicyFromUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachPolicyFromGroupResponse
     */
    public function detachPolicyFromGroupWithOptions(DetachPolicyFromGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachPolicyFromGroupResponse::fromMap($this->doRequest('DetachPolicyFromGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachPolicyFromGroupResponse
     */
    public function detachPolicyFromGroup(DetachPolicyFromGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachPolicyToUserResponse
     */
    public function attachPolicyToUserWithOptions(AttachPolicyToUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachPolicyToUserResponse::fromMap($this->doRequest('AttachPolicyToUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachPolicyToUserResponse
     */
    public function attachPolicyToUser(AttachPolicyToUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachPolicyToGroupResponse
     */
    public function attachPolicyToGroupWithOptions(AttachPolicyToGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachPolicyToGroupResponse::fromMap($this->doRequest('AttachPolicyToGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachPolicyToGroupResponse
     */
    public function attachPolicyToGroup(AttachPolicyToGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions(ListPoliciesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListPoliciesResponse::fromMap($this->doRequest('ListPolicies', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies(ListPoliciesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions(GetPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPolicyResponse::fromMap($this->doRequest('GetPolicy', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPolicyResponse
     */
    public function getPolicy(GetPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions(DeletePolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeletePolicyResponse::fromMap($this->doRequest('DeletePolicy', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy(DeletePolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions(CreatePolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreatePolicyResponse::fromMap($this->doRequest('CreatePolicy', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy(CreatePolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions(RemoveUserFromGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveUserFromGroupResponse::fromMap($this->doRequest('RemoveUserFromGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroup(RemoveUserFromGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions(ListUsersForGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListUsersForGroupResponse::fromMap($this->doRequest('ListUsersForGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroup(ListUsersForGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions(ListGroupsForUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListGroupsForUserResponse::fromMap($this->doRequest('ListGroupsForUser', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUser(ListGroupsForUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions(AddUserToGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddUserToGroupResponse::fromMap($this->doRequest('AddUserToGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroup(AddUserToGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions(UpdateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateGroupResponse::fromMap($this->doRequest('UpdateGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup(UpdateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions(ListGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListGroupsResponse::fromMap($this->doRequest('ListGroups', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListGroupsResponse
     */
    public function listGroups(ListGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions(GetGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetGroupResponse::fromMap($this->doRequest('GetGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetGroupResponse
     */
    public function getGroup(GetGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions(DeleteGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteGroupResponse::fromMap($this->doRequest('DeleteGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup(DeleteGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions(CreateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateGroupResponse::fromMap($this->doRequest('CreateGroup', 'HTTPS', 'POST', '2015-05-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateGroupResponse
     */
    public function createGroup(CreateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
