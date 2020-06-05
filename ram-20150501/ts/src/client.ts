// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class GetAccessKeyLastUsedRequest extends $tea.Model {
  userName?: string;
  userAccessKeyId?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      userAccessKeyId: 'UserAccessKeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      userAccessKeyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAccessKeyLastUsedResponse extends $tea.Model {
  requestId: string;
  accessKeyLastUsed: GetAccessKeyLastUsedResponseAccessKeyLastUsed;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      accessKeyLastUsed: 'AccessKeyLastUsed',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      accessKeyLastUsed: GetAccessKeyLastUsedResponseAccessKeyLastUsed,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangePasswordRequest extends $tea.Model {
  oldPassword?: string;
  newPassword?: string;
  static names(): { [key: string]: string } {
    return {
      oldPassword: 'OldPassword',
      newPassword: 'NewPassword',
    };
  }

  static types(): { [key: string]: any } {
    return {
      oldPassword: 'string',
      newPassword: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangePasswordResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateRoleRequest extends $tea.Model {
  roleName?: string;
  newAssumeRolePolicyDocument?: string;
  newMaxSessionDuration?: number;
  static names(): { [key: string]: string } {
    return {
      roleName: 'RoleName',
      newAssumeRolePolicyDocument: 'NewAssumeRolePolicyDocument',
      newMaxSessionDuration: 'NewMaxSessionDuration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleName: 'string',
      newAssumeRolePolicyDocument: 'string',
      newMaxSessionDuration: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateRoleResponse extends $tea.Model {
  requestId: string;
  role: UpdateRoleResponseRole;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      role: 'Role',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      role: UpdateRoleResponseRole,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetSecurityPreferenceRequest extends $tea.Model {
  enableSaveMFATicket?: boolean;
  allowUserToChangePassword?: boolean;
  allowUserToManageAccessKeys?: boolean;
  allowUserToManagePublicKeys?: boolean;
  allowUserToManageMFADevices?: boolean;
  loginSessionDuration?: number;
  loginNetworkMasks?: string;
  static names(): { [key: string]: string } {
    return {
      enableSaveMFATicket: 'EnableSaveMFATicket',
      allowUserToChangePassword: 'AllowUserToChangePassword',
      allowUserToManageAccessKeys: 'AllowUserToManageAccessKeys',
      allowUserToManagePublicKeys: 'AllowUserToManagePublicKeys',
      allowUserToManageMFADevices: 'AllowUserToManageMFADevices',
      loginSessionDuration: 'LoginSessionDuration',
      loginNetworkMasks: 'LoginNetworkMasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enableSaveMFATicket: 'boolean',
      allowUserToChangePassword: 'boolean',
      allowUserToManageAccessKeys: 'boolean',
      allowUserToManagePublicKeys: 'boolean',
      allowUserToManageMFADevices: 'boolean',
      loginSessionDuration: 'number',
      loginNetworkMasks: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetSecurityPreferenceResponse extends $tea.Model {
  requestId: string;
  securityPreference: SetSecurityPreferenceResponseSecurityPreference;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      securityPreference: 'SecurityPreference',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      securityPreference: SetSecurityPreferenceResponseSecurityPreference,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRolesRequest extends $tea.Model {
  marker?: string;
  maxItems?: number;
  static names(): { [key: string]: string } {
    return {
      marker: 'Marker',
      maxItems: 'MaxItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      marker: 'string',
      maxItems: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRolesResponse extends $tea.Model {
  requestId: string;
  isTruncated: boolean;
  marker: string;
  roles: ListRolesResponseRoles;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isTruncated: 'IsTruncated',
      marker: 'Marker',
      roles: 'Roles',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isTruncated: 'boolean',
      marker: 'string',
      roles: ListRolesResponseRoles,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForRoleRequest extends $tea.Model {
  roleName?: string;
  static names(): { [key: string]: string } {
    return {
      roleName: 'RoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForRoleResponse extends $tea.Model {
  requestId: string;
  policies: ListPoliciesForRoleResponsePolicies;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policies: 'Policies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policies: ListPoliciesForRoleResponsePolicies,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecurityPreferenceRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecurityPreferenceResponse extends $tea.Model {
  requestId: string;
  securityPreference: GetSecurityPreferenceResponseSecurityPreference;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      securityPreference: 'SecurityPreference',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      securityPreference: GetSecurityPreferenceResponseSecurityPreference,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRoleRequest extends $tea.Model {
  roleName?: string;
  static names(): { [key: string]: string } {
    return {
      roleName: 'RoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRoleResponse extends $tea.Model {
  requestId: string;
  role: GetRoleResponseRole;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      role: 'Role',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      role: GetRoleResponseRole,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachPolicyFromRoleRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  roleName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
      roleName: 'RoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
      roleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachPolicyFromRoleResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRoleRequest extends $tea.Model {
  roleName?: string;
  static names(): { [key: string]: string } {
    return {
      roleName: 'RoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRoleResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRoleRequest extends $tea.Model {
  roleName?: string;
  description?: string;
  assumeRolePolicyDocument?: string;
  maxSessionDuration?: number;
  static names(): { [key: string]: string } {
    return {
      roleName: 'RoleName',
      description: 'Description',
      assumeRolePolicyDocument: 'AssumeRolePolicyDocument',
      maxSessionDuration: 'MaxSessionDuration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleName: 'string',
      description: 'string',
      assumeRolePolicyDocument: 'string',
      maxSessionDuration: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRoleResponse extends $tea.Model {
  requestId: string;
  role: CreateRoleResponseRole;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      role: 'Role',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      role: CreateRoleResponseRole,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachPolicyToRoleRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  roleName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
      roleName: 'RoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
      roleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachPolicyToRoleResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindMFADeviceRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindMFADeviceResponse extends $tea.Model {
  requestId: string;
  MFADevice: UnbindMFADeviceResponseMFADevice;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      MFADevice: 'MFADevice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      MFADevice: UnbindMFADeviceResponseMFADevice,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVirtualMFADevicesRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVirtualMFADevicesResponse extends $tea.Model {
  requestId: string;
  virtualMFADevices: ListVirtualMFADevicesResponseVirtualMFADevices;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      virtualMFADevices: 'VirtualMFADevices',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      virtualMFADevices: ListVirtualMFADevicesResponseVirtualMFADevices,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUserMFAInfoRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUserMFAInfoResponse extends $tea.Model {
  requestId: string;
  MFADevice: GetUserMFAInfoResponseMFADevice;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      MFADevice: 'MFADevice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      MFADevice: GetUserMFAInfoResponseMFADevice,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVirtualMFADeviceRequest extends $tea.Model {
  serialNumber?: string;
  static names(): { [key: string]: string } {
    return {
      serialNumber: 'SerialNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serialNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVirtualMFADeviceResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVirtualMFADeviceRequest extends $tea.Model {
  virtualMFADeviceName?: string;
  static names(): { [key: string]: string } {
    return {
      virtualMFADeviceName: 'VirtualMFADeviceName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      virtualMFADeviceName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVirtualMFADeviceResponse extends $tea.Model {
  requestId: string;
  virtualMFADevice: CreateVirtualMFADeviceResponseVirtualMFADevice;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      virtualMFADevice: 'VirtualMFADevice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      virtualMFADevice: CreateVirtualMFADeviceResponseVirtualMFADevice,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindMFADeviceRequest extends $tea.Model {
  serialNumber?: string;
  userName?: string;
  authenticationCode1?: string;
  authenticationCode2?: string;
  static names(): { [key: string]: string } {
    return {
      serialNumber: 'SerialNumber',
      userName: 'UserName',
      authenticationCode1: 'AuthenticationCode1',
      authenticationCode2: 'AuthenticationCode2',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serialNumber: 'string',
      userName: 'string',
      authenticationCode1: 'string',
      authenticationCode2: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindMFADeviceResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateLoginProfileRequest extends $tea.Model {
  userName?: string;
  password?: string;
  passwordResetRequired?: boolean;
  MFABindRequired?: boolean;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      password: 'Password',
      passwordResetRequired: 'PasswordResetRequired',
      MFABindRequired: 'MFABindRequired',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      password: 'string',
      passwordResetRequired: 'boolean',
      MFABindRequired: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateLoginProfileResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetLoginProfileRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetLoginProfileResponse extends $tea.Model {
  requestId: string;
  loginProfile: GetLoginProfileResponseLoginProfile;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      loginProfile: 'LoginProfile',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      loginProfile: GetLoginProfileResponseLoginProfile,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteLoginProfileRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteLoginProfileResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateLoginProfileRequest extends $tea.Model {
  userName?: string;
  password?: string;
  passwordResetRequired?: boolean;
  MFABindRequired?: boolean;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      password: 'Password',
      passwordResetRequired: 'PasswordResetRequired',
      MFABindRequired: 'MFABindRequired',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      password: 'string',
      passwordResetRequired: 'boolean',
      MFABindRequired: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateLoginProfileResponse extends $tea.Model {
  requestId: string;
  loginProfile: CreateLoginProfileResponseLoginProfile;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      loginProfile: 'LoginProfile',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      loginProfile: CreateLoginProfileResponseLoginProfile,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateUserRequest extends $tea.Model {
  userName?: string;
  newUserName?: string;
  newDisplayName?: string;
  newMobilePhone?: string;
  newEmail?: string;
  newComments?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      newUserName: 'NewUserName',
      newDisplayName: 'NewDisplayName',
      newMobilePhone: 'NewMobilePhone',
      newEmail: 'NewEmail',
      newComments: 'NewComments',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      newUserName: 'string',
      newDisplayName: 'string',
      newMobilePhone: 'string',
      newEmail: 'string',
      newComments: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateUserResponse extends $tea.Model {
  requestId: string;
  user: UpdateUserResponseUser;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      user: 'User',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      user: UpdateUserResponseUser,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersRequest extends $tea.Model {
  marker?: string;
  maxItems?: number;
  static names(): { [key: string]: string } {
    return {
      marker: 'Marker',
      maxItems: 'MaxItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      marker: 'string',
      maxItems: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersResponse extends $tea.Model {
  requestId: string;
  isTruncated: boolean;
  marker: string;
  users: ListUsersResponseUsers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isTruncated: 'IsTruncated',
      marker: 'Marker',
      users: 'Users',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isTruncated: 'boolean',
      marker: 'string',
      users: ListUsersResponseUsers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUserRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUserResponse extends $tea.Model {
  requestId: string;
  user: GetUserResponseUser;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      user: 'User',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      user: GetUserResponseUser,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteUserRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteUserResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUserRequest extends $tea.Model {
  userName?: string;
  displayName?: string;
  mobilePhone?: string;
  email?: string;
  comments?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      displayName: 'DisplayName',
      mobilePhone: 'MobilePhone',
      email: 'Email',
      comments: 'Comments',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      displayName: 'string',
      mobilePhone: 'string',
      email: 'string',
      comments: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUserResponse extends $tea.Model {
  requestId: string;
  user: CreateUserResponseUser;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      user: 'User',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      user: CreateUserResponseUser,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAccessKeyRequest extends $tea.Model {
  userName?: string;
  userAccessKeyId?: string;
  status?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      userAccessKeyId: 'UserAccessKeyId',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      userAccessKeyId: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAccessKeyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAccessKeysRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAccessKeysResponse extends $tea.Model {
  requestId: string;
  accessKeys: ListAccessKeysResponseAccessKeys;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      accessKeys: 'AccessKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      accessKeys: ListAccessKeysResponseAccessKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAccessKeyRequest extends $tea.Model {
  userName?: string;
  userAccessKeyId?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      userAccessKeyId: 'UserAccessKeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      userAccessKeyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAccessKeyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccessKeyRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccessKeyResponse extends $tea.Model {
  requestId: string;
  accessKey: CreateAccessKeyResponseAccessKey;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      accessKey: 'AccessKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      accessKey: CreateAccessKeyResponseAccessKey,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetPasswordPolicyRequest extends $tea.Model {
  minimumPasswordLength?: number;
  requireLowercaseCharacters?: boolean;
  requireUppercaseCharacters?: boolean;
  requireNumbers?: boolean;
  requireSymbols?: boolean;
  hardExpiry?: boolean;
  maxPasswordAge?: number;
  passwordReusePrevention?: number;
  maxLoginAttemps?: number;
  static names(): { [key: string]: string } {
    return {
      minimumPasswordLength: 'MinimumPasswordLength',
      requireLowercaseCharacters: 'RequireLowercaseCharacters',
      requireUppercaseCharacters: 'RequireUppercaseCharacters',
      requireNumbers: 'RequireNumbers',
      requireSymbols: 'RequireSymbols',
      hardExpiry: 'HardExpiry',
      maxPasswordAge: 'MaxPasswordAge',
      passwordReusePrevention: 'PasswordReusePrevention',
      maxLoginAttemps: 'MaxLoginAttemps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      minimumPasswordLength: 'number',
      requireLowercaseCharacters: 'boolean',
      requireUppercaseCharacters: 'boolean',
      requireNumbers: 'boolean',
      requireSymbols: 'boolean',
      hardExpiry: 'boolean',
      maxPasswordAge: 'number',
      passwordReusePrevention: 'number',
      maxLoginAttemps: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetPasswordPolicyResponse extends $tea.Model {
  requestId: string;
  passwordPolicy: SetPasswordPolicyResponsePasswordPolicy;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      passwordPolicy: 'PasswordPolicy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      passwordPolicy: SetPasswordPolicyResponsePasswordPolicy,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetAccountAliasRequest extends $tea.Model {
  accountAlias?: string;
  static names(): { [key: string]: string } {
    return {
      accountAlias: 'AccountAlias',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountAlias: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetAccountAliasResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPasswordPolicyRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPasswordPolicyResponse extends $tea.Model {
  requestId: string;
  passwordPolicy: GetPasswordPolicyResponsePasswordPolicy;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      passwordPolicy: 'PasswordPolicy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      passwordPolicy: GetPasswordPolicyResponsePasswordPolicy,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAccountAliasRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAccountAliasResponse extends $tea.Model {
  requestId: string;
  accountAlias: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      accountAlias: 'AccountAlias',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      accountAlias: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClearAccountAliasRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClearAccountAliasResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultPolicyVersionRequest extends $tea.Model {
  policyName?: string;
  versionId?: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      versionId: 'VersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      versionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultPolicyVersionResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPolicyVersionsRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPolicyVersionsResponse extends $tea.Model {
  requestId: string;
  policyVersions: ListPolicyVersionsResponsePolicyVersions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policyVersions: 'PolicyVersions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policyVersions: ListPolicyVersionsResponsePolicyVersions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPolicyVersionRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  versionId?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
      versionId: 'VersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
      versionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPolicyVersionResponse extends $tea.Model {
  requestId: string;
  policyVersion: GetPolicyVersionResponsePolicyVersion;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policyVersion: 'PolicyVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policyVersion: GetPolicyVersionResponsePolicyVersion,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeletePolicyVersionRequest extends $tea.Model {
  policyName?: string;
  versionId?: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      versionId: 'VersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      versionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeletePolicyVersionResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePolicyVersionRequest extends $tea.Model {
  policyName?: string;
  policyDocument?: string;
  setAsDefault?: boolean;
  rotateStrategy?: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      policyDocument: 'PolicyDocument',
      setAsDefault: 'SetAsDefault',
      rotateStrategy: 'RotateStrategy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      policyDocument: 'string',
      setAsDefault: 'boolean',
      rotateStrategy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePolicyVersionResponse extends $tea.Model {
  requestId: string;
  policyVersion: CreatePolicyVersionResponsePolicyVersion;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policyVersion: 'PolicyVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policyVersion: CreatePolicyVersionResponsePolicyVersion,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForUserRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForUserResponse extends $tea.Model {
  requestId: string;
  policies: ListPoliciesForUserResponsePolicies;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policies: 'Policies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policies: ListPoliciesForUserResponsePolicies,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForGroupRequest extends $tea.Model {
  groupName?: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForGroupResponse extends $tea.Model {
  requestId: string;
  policies: ListPoliciesForGroupResponsePolicies;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policies: 'Policies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policies: ListPoliciesForGroupResponsePolicies,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyResponse extends $tea.Model {
  requestId: string;
  groups: ListEntitiesForPolicyResponseGroups;
  users: ListEntitiesForPolicyResponseUsers;
  roles: ListEntitiesForPolicyResponseRoles;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      groups: 'Groups',
      users: 'Users',
      roles: 'Roles',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      groups: ListEntitiesForPolicyResponseGroups,
      users: ListEntitiesForPolicyResponseUsers,
      roles: ListEntitiesForPolicyResponseRoles,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachPolicyFromUserRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachPolicyFromUserResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachPolicyFromGroupRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  groupName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachPolicyFromGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachPolicyToUserRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachPolicyToUserResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachPolicyToGroupRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  groupName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachPolicyToGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesRequest extends $tea.Model {
  policyType?: string;
  marker?: string;
  maxItems?: number;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      marker: 'Marker',
      maxItems: 'MaxItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      marker: 'string',
      maxItems: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesResponse extends $tea.Model {
  requestId: string;
  isTruncated: boolean;
  marker: string;
  policies: ListPoliciesResponsePolicies;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isTruncated: 'IsTruncated',
      marker: 'Marker',
      policies: 'Policies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isTruncated: 'boolean',
      marker: 'string',
      policies: ListPoliciesResponsePolicies,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPolicyRequest extends $tea.Model {
  policyType?: string;
  policyName?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      policyName: 'PolicyName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      policyName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPolicyResponse extends $tea.Model {
  requestId: string;
  policy: GetPolicyResponsePolicy;
  defaultPolicyVersion: GetPolicyResponseDefaultPolicyVersion;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policy: 'Policy',
      defaultPolicyVersion: 'DefaultPolicyVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policy: GetPolicyResponsePolicy,
      defaultPolicyVersion: GetPolicyResponseDefaultPolicyVersion,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeletePolicyRequest extends $tea.Model {
  policyName?: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeletePolicyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePolicyRequest extends $tea.Model {
  policyName?: string;
  description?: string;
  policyDocument?: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      description: 'Description',
      policyDocument: 'PolicyDocument',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      description: 'string',
      policyDocument: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePolicyResponse extends $tea.Model {
  requestId: string;
  policy: CreatePolicyResponsePolicy;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      policy: 'Policy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      policy: CreatePolicyResponsePolicy,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveUserFromGroupRequest extends $tea.Model {
  userName?: string;
  groupName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveUserFromGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersForGroupRequest extends $tea.Model {
  groupName?: string;
  marker?: string;
  maxItems?: number;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      marker: 'Marker',
      maxItems: 'MaxItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      marker: 'string',
      maxItems: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersForGroupResponse extends $tea.Model {
  requestId: string;
  isTruncated: boolean;
  marker: string;
  users: ListUsersForGroupResponseUsers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isTruncated: 'IsTruncated',
      marker: 'Marker',
      users: 'Users',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isTruncated: 'boolean',
      marker: 'string',
      users: ListUsersForGroupResponseUsers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsForUserRequest extends $tea.Model {
  userName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsForUserResponse extends $tea.Model {
  requestId: string;
  groups: ListGroupsForUserResponseGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      groups: 'Groups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      groups: ListGroupsForUserResponseGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddUserToGroupRequest extends $tea.Model {
  userName?: string;
  groupName?: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddUserToGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGroupRequest extends $tea.Model {
  groupName?: string;
  newGroupName?: string;
  newComments?: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      newGroupName: 'NewGroupName',
      newComments: 'NewComments',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      newGroupName: 'string',
      newComments: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGroupResponse extends $tea.Model {
  requestId: string;
  group: UpdateGroupResponseGroup;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      group: 'Group',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      group: UpdateGroupResponseGroup,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsRequest extends $tea.Model {
  marker?: string;
  maxItems?: number;
  static names(): { [key: string]: string } {
    return {
      marker: 'Marker',
      maxItems: 'MaxItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      marker: 'string',
      maxItems: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsResponse extends $tea.Model {
  requestId: string;
  isTruncated: boolean;
  marker: string;
  groups: ListGroupsResponseGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isTruncated: 'IsTruncated',
      marker: 'Marker',
      groups: 'Groups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isTruncated: 'boolean',
      marker: 'string',
      groups: ListGroupsResponseGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetGroupRequest extends $tea.Model {
  groupName?: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetGroupResponse extends $tea.Model {
  requestId: string;
  group: GetGroupResponseGroup;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      group: 'Group',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      group: GetGroupResponseGroup,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGroupRequest extends $tea.Model {
  groupName?: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupRequest extends $tea.Model {
  groupName?: string;
  comments?: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      comments: 'Comments',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      comments: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupResponse extends $tea.Model {
  requestId: string;
  group: CreateGroupResponseGroup;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      group: 'Group',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      group: CreateGroupResponseGroup,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAccessKeyLastUsedResponseAccessKeyLastUsed extends $tea.Model {
  lastUsedDate: string;
  static names(): { [key: string]: string } {
    return {
      lastUsedDate: 'LastUsedDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lastUsedDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateRoleResponseRole extends $tea.Model {
  roleId: string;
  roleName: string;
  arn: string;
  description: string;
  assumeRolePolicyDocument: string;
  createDate: string;
  updateDate: string;
  maxSessionDuration: number;
  static names(): { [key: string]: string } {
    return {
      roleId: 'RoleId',
      roleName: 'RoleName',
      arn: 'Arn',
      description: 'Description',
      assumeRolePolicyDocument: 'AssumeRolePolicyDocument',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
      maxSessionDuration: 'MaxSessionDuration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleId: 'string',
      roleName: 'string',
      arn: 'string',
      description: 'string',
      assumeRolePolicyDocument: 'string',
      createDate: 'string',
      updateDate: 'string',
      maxSessionDuration: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference extends $tea.Model {
  enableSaveMFATicket: boolean;
  allowUserToChangePassword: boolean;
  loginSessionDuration: number;
  loginNetworkMasks: string;
  static names(): { [key: string]: string } {
    return {
      enableSaveMFATicket: 'EnableSaveMFATicket',
      allowUserToChangePassword: 'AllowUserToChangePassword',
      loginSessionDuration: 'LoginSessionDuration',
      loginNetworkMasks: 'LoginNetworkMasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enableSaveMFATicket: 'boolean',
      allowUserToChangePassword: 'boolean',
      loginSessionDuration: 'number',
      loginNetworkMasks: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference extends $tea.Model {
  allowUserToManageAccessKeys: boolean;
  static names(): { [key: string]: string } {
    return {
      allowUserToManageAccessKeys: 'AllowUserToManageAccessKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allowUserToManageAccessKeys: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference extends $tea.Model {
  allowUserToManagePublicKeys: boolean;
  static names(): { [key: string]: string } {
    return {
      allowUserToManagePublicKeys: 'AllowUserToManagePublicKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allowUserToManagePublicKeys: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetSecurityPreferenceResponseSecurityPreferenceMFAPreference extends $tea.Model {
  allowUserToManageMFADevices: boolean;
  static names(): { [key: string]: string } {
    return {
      allowUserToManageMFADevices: 'AllowUserToManageMFADevices',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allowUserToManageMFADevices: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetSecurityPreferenceResponseSecurityPreference extends $tea.Model {
  loginProfilePreference: SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference;
  accessKeyPreference: SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference;
  publicKeyPreference: SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference;
  MFAPreference: SetSecurityPreferenceResponseSecurityPreferenceMFAPreference;
  static names(): { [key: string]: string } {
    return {
      loginProfilePreference: 'LoginProfilePreference',
      accessKeyPreference: 'AccessKeyPreference',
      publicKeyPreference: 'PublicKeyPreference',
      MFAPreference: 'MFAPreference',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loginProfilePreference: SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference,
      accessKeyPreference: SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference,
      publicKeyPreference: SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference,
      MFAPreference: SetSecurityPreferenceResponseSecurityPreferenceMFAPreference,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRolesResponseRolesRole extends $tea.Model {
  roleId: string;
  roleName: string;
  arn: string;
  description: string;
  createDate: string;
  updateDate: string;
  maxSessionDuration: number;
  static names(): { [key: string]: string } {
    return {
      roleId: 'RoleId',
      roleName: 'RoleName',
      arn: 'Arn',
      description: 'Description',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
      maxSessionDuration: 'MaxSessionDuration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleId: 'string',
      roleName: 'string',
      arn: 'string',
      description: 'string',
      createDate: 'string',
      updateDate: 'string',
      maxSessionDuration: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRolesResponseRoles extends $tea.Model {
  role: ListRolesResponseRolesRole[];
  static names(): { [key: string]: string } {
    return {
      role: 'Role',
    };
  }

  static types(): { [key: string]: any } {
    return {
      role: { 'type': 'array', 'itemType': ListRolesResponseRolesRole },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForRoleResponsePoliciesPolicy extends $tea.Model {
  policyName: string;
  policyType: string;
  description: string;
  defaultVersion: string;
  attachDate: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      policyType: 'PolicyType',
      description: 'Description',
      defaultVersion: 'DefaultVersion',
      attachDate: 'AttachDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      policyType: 'string',
      description: 'string',
      defaultVersion: 'string',
      attachDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForRoleResponsePolicies extends $tea.Model {
  policy: ListPoliciesForRoleResponsePoliciesPolicy[];
  static names(): { [key: string]: string } {
    return {
      policy: 'Policy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policy: { 'type': 'array', 'itemType': ListPoliciesForRoleResponsePoliciesPolicy },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference extends $tea.Model {
  enableSaveMFATicket: boolean;
  allowUserToChangePassword: boolean;
  loginSessionDuration: number;
  loginNetworkMasks: string;
  static names(): { [key: string]: string } {
    return {
      enableSaveMFATicket: 'EnableSaveMFATicket',
      allowUserToChangePassword: 'AllowUserToChangePassword',
      loginSessionDuration: 'LoginSessionDuration',
      loginNetworkMasks: 'LoginNetworkMasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enableSaveMFATicket: 'boolean',
      allowUserToChangePassword: 'boolean',
      loginSessionDuration: 'number',
      loginNetworkMasks: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference extends $tea.Model {
  allowUserToManageAccessKeys: boolean;
  static names(): { [key: string]: string } {
    return {
      allowUserToManageAccessKeys: 'AllowUserToManageAccessKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allowUserToManageAccessKeys: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference extends $tea.Model {
  allowUserToManagePublicKeys: boolean;
  static names(): { [key: string]: string } {
    return {
      allowUserToManagePublicKeys: 'AllowUserToManagePublicKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allowUserToManagePublicKeys: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecurityPreferenceResponseSecurityPreferenceMFAPreference extends $tea.Model {
  allowUserToManageMFADevices: boolean;
  static names(): { [key: string]: string } {
    return {
      allowUserToManageMFADevices: 'AllowUserToManageMFADevices',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allowUserToManageMFADevices: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecurityPreferenceResponseSecurityPreference extends $tea.Model {
  loginProfilePreference: GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference;
  accessKeyPreference: GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference;
  publicKeyPreference: GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference;
  MFAPreference: GetSecurityPreferenceResponseSecurityPreferenceMFAPreference;
  static names(): { [key: string]: string } {
    return {
      loginProfilePreference: 'LoginProfilePreference',
      accessKeyPreference: 'AccessKeyPreference',
      publicKeyPreference: 'PublicKeyPreference',
      MFAPreference: 'MFAPreference',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loginProfilePreference: GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference,
      accessKeyPreference: GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference,
      publicKeyPreference: GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference,
      MFAPreference: GetSecurityPreferenceResponseSecurityPreferenceMFAPreference,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRoleResponseRole extends $tea.Model {
  roleId: string;
  roleName: string;
  arn: string;
  description: string;
  assumeRolePolicyDocument: string;
  createDate: string;
  updateDate: string;
  maxSessionDuration: number;
  static names(): { [key: string]: string } {
    return {
      roleId: 'RoleId',
      roleName: 'RoleName',
      arn: 'Arn',
      description: 'Description',
      assumeRolePolicyDocument: 'AssumeRolePolicyDocument',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
      maxSessionDuration: 'MaxSessionDuration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleId: 'string',
      roleName: 'string',
      arn: 'string',
      description: 'string',
      assumeRolePolicyDocument: 'string',
      createDate: 'string',
      updateDate: 'string',
      maxSessionDuration: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRoleResponseRole extends $tea.Model {
  roleId: string;
  roleName: string;
  arn: string;
  description: string;
  assumeRolePolicyDocument: string;
  createDate: string;
  maxSessionDuration: number;
  static names(): { [key: string]: string } {
    return {
      roleId: 'RoleId',
      roleName: 'RoleName',
      arn: 'Arn',
      description: 'Description',
      assumeRolePolicyDocument: 'AssumeRolePolicyDocument',
      createDate: 'CreateDate',
      maxSessionDuration: 'MaxSessionDuration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleId: 'string',
      roleName: 'string',
      arn: 'string',
      description: 'string',
      assumeRolePolicyDocument: 'string',
      createDate: 'string',
      maxSessionDuration: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindMFADeviceResponseMFADevice extends $tea.Model {
  serialNumber: string;
  static names(): { [key: string]: string } {
    return {
      serialNumber: 'SerialNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serialNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser extends $tea.Model {
  userId: string;
  userName: string;
  displayName: string;
  static names(): { [key: string]: string } {
    return {
      userId: 'UserId',
      userName: 'UserName',
      displayName: 'DisplayName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userId: 'string',
      userName: 'string',
      displayName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice extends $tea.Model {
  serialNumber: string;
  activateDate: string;
  user: ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser;
  static names(): { [key: string]: string } {
    return {
      serialNumber: 'SerialNumber',
      activateDate: 'ActivateDate',
      user: 'User',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serialNumber: 'string',
      activateDate: 'string',
      user: ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVirtualMFADevicesResponseVirtualMFADevices extends $tea.Model {
  virtualMFADevice: ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice[];
  static names(): { [key: string]: string } {
    return {
      virtualMFADevice: 'VirtualMFADevice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      virtualMFADevice: { 'type': 'array', 'itemType': ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUserMFAInfoResponseMFADevice extends $tea.Model {
  serialNumber: string;
  static names(): { [key: string]: string } {
    return {
      serialNumber: 'SerialNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serialNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVirtualMFADeviceResponseVirtualMFADevice extends $tea.Model {
  serialNumber: string;
  base32StringSeed: string;
  QRCodePNG: string;
  static names(): { [key: string]: string } {
    return {
      serialNumber: 'SerialNumber',
      base32StringSeed: 'Base32StringSeed',
      QRCodePNG: 'QRCodePNG',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serialNumber: 'string',
      base32StringSeed: 'string',
      QRCodePNG: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetLoginProfileResponseLoginProfile extends $tea.Model {
  userName: string;
  passwordResetRequired: boolean;
  MFABindRequired: boolean;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      passwordResetRequired: 'PasswordResetRequired',
      MFABindRequired: 'MFABindRequired',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      passwordResetRequired: 'boolean',
      MFABindRequired: 'boolean',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateLoginProfileResponseLoginProfile extends $tea.Model {
  userName: string;
  passwordResetRequired: boolean;
  MFABindRequired: boolean;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      passwordResetRequired: 'PasswordResetRequired',
      MFABindRequired: 'MFABindRequired',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      passwordResetRequired: 'boolean',
      MFABindRequired: 'boolean',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateUserResponseUser extends $tea.Model {
  userId: string;
  userName: string;
  displayName: string;
  mobilePhone: string;
  email: string;
  comments: string;
  createDate: string;
  updateDate: string;
  static names(): { [key: string]: string } {
    return {
      userId: 'UserId',
      userName: 'UserName',
      displayName: 'DisplayName',
      mobilePhone: 'MobilePhone',
      email: 'Email',
      comments: 'Comments',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userId: 'string',
      userName: 'string',
      displayName: 'string',
      mobilePhone: 'string',
      email: 'string',
      comments: 'string',
      createDate: 'string',
      updateDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersResponseUsersUser extends $tea.Model {
  userId: string;
  userName: string;
  displayName: string;
  mobilePhone: string;
  email: string;
  comments: string;
  createDate: string;
  updateDate: string;
  static names(): { [key: string]: string } {
    return {
      userId: 'UserId',
      userName: 'UserName',
      displayName: 'DisplayName',
      mobilePhone: 'MobilePhone',
      email: 'Email',
      comments: 'Comments',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userId: 'string',
      userName: 'string',
      displayName: 'string',
      mobilePhone: 'string',
      email: 'string',
      comments: 'string',
      createDate: 'string',
      updateDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersResponseUsers extends $tea.Model {
  user: ListUsersResponseUsersUser[];
  static names(): { [key: string]: string } {
    return {
      user: 'User',
    };
  }

  static types(): { [key: string]: any } {
    return {
      user: { 'type': 'array', 'itemType': ListUsersResponseUsersUser },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUserResponseUser extends $tea.Model {
  userId: string;
  userName: string;
  displayName: string;
  mobilePhone: string;
  email: string;
  comments: string;
  createDate: string;
  updateDate: string;
  lastLoginDate: string;
  static names(): { [key: string]: string } {
    return {
      userId: 'UserId',
      userName: 'UserName',
      displayName: 'DisplayName',
      mobilePhone: 'MobilePhone',
      email: 'Email',
      comments: 'Comments',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
      lastLoginDate: 'LastLoginDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userId: 'string',
      userName: 'string',
      displayName: 'string',
      mobilePhone: 'string',
      email: 'string',
      comments: 'string',
      createDate: 'string',
      updateDate: 'string',
      lastLoginDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUserResponseUser extends $tea.Model {
  userId: string;
  userName: string;
  displayName: string;
  mobilePhone: string;
  email: string;
  comments: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      userId: 'UserId',
      userName: 'UserName',
      displayName: 'DisplayName',
      mobilePhone: 'MobilePhone',
      email: 'Email',
      comments: 'Comments',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userId: 'string',
      userName: 'string',
      displayName: 'string',
      mobilePhone: 'string',
      email: 'string',
      comments: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAccessKeysResponseAccessKeysAccessKey extends $tea.Model {
  accessKeyId: string;
  status: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      status: 'Status',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      status: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAccessKeysResponseAccessKeys extends $tea.Model {
  accessKey: ListAccessKeysResponseAccessKeysAccessKey[];
  static names(): { [key: string]: string } {
    return {
      accessKey: 'AccessKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKey: { 'type': 'array', 'itemType': ListAccessKeysResponseAccessKeysAccessKey },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccessKeyResponseAccessKey extends $tea.Model {
  accessKeyId: string;
  accessKeySecret: string;
  status: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      accessKeySecret: 'AccessKeySecret',
      status: 'Status',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      accessKeySecret: 'string',
      status: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetPasswordPolicyResponsePasswordPolicy extends $tea.Model {
  minimumPasswordLength: number;
  requireLowercaseCharacters: boolean;
  requireUppercaseCharacters: boolean;
  requireNumbers: boolean;
  requireSymbols: boolean;
  hardExpiry: boolean;
  maxPasswordAge: number;
  passwordReusePrevention: number;
  maxLoginAttemps: number;
  static names(): { [key: string]: string } {
    return {
      minimumPasswordLength: 'MinimumPasswordLength',
      requireLowercaseCharacters: 'RequireLowercaseCharacters',
      requireUppercaseCharacters: 'RequireUppercaseCharacters',
      requireNumbers: 'RequireNumbers',
      requireSymbols: 'RequireSymbols',
      hardExpiry: 'HardExpiry',
      maxPasswordAge: 'MaxPasswordAge',
      passwordReusePrevention: 'PasswordReusePrevention',
      maxLoginAttemps: 'MaxLoginAttemps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      minimumPasswordLength: 'number',
      requireLowercaseCharacters: 'boolean',
      requireUppercaseCharacters: 'boolean',
      requireNumbers: 'boolean',
      requireSymbols: 'boolean',
      hardExpiry: 'boolean',
      maxPasswordAge: 'number',
      passwordReusePrevention: 'number',
      maxLoginAttemps: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPasswordPolicyResponsePasswordPolicy extends $tea.Model {
  minimumPasswordLength: number;
  requireLowercaseCharacters: boolean;
  requireUppercaseCharacters: boolean;
  requireNumbers: boolean;
  requireSymbols: boolean;
  hardExpiry: boolean;
  maxPasswordAge: number;
  passwordReusePrevention: number;
  maxLoginAttemps: number;
  static names(): { [key: string]: string } {
    return {
      minimumPasswordLength: 'MinimumPasswordLength',
      requireLowercaseCharacters: 'RequireLowercaseCharacters',
      requireUppercaseCharacters: 'RequireUppercaseCharacters',
      requireNumbers: 'RequireNumbers',
      requireSymbols: 'RequireSymbols',
      hardExpiry: 'HardExpiry',
      maxPasswordAge: 'MaxPasswordAge',
      passwordReusePrevention: 'PasswordReusePrevention',
      maxLoginAttemps: 'MaxLoginAttemps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      minimumPasswordLength: 'number',
      requireLowercaseCharacters: 'boolean',
      requireUppercaseCharacters: 'boolean',
      requireNumbers: 'boolean',
      requireSymbols: 'boolean',
      hardExpiry: 'boolean',
      maxPasswordAge: 'number',
      passwordReusePrevention: 'number',
      maxLoginAttemps: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPolicyVersionsResponsePolicyVersionsPolicyVersion extends $tea.Model {
  versionId: string;
  isDefaultVersion: boolean;
  policyDocument: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      versionId: 'VersionId',
      isDefaultVersion: 'IsDefaultVersion',
      policyDocument: 'PolicyDocument',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionId: 'string',
      isDefaultVersion: 'boolean',
      policyDocument: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPolicyVersionsResponsePolicyVersions extends $tea.Model {
  policyVersion: ListPolicyVersionsResponsePolicyVersionsPolicyVersion[];
  static names(): { [key: string]: string } {
    return {
      policyVersion: 'PolicyVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyVersion: { 'type': 'array', 'itemType': ListPolicyVersionsResponsePolicyVersionsPolicyVersion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPolicyVersionResponsePolicyVersion extends $tea.Model {
  versionId: string;
  isDefaultVersion: boolean;
  policyDocument: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      versionId: 'VersionId',
      isDefaultVersion: 'IsDefaultVersion',
      policyDocument: 'PolicyDocument',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionId: 'string',
      isDefaultVersion: 'boolean',
      policyDocument: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePolicyVersionResponsePolicyVersion extends $tea.Model {
  versionId: string;
  isDefaultVersion: boolean;
  policyDocument: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      versionId: 'VersionId',
      isDefaultVersion: 'IsDefaultVersion',
      policyDocument: 'PolicyDocument',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionId: 'string',
      isDefaultVersion: 'boolean',
      policyDocument: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForUserResponsePoliciesPolicy extends $tea.Model {
  policyName: string;
  policyType: string;
  description: string;
  defaultVersion: string;
  attachDate: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      policyType: 'PolicyType',
      description: 'Description',
      defaultVersion: 'DefaultVersion',
      attachDate: 'AttachDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      policyType: 'string',
      description: 'string',
      defaultVersion: 'string',
      attachDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForUserResponsePolicies extends $tea.Model {
  policy: ListPoliciesForUserResponsePoliciesPolicy[];
  static names(): { [key: string]: string } {
    return {
      policy: 'Policy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policy: { 'type': 'array', 'itemType': ListPoliciesForUserResponsePoliciesPolicy },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForGroupResponsePoliciesPolicy extends $tea.Model {
  policyName: string;
  policyType: string;
  description: string;
  defaultVersion: string;
  attachDate: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      policyType: 'PolicyType',
      description: 'Description',
      defaultVersion: 'DefaultVersion',
      attachDate: 'AttachDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      policyType: 'string',
      description: 'string',
      defaultVersion: 'string',
      attachDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesForGroupResponsePolicies extends $tea.Model {
  policy: ListPoliciesForGroupResponsePoliciesPolicy[];
  static names(): { [key: string]: string } {
    return {
      policy: 'Policy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policy: { 'type': 'array', 'itemType': ListPoliciesForGroupResponsePoliciesPolicy },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyResponseGroupsGroup extends $tea.Model {
  groupName: string;
  comments: string;
  attachDate: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      comments: 'Comments',
      attachDate: 'AttachDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      comments: 'string',
      attachDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyResponseGroups extends $tea.Model {
  group: ListEntitiesForPolicyResponseGroupsGroup[];
  static names(): { [key: string]: string } {
    return {
      group: 'Group',
    };
  }

  static types(): { [key: string]: any } {
    return {
      group: { 'type': 'array', 'itemType': ListEntitiesForPolicyResponseGroupsGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyResponseUsersUser extends $tea.Model {
  userId: string;
  userName: string;
  displayName: string;
  attachDate: string;
  static names(): { [key: string]: string } {
    return {
      userId: 'UserId',
      userName: 'UserName',
      displayName: 'DisplayName',
      attachDate: 'AttachDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userId: 'string',
      userName: 'string',
      displayName: 'string',
      attachDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyResponseUsers extends $tea.Model {
  user: ListEntitiesForPolicyResponseUsersUser[];
  static names(): { [key: string]: string } {
    return {
      user: 'User',
    };
  }

  static types(): { [key: string]: any } {
    return {
      user: { 'type': 'array', 'itemType': ListEntitiesForPolicyResponseUsersUser },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyResponseRolesRole extends $tea.Model {
  roleId: string;
  roleName: string;
  arn: string;
  description: string;
  attachDate: string;
  static names(): { [key: string]: string } {
    return {
      roleId: 'RoleId',
      roleName: 'RoleName',
      arn: 'Arn',
      description: 'Description',
      attachDate: 'AttachDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleId: 'string',
      roleName: 'string',
      arn: 'string',
      description: 'string',
      attachDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListEntitiesForPolicyResponseRoles extends $tea.Model {
  role: ListEntitiesForPolicyResponseRolesRole[];
  static names(): { [key: string]: string } {
    return {
      role: 'Role',
    };
  }

  static types(): { [key: string]: any } {
    return {
      role: { 'type': 'array', 'itemType': ListEntitiesForPolicyResponseRolesRole },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesResponsePoliciesPolicy extends $tea.Model {
  policyName: string;
  policyType: string;
  description: string;
  defaultVersion: string;
  createDate: string;
  updateDate: string;
  attachmentCount: number;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      policyType: 'PolicyType',
      description: 'Description',
      defaultVersion: 'DefaultVersion',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
      attachmentCount: 'AttachmentCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      policyType: 'string',
      description: 'string',
      defaultVersion: 'string',
      createDate: 'string',
      updateDate: 'string',
      attachmentCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPoliciesResponsePolicies extends $tea.Model {
  policy: ListPoliciesResponsePoliciesPolicy[];
  static names(): { [key: string]: string } {
    return {
      policy: 'Policy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policy: { 'type': 'array', 'itemType': ListPoliciesResponsePoliciesPolicy },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPolicyResponsePolicy extends $tea.Model {
  policyName: string;
  policyType: string;
  description: string;
  defaultVersion: string;
  policyDocument: string;
  createDate: string;
  updateDate: string;
  attachmentCount: number;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      policyType: 'PolicyType',
      description: 'Description',
      defaultVersion: 'DefaultVersion',
      policyDocument: 'PolicyDocument',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
      attachmentCount: 'AttachmentCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      policyType: 'string',
      description: 'string',
      defaultVersion: 'string',
      policyDocument: 'string',
      createDate: 'string',
      updateDate: 'string',
      attachmentCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPolicyResponseDefaultPolicyVersion extends $tea.Model {
  versionId: string;
  isDefaultVersion: boolean;
  policyDocument: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      versionId: 'VersionId',
      isDefaultVersion: 'IsDefaultVersion',
      policyDocument: 'PolicyDocument',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionId: 'string',
      isDefaultVersion: 'boolean',
      policyDocument: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePolicyResponsePolicy extends $tea.Model {
  policyName: string;
  policyType: string;
  description: string;
  defaultVersion: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      policyName: 'PolicyName',
      policyType: 'PolicyType',
      description: 'Description',
      defaultVersion: 'DefaultVersion',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyName: 'string',
      policyType: 'string',
      description: 'string',
      defaultVersion: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersForGroupResponseUsersUser extends $tea.Model {
  userName: string;
  displayName: string;
  joinDate: string;
  static names(): { [key: string]: string } {
    return {
      userName: 'UserName',
      displayName: 'DisplayName',
      joinDate: 'JoinDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userName: 'string',
      displayName: 'string',
      joinDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListUsersForGroupResponseUsers extends $tea.Model {
  user: ListUsersForGroupResponseUsersUser[];
  static names(): { [key: string]: string } {
    return {
      user: 'User',
    };
  }

  static types(): { [key: string]: any } {
    return {
      user: { 'type': 'array', 'itemType': ListUsersForGroupResponseUsersUser },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsForUserResponseGroupsGroup extends $tea.Model {
  groupName: string;
  comments: string;
  joinDate: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      comments: 'Comments',
      joinDate: 'JoinDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      comments: 'string',
      joinDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsForUserResponseGroups extends $tea.Model {
  group: ListGroupsForUserResponseGroupsGroup[];
  static names(): { [key: string]: string } {
    return {
      group: 'Group',
    };
  }

  static types(): { [key: string]: any } {
    return {
      group: { 'type': 'array', 'itemType': ListGroupsForUserResponseGroupsGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGroupResponseGroup extends $tea.Model {
  groupName: string;
  comments: string;
  createDate: string;
  updateDate: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      comments: 'Comments',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      comments: 'string',
      createDate: 'string',
      updateDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsResponseGroupsGroup extends $tea.Model {
  groupName: string;
  comments: string;
  createDate: string;
  updateDate: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      comments: 'Comments',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      comments: 'string',
      createDate: 'string',
      updateDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListGroupsResponseGroups extends $tea.Model {
  group: ListGroupsResponseGroupsGroup[];
  static names(): { [key: string]: string } {
    return {
      group: 'Group',
    };
  }

  static types(): { [key: string]: any } {
    return {
      group: { 'type': 'array', 'itemType': ListGroupsResponseGroupsGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetGroupResponseGroup extends $tea.Model {
  groupName: string;
  comments: string;
  createDate: string;
  updateDate: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      comments: 'Comments',
      createDate: 'CreateDate',
      updateDate: 'UpdateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      comments: 'string',
      createDate: 'string',
      updateDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupResponseGroup extends $tea.Model {
  groupName: string;
  comments: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      comments: 'Comments',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      comments: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "central";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("ram", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async getAccessKeyLastUsedWithOptions(request: GetAccessKeyLastUsedRequest, runtime: $Util.RuntimeOptions): Promise<GetAccessKeyLastUsedResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAccessKeyLastUsedResponse>(await this.doRequest("GetAccessKeyLastUsed", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetAccessKeyLastUsedResponse({}));
  }

  async getAccessKeyLastUsed(request: GetAccessKeyLastUsedRequest): Promise<GetAccessKeyLastUsedResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAccessKeyLastUsedWithOptions(request, runtime);
  }

  async changePasswordWithOptions(request: ChangePasswordRequest, runtime: $Util.RuntimeOptions): Promise<ChangePasswordResponse> {
    Util.validateModel(request);
    return $tea.cast<ChangePasswordResponse>(await this.doRequest("ChangePassword", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ChangePasswordResponse({}));
  }

  async changePassword(request: ChangePasswordRequest): Promise<ChangePasswordResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.changePasswordWithOptions(request, runtime);
  }

  async updateRoleWithOptions(request: UpdateRoleRequest, runtime: $Util.RuntimeOptions): Promise<UpdateRoleResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateRoleResponse>(await this.doRequest("UpdateRole", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new UpdateRoleResponse({}));
  }

  async updateRole(request: UpdateRoleRequest): Promise<UpdateRoleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateRoleWithOptions(request, runtime);
  }

  async setSecurityPreferenceWithOptions(request: SetSecurityPreferenceRequest, runtime: $Util.RuntimeOptions): Promise<SetSecurityPreferenceResponse> {
    Util.validateModel(request);
    return $tea.cast<SetSecurityPreferenceResponse>(await this.doRequest("SetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new SetSecurityPreferenceResponse({}));
  }

  async setSecurityPreference(request: SetSecurityPreferenceRequest): Promise<SetSecurityPreferenceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setSecurityPreferenceWithOptions(request, runtime);
  }

  async listRolesWithOptions(request: ListRolesRequest, runtime: $Util.RuntimeOptions): Promise<ListRolesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListRolesResponse>(await this.doRequest("ListRoles", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListRolesResponse({}));
  }

  async listRoles(request: ListRolesRequest): Promise<ListRolesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listRolesWithOptions(request, runtime);
  }

  async listPoliciesForRoleWithOptions(request: ListPoliciesForRoleRequest, runtime: $Util.RuntimeOptions): Promise<ListPoliciesForRoleResponse> {
    Util.validateModel(request);
    return $tea.cast<ListPoliciesForRoleResponse>(await this.doRequest("ListPoliciesForRole", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListPoliciesForRoleResponse({}));
  }

  async listPoliciesForRole(request: ListPoliciesForRoleRequest): Promise<ListPoliciesForRoleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listPoliciesForRoleWithOptions(request, runtime);
  }

  async getSecurityPreferenceWithOptions(request: GetSecurityPreferenceRequest, runtime: $Util.RuntimeOptions): Promise<GetSecurityPreferenceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetSecurityPreferenceResponse>(await this.doRequest("GetSecurityPreference", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetSecurityPreferenceResponse({}));
  }

  async getSecurityPreference(request: GetSecurityPreferenceRequest): Promise<GetSecurityPreferenceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getSecurityPreferenceWithOptions(request, runtime);
  }

  async getRoleWithOptions(request: GetRoleRequest, runtime: $Util.RuntimeOptions): Promise<GetRoleResponse> {
    Util.validateModel(request);
    return $tea.cast<GetRoleResponse>(await this.doRequest("GetRole", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetRoleResponse({}));
  }

  async getRole(request: GetRoleRequest): Promise<GetRoleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getRoleWithOptions(request, runtime);
  }

  async detachPolicyFromRoleWithOptions(request: DetachPolicyFromRoleRequest, runtime: $Util.RuntimeOptions): Promise<DetachPolicyFromRoleResponse> {
    Util.validateModel(request);
    return $tea.cast<DetachPolicyFromRoleResponse>(await this.doRequest("DetachPolicyFromRole", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DetachPolicyFromRoleResponse({}));
  }

  async detachPolicyFromRole(request: DetachPolicyFromRoleRequest): Promise<DetachPolicyFromRoleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detachPolicyFromRoleWithOptions(request, runtime);
  }

  async deleteRoleWithOptions(request: DeleteRoleRequest, runtime: $Util.RuntimeOptions): Promise<DeleteRoleResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteRoleResponse>(await this.doRequest("DeleteRole", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeleteRoleResponse({}));
  }

  async deleteRole(request: DeleteRoleRequest): Promise<DeleteRoleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteRoleWithOptions(request, runtime);
  }

  async createRoleWithOptions(request: CreateRoleRequest, runtime: $Util.RuntimeOptions): Promise<CreateRoleResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateRoleResponse>(await this.doRequest("CreateRole", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreateRoleResponse({}));
  }

  async createRole(request: CreateRoleRequest): Promise<CreateRoleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createRoleWithOptions(request, runtime);
  }

  async attachPolicyToRoleWithOptions(request: AttachPolicyToRoleRequest, runtime: $Util.RuntimeOptions): Promise<AttachPolicyToRoleResponse> {
    Util.validateModel(request);
    return $tea.cast<AttachPolicyToRoleResponse>(await this.doRequest("AttachPolicyToRole", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new AttachPolicyToRoleResponse({}));
  }

  async attachPolicyToRole(request: AttachPolicyToRoleRequest): Promise<AttachPolicyToRoleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.attachPolicyToRoleWithOptions(request, runtime);
  }

  async unbindMFADeviceWithOptions(request: UnbindMFADeviceRequest, runtime: $Util.RuntimeOptions): Promise<UnbindMFADeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<UnbindMFADeviceResponse>(await this.doRequest("UnbindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new UnbindMFADeviceResponse({}));
  }

  async unbindMFADevice(request: UnbindMFADeviceRequest): Promise<UnbindMFADeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unbindMFADeviceWithOptions(request, runtime);
  }

  async listVirtualMFADevicesWithOptions(request: ListVirtualMFADevicesRequest, runtime: $Util.RuntimeOptions): Promise<ListVirtualMFADevicesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListVirtualMFADevicesResponse>(await this.doRequest("ListVirtualMFADevices", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListVirtualMFADevicesResponse({}));
  }

  async listVirtualMFADevices(request: ListVirtualMFADevicesRequest): Promise<ListVirtualMFADevicesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listVirtualMFADevicesWithOptions(request, runtime);
  }

  async getUserMFAInfoWithOptions(request: GetUserMFAInfoRequest, runtime: $Util.RuntimeOptions): Promise<GetUserMFAInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<GetUserMFAInfoResponse>(await this.doRequest("GetUserMFAInfo", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetUserMFAInfoResponse({}));
  }

  async getUserMFAInfo(request: GetUserMFAInfoRequest): Promise<GetUserMFAInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getUserMFAInfoWithOptions(request, runtime);
  }

  async deleteVirtualMFADeviceWithOptions(request: DeleteVirtualMFADeviceRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVirtualMFADeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVirtualMFADeviceResponse>(await this.doRequest("DeleteVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeleteVirtualMFADeviceResponse({}));
  }

  async deleteVirtualMFADevice(request: DeleteVirtualMFADeviceRequest): Promise<DeleteVirtualMFADeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVirtualMFADeviceWithOptions(request, runtime);
  }

  async createVirtualMFADeviceWithOptions(request: CreateVirtualMFADeviceRequest, runtime: $Util.RuntimeOptions): Promise<CreateVirtualMFADeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVirtualMFADeviceResponse>(await this.doRequest("CreateVirtualMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreateVirtualMFADeviceResponse({}));
  }

  async createVirtualMFADevice(request: CreateVirtualMFADeviceRequest): Promise<CreateVirtualMFADeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVirtualMFADeviceWithOptions(request, runtime);
  }

  async bindMFADeviceWithOptions(request: BindMFADeviceRequest, runtime: $Util.RuntimeOptions): Promise<BindMFADeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<BindMFADeviceResponse>(await this.doRequest("BindMFADevice", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new BindMFADeviceResponse({}));
  }

  async bindMFADevice(request: BindMFADeviceRequest): Promise<BindMFADeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.bindMFADeviceWithOptions(request, runtime);
  }

  async updateLoginProfileWithOptions(request: UpdateLoginProfileRequest, runtime: $Util.RuntimeOptions): Promise<UpdateLoginProfileResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateLoginProfileResponse>(await this.doRequest("UpdateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new UpdateLoginProfileResponse({}));
  }

  async updateLoginProfile(request: UpdateLoginProfileRequest): Promise<UpdateLoginProfileResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateLoginProfileWithOptions(request, runtime);
  }

  async getLoginProfileWithOptions(request: GetLoginProfileRequest, runtime: $Util.RuntimeOptions): Promise<GetLoginProfileResponse> {
    Util.validateModel(request);
    return $tea.cast<GetLoginProfileResponse>(await this.doRequest("GetLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetLoginProfileResponse({}));
  }

  async getLoginProfile(request: GetLoginProfileRequest): Promise<GetLoginProfileResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getLoginProfileWithOptions(request, runtime);
  }

  async deleteLoginProfileWithOptions(request: DeleteLoginProfileRequest, runtime: $Util.RuntimeOptions): Promise<DeleteLoginProfileResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteLoginProfileResponse>(await this.doRequest("DeleteLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeleteLoginProfileResponse({}));
  }

  async deleteLoginProfile(request: DeleteLoginProfileRequest): Promise<DeleteLoginProfileResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteLoginProfileWithOptions(request, runtime);
  }

  async createLoginProfileWithOptions(request: CreateLoginProfileRequest, runtime: $Util.RuntimeOptions): Promise<CreateLoginProfileResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateLoginProfileResponse>(await this.doRequest("CreateLoginProfile", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreateLoginProfileResponse({}));
  }

  async createLoginProfile(request: CreateLoginProfileRequest): Promise<CreateLoginProfileResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createLoginProfileWithOptions(request, runtime);
  }

  async updateUserWithOptions(request: UpdateUserRequest, runtime: $Util.RuntimeOptions): Promise<UpdateUserResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateUserResponse>(await this.doRequest("UpdateUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new UpdateUserResponse({}));
  }

  async updateUser(request: UpdateUserRequest): Promise<UpdateUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateUserWithOptions(request, runtime);
  }

  async listUsersWithOptions(request: ListUsersRequest, runtime: $Util.RuntimeOptions): Promise<ListUsersResponse> {
    Util.validateModel(request);
    return $tea.cast<ListUsersResponse>(await this.doRequest("ListUsers", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListUsersResponse({}));
  }

  async listUsers(request: ListUsersRequest): Promise<ListUsersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listUsersWithOptions(request, runtime);
  }

  async getUserWithOptions(request: GetUserRequest, runtime: $Util.RuntimeOptions): Promise<GetUserResponse> {
    Util.validateModel(request);
    return $tea.cast<GetUserResponse>(await this.doRequest("GetUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetUserResponse({}));
  }

  async getUser(request: GetUserRequest): Promise<GetUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getUserWithOptions(request, runtime);
  }

  async deleteUserWithOptions(request: DeleteUserRequest, runtime: $Util.RuntimeOptions): Promise<DeleteUserResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteUserResponse>(await this.doRequest("DeleteUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeleteUserResponse({}));
  }

  async deleteUser(request: DeleteUserRequest): Promise<DeleteUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteUserWithOptions(request, runtime);
  }

  async createUserWithOptions(request: CreateUserRequest, runtime: $Util.RuntimeOptions): Promise<CreateUserResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateUserResponse>(await this.doRequest("CreateUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreateUserResponse({}));
  }

  async createUser(request: CreateUserRequest): Promise<CreateUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createUserWithOptions(request, runtime);
  }

  async updateAccessKeyWithOptions(request: UpdateAccessKeyRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAccessKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAccessKeyResponse>(await this.doRequest("UpdateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new UpdateAccessKeyResponse({}));
  }

  async updateAccessKey(request: UpdateAccessKeyRequest): Promise<UpdateAccessKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAccessKeyWithOptions(request, runtime);
  }

  async listAccessKeysWithOptions(request: ListAccessKeysRequest, runtime: $Util.RuntimeOptions): Promise<ListAccessKeysResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAccessKeysResponse>(await this.doRequest("ListAccessKeys", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListAccessKeysResponse({}));
  }

  async listAccessKeys(request: ListAccessKeysRequest): Promise<ListAccessKeysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAccessKeysWithOptions(request, runtime);
  }

  async deleteAccessKeyWithOptions(request: DeleteAccessKeyRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAccessKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAccessKeyResponse>(await this.doRequest("DeleteAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeleteAccessKeyResponse({}));
  }

  async deleteAccessKey(request: DeleteAccessKeyRequest): Promise<DeleteAccessKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAccessKeyWithOptions(request, runtime);
  }

  async createAccessKeyWithOptions(request: CreateAccessKeyRequest, runtime: $Util.RuntimeOptions): Promise<CreateAccessKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAccessKeyResponse>(await this.doRequest("CreateAccessKey", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreateAccessKeyResponse({}));
  }

  async createAccessKey(request: CreateAccessKeyRequest): Promise<CreateAccessKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAccessKeyWithOptions(request, runtime);
  }

  async setPasswordPolicyWithOptions(request: SetPasswordPolicyRequest, runtime: $Util.RuntimeOptions): Promise<SetPasswordPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<SetPasswordPolicyResponse>(await this.doRequest("SetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new SetPasswordPolicyResponse({}));
  }

  async setPasswordPolicy(request: SetPasswordPolicyRequest): Promise<SetPasswordPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setPasswordPolicyWithOptions(request, runtime);
  }

  async setAccountAliasWithOptions(request: SetAccountAliasRequest, runtime: $Util.RuntimeOptions): Promise<SetAccountAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<SetAccountAliasResponse>(await this.doRequest("SetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new SetAccountAliasResponse({}));
  }

  async setAccountAlias(request: SetAccountAliasRequest): Promise<SetAccountAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setAccountAliasWithOptions(request, runtime);
  }

  async getPasswordPolicyWithOptions(request: GetPasswordPolicyRequest, runtime: $Util.RuntimeOptions): Promise<GetPasswordPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<GetPasswordPolicyResponse>(await this.doRequest("GetPasswordPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetPasswordPolicyResponse({}));
  }

  async getPasswordPolicy(request: GetPasswordPolicyRequest): Promise<GetPasswordPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getPasswordPolicyWithOptions(request, runtime);
  }

  async getAccountAliasWithOptions(request: GetAccountAliasRequest, runtime: $Util.RuntimeOptions): Promise<GetAccountAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAccountAliasResponse>(await this.doRequest("GetAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetAccountAliasResponse({}));
  }

  async getAccountAlias(request: GetAccountAliasRequest): Promise<GetAccountAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAccountAliasWithOptions(request, runtime);
  }

  async clearAccountAliasWithOptions(request: ClearAccountAliasRequest, runtime: $Util.RuntimeOptions): Promise<ClearAccountAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<ClearAccountAliasResponse>(await this.doRequest("ClearAccountAlias", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ClearAccountAliasResponse({}));
  }

  async clearAccountAlias(request: ClearAccountAliasRequest): Promise<ClearAccountAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.clearAccountAliasWithOptions(request, runtime);
  }

  async setDefaultPolicyVersionWithOptions(request: SetDefaultPolicyVersionRequest, runtime: $Util.RuntimeOptions): Promise<SetDefaultPolicyVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDefaultPolicyVersionResponse>(await this.doRequest("SetDefaultPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new SetDefaultPolicyVersionResponse({}));
  }

  async setDefaultPolicyVersion(request: SetDefaultPolicyVersionRequest): Promise<SetDefaultPolicyVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDefaultPolicyVersionWithOptions(request, runtime);
  }

  async listPolicyVersionsWithOptions(request: ListPolicyVersionsRequest, runtime: $Util.RuntimeOptions): Promise<ListPolicyVersionsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListPolicyVersionsResponse>(await this.doRequest("ListPolicyVersions", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListPolicyVersionsResponse({}));
  }

  async listPolicyVersions(request: ListPolicyVersionsRequest): Promise<ListPolicyVersionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listPolicyVersionsWithOptions(request, runtime);
  }

  async getPolicyVersionWithOptions(request: GetPolicyVersionRequest, runtime: $Util.RuntimeOptions): Promise<GetPolicyVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<GetPolicyVersionResponse>(await this.doRequest("GetPolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetPolicyVersionResponse({}));
  }

  async getPolicyVersion(request: GetPolicyVersionRequest): Promise<GetPolicyVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getPolicyVersionWithOptions(request, runtime);
  }

  async deletePolicyVersionWithOptions(request: DeletePolicyVersionRequest, runtime: $Util.RuntimeOptions): Promise<DeletePolicyVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<DeletePolicyVersionResponse>(await this.doRequest("DeletePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeletePolicyVersionResponse({}));
  }

  async deletePolicyVersion(request: DeletePolicyVersionRequest): Promise<DeletePolicyVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deletePolicyVersionWithOptions(request, runtime);
  }

  async createPolicyVersionWithOptions(request: CreatePolicyVersionRequest, runtime: $Util.RuntimeOptions): Promise<CreatePolicyVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<CreatePolicyVersionResponse>(await this.doRequest("CreatePolicyVersion", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreatePolicyVersionResponse({}));
  }

  async createPolicyVersion(request: CreatePolicyVersionRequest): Promise<CreatePolicyVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createPolicyVersionWithOptions(request, runtime);
  }

  async listPoliciesForUserWithOptions(request: ListPoliciesForUserRequest, runtime: $Util.RuntimeOptions): Promise<ListPoliciesForUserResponse> {
    Util.validateModel(request);
    return $tea.cast<ListPoliciesForUserResponse>(await this.doRequest("ListPoliciesForUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListPoliciesForUserResponse({}));
  }

  async listPoliciesForUser(request: ListPoliciesForUserRequest): Promise<ListPoliciesForUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listPoliciesForUserWithOptions(request, runtime);
  }

  async listPoliciesForGroupWithOptions(request: ListPoliciesForGroupRequest, runtime: $Util.RuntimeOptions): Promise<ListPoliciesForGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ListPoliciesForGroupResponse>(await this.doRequest("ListPoliciesForGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListPoliciesForGroupResponse({}));
  }

  async listPoliciesForGroup(request: ListPoliciesForGroupRequest): Promise<ListPoliciesForGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listPoliciesForGroupWithOptions(request, runtime);
  }

  async listEntitiesForPolicyWithOptions(request: ListEntitiesForPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ListEntitiesForPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ListEntitiesForPolicyResponse>(await this.doRequest("ListEntitiesForPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListEntitiesForPolicyResponse({}));
  }

  async listEntitiesForPolicy(request: ListEntitiesForPolicyRequest): Promise<ListEntitiesForPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listEntitiesForPolicyWithOptions(request, runtime);
  }

  async detachPolicyFromUserWithOptions(request: DetachPolicyFromUserRequest, runtime: $Util.RuntimeOptions): Promise<DetachPolicyFromUserResponse> {
    Util.validateModel(request);
    return $tea.cast<DetachPolicyFromUserResponse>(await this.doRequest("DetachPolicyFromUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DetachPolicyFromUserResponse({}));
  }

  async detachPolicyFromUser(request: DetachPolicyFromUserRequest): Promise<DetachPolicyFromUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detachPolicyFromUserWithOptions(request, runtime);
  }

  async detachPolicyFromGroupWithOptions(request: DetachPolicyFromGroupRequest, runtime: $Util.RuntimeOptions): Promise<DetachPolicyFromGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DetachPolicyFromGroupResponse>(await this.doRequest("DetachPolicyFromGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DetachPolicyFromGroupResponse({}));
  }

  async detachPolicyFromGroup(request: DetachPolicyFromGroupRequest): Promise<DetachPolicyFromGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detachPolicyFromGroupWithOptions(request, runtime);
  }

  async attachPolicyToUserWithOptions(request: AttachPolicyToUserRequest, runtime: $Util.RuntimeOptions): Promise<AttachPolicyToUserResponse> {
    Util.validateModel(request);
    return $tea.cast<AttachPolicyToUserResponse>(await this.doRequest("AttachPolicyToUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new AttachPolicyToUserResponse({}));
  }

  async attachPolicyToUser(request: AttachPolicyToUserRequest): Promise<AttachPolicyToUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.attachPolicyToUserWithOptions(request, runtime);
  }

  async attachPolicyToGroupWithOptions(request: AttachPolicyToGroupRequest, runtime: $Util.RuntimeOptions): Promise<AttachPolicyToGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<AttachPolicyToGroupResponse>(await this.doRequest("AttachPolicyToGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new AttachPolicyToGroupResponse({}));
  }

  async attachPolicyToGroup(request: AttachPolicyToGroupRequest): Promise<AttachPolicyToGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.attachPolicyToGroupWithOptions(request, runtime);
  }

  async listPoliciesWithOptions(request: ListPoliciesRequest, runtime: $Util.RuntimeOptions): Promise<ListPoliciesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListPoliciesResponse>(await this.doRequest("ListPolicies", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListPoliciesResponse({}));
  }

  async listPolicies(request: ListPoliciesRequest): Promise<ListPoliciesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listPoliciesWithOptions(request, runtime);
  }

  async getPolicyWithOptions(request: GetPolicyRequest, runtime: $Util.RuntimeOptions): Promise<GetPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<GetPolicyResponse>(await this.doRequest("GetPolicy", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetPolicyResponse({}));
  }

  async getPolicy(request: GetPolicyRequest): Promise<GetPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getPolicyWithOptions(request, runtime);
  }

  async deletePolicyWithOptions(request: DeletePolicyRequest, runtime: $Util.RuntimeOptions): Promise<DeletePolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DeletePolicyResponse>(await this.doRequest("DeletePolicy", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeletePolicyResponse({}));
  }

  async deletePolicy(request: DeletePolicyRequest): Promise<DeletePolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deletePolicyWithOptions(request, runtime);
  }

  async createPolicyWithOptions(request: CreatePolicyRequest, runtime: $Util.RuntimeOptions): Promise<CreatePolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<CreatePolicyResponse>(await this.doRequest("CreatePolicy", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreatePolicyResponse({}));
  }

  async createPolicy(request: CreatePolicyRequest): Promise<CreatePolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createPolicyWithOptions(request, runtime);
  }

  async removeUserFromGroupWithOptions(request: RemoveUserFromGroupRequest, runtime: $Util.RuntimeOptions): Promise<RemoveUserFromGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveUserFromGroupResponse>(await this.doRequest("RemoveUserFromGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new RemoveUserFromGroupResponse({}));
  }

  async removeUserFromGroup(request: RemoveUserFromGroupRequest): Promise<RemoveUserFromGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeUserFromGroupWithOptions(request, runtime);
  }

  async listUsersForGroupWithOptions(request: ListUsersForGroupRequest, runtime: $Util.RuntimeOptions): Promise<ListUsersForGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ListUsersForGroupResponse>(await this.doRequest("ListUsersForGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListUsersForGroupResponse({}));
  }

  async listUsersForGroup(request: ListUsersForGroupRequest): Promise<ListUsersForGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listUsersForGroupWithOptions(request, runtime);
  }

  async listGroupsForUserWithOptions(request: ListGroupsForUserRequest, runtime: $Util.RuntimeOptions): Promise<ListGroupsForUserResponse> {
    Util.validateModel(request);
    return $tea.cast<ListGroupsForUserResponse>(await this.doRequest("ListGroupsForUser", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListGroupsForUserResponse({}));
  }

  async listGroupsForUser(request: ListGroupsForUserRequest): Promise<ListGroupsForUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listGroupsForUserWithOptions(request, runtime);
  }

  async addUserToGroupWithOptions(request: AddUserToGroupRequest, runtime: $Util.RuntimeOptions): Promise<AddUserToGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<AddUserToGroupResponse>(await this.doRequest("AddUserToGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new AddUserToGroupResponse({}));
  }

  async addUserToGroup(request: AddUserToGroupRequest): Promise<AddUserToGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addUserToGroupWithOptions(request, runtime);
  }

  async updateGroupWithOptions(request: UpdateGroupRequest, runtime: $Util.RuntimeOptions): Promise<UpdateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateGroupResponse>(await this.doRequest("UpdateGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new UpdateGroupResponse({}));
  }

  async updateGroup(request: UpdateGroupRequest): Promise<UpdateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateGroupWithOptions(request, runtime);
  }

  async listGroupsWithOptions(request: ListGroupsRequest, runtime: $Util.RuntimeOptions): Promise<ListGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListGroupsResponse>(await this.doRequest("ListGroups", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new ListGroupsResponse({}));
  }

  async listGroups(request: ListGroupsRequest): Promise<ListGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listGroupsWithOptions(request, runtime);
  }

  async getGroupWithOptions(request: GetGroupRequest, runtime: $Util.RuntimeOptions): Promise<GetGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<GetGroupResponse>(await this.doRequest("GetGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new GetGroupResponse({}));
  }

  async getGroup(request: GetGroupRequest): Promise<GetGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getGroupWithOptions(request, runtime);
  }

  async deleteGroupWithOptions(request: DeleteGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteGroupResponse>(await this.doRequest("DeleteGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new DeleteGroupResponse({}));
  }

  async deleteGroup(request: DeleteGroupRequest): Promise<DeleteGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteGroupWithOptions(request, runtime);
  }

  async createGroupWithOptions(request: CreateGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateGroupResponse>(await this.doRequest("CreateGroup", "HTTPS", "POST", "2015-05-01", "AK", null, $tea.toMap(request), runtime), new CreateGroupResponse({}));
  }

  async createGroup(request: CreateGroupRequest): Promise<CreateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createGroupWithOptions(request, runtime);
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.isUnset(endpointMap) && !Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}
