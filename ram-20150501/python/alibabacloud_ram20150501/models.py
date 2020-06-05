# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class GetAccessKeyLastUsedRequest(TeaModel):
    def __init__(self, user_name=None, user_access_key_id=None):
        self.user_name = user_name
        self.user_access_key_id = user_access_key_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['UserAccessKeyId'] = self.user_access_key_id
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.user_access_key_id = map.get('UserAccessKeyId')
        return self


class GetAccessKeyLastUsedResponse(TeaModel):
    def __init__(self, request_id=None, access_key_last_used=None):
        self.request_id = request_id
        self.access_key_last_used = access_key_last_used

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.access_key_last_used, 'access_key_last_used')
        if self.access_key_last_used:
            self.access_key_last_used.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.access_key_last_used is not None:
            result['AccessKeyLastUsed'] = self.access_key_last_used.to_map()
        else:
            result['AccessKeyLastUsed'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AccessKeyLastUsed') is not None:
            temp_model = GetAccessKeyLastUsedResponseAccessKeyLastUsed()
            self.access_key_last_used = temp_model.from_map(map['AccessKeyLastUsed'])
        else:
            self.access_key_last_used = None
        return self


class GetAccessKeyLastUsedResponseAccessKeyLastUsed(TeaModel):
    def __init__(self, last_used_date=None):
        self.last_used_date = last_used_date

    def validate(self):
        self.validate_required(self.last_used_date, 'last_used_date')

    def to_map(self):
        result = {}
        result['LastUsedDate'] = self.last_used_date
        return result

    def from_map(self, map={}):
        self.last_used_date = map.get('LastUsedDate')
        return self


class ChangePasswordRequest(TeaModel):
    def __init__(self, old_password=None, new_password=None):
        self.old_password = old_password
        self.new_password = new_password

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OldPassword'] = self.old_password
        result['NewPassword'] = self.new_password
        return result

    def from_map(self, map={}):
        self.old_password = map.get('OldPassword')
        self.new_password = map.get('NewPassword')
        return self


class ChangePasswordResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class UpdateRoleRequest(TeaModel):
    def __init__(self, role_name=None, new_assume_role_policy_document=None, new_max_session_duration=None):
        self.role_name = role_name
        self.new_assume_role_policy_document = new_assume_role_policy_document
        self.new_max_session_duration = new_max_session_duration

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RoleName'] = self.role_name
        result['NewAssumeRolePolicyDocument'] = self.new_assume_role_policy_document
        result['NewMaxSessionDuration'] = self.new_max_session_duration
        return result

    def from_map(self, map={}):
        self.role_name = map.get('RoleName')
        self.new_assume_role_policy_document = map.get('NewAssumeRolePolicyDocument')
        self.new_max_session_duration = map.get('NewMaxSessionDuration')
        return self


class UpdateRoleResponse(TeaModel):
    def __init__(self, request_id=None, role=None):
        self.request_id = request_id
        self.role = role

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.role, 'role')
        if self.role:
            self.role.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.role is not None:
            result['Role'] = self.role.to_map()
        else:
            result['Role'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Role') is not None:
            temp_model = UpdateRoleResponseRole()
            self.role = temp_model.from_map(map['Role'])
        else:
            self.role = None
        return self


class UpdateRoleResponseRole(TeaModel):
    def __init__(self, role_id=None, role_name=None, arn=None, description=None, assume_role_policy_document=None, create_date=None, update_date=None, max_session_duration=None):
        self.role_id = role_id
        self.role_name = role_name
        self.arn = arn
        self.description = description
        self.assume_role_policy_document = assume_role_policy_document
        self.create_date = create_date
        self.update_date = update_date
        self.max_session_duration = max_session_duration

    def validate(self):
        self.validate_required(self.role_id, 'role_id')
        self.validate_required(self.role_name, 'role_name')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.description, 'description')
        self.validate_required(self.assume_role_policy_document, 'assume_role_policy_document')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')
        self.validate_required(self.max_session_duration, 'max_session_duration')

    def to_map(self):
        result = {}
        result['RoleId'] = self.role_id
        result['RoleName'] = self.role_name
        result['Arn'] = self.arn
        result['Description'] = self.description
        result['AssumeRolePolicyDocument'] = self.assume_role_policy_document
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        result['MaxSessionDuration'] = self.max_session_duration
        return result

    def from_map(self, map={}):
        self.role_id = map.get('RoleId')
        self.role_name = map.get('RoleName')
        self.arn = map.get('Arn')
        self.description = map.get('Description')
        self.assume_role_policy_document = map.get('AssumeRolePolicyDocument')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        self.max_session_duration = map.get('MaxSessionDuration')
        return self


class SetSecurityPreferenceRequest(TeaModel):
    def __init__(self, enable_save_mfaticket=None, allow_user_to_change_password=None, allow_user_to_manage_access_keys=None, allow_user_to_manage_public_keys=None, allow_user_to_manage_mfadevices=None, login_session_duration=None, login_network_masks=None):
        self.enable_save_mfaticket = enable_save_mfaticket
        self.allow_user_to_change_password = allow_user_to_change_password
        self.allow_user_to_manage_access_keys = allow_user_to_manage_access_keys
        self.allow_user_to_manage_public_keys = allow_user_to_manage_public_keys
        self.allow_user_to_manage_mfadevices = allow_user_to_manage_mfadevices
        self.login_session_duration = login_session_duration
        self.login_network_masks = login_network_masks

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['EnableSaveMFATicket'] = self.enable_save_mfaticket
        result['AllowUserToChangePassword'] = self.allow_user_to_change_password
        result['AllowUserToManageAccessKeys'] = self.allow_user_to_manage_access_keys
        result['AllowUserToManagePublicKeys'] = self.allow_user_to_manage_public_keys
        result['AllowUserToManageMFADevices'] = self.allow_user_to_manage_mfadevices
        result['LoginSessionDuration'] = self.login_session_duration
        result['LoginNetworkMasks'] = self.login_network_masks
        return result

    def from_map(self, map={}):
        self.enable_save_mfaticket = map.get('EnableSaveMFATicket')
        self.allow_user_to_change_password = map.get('AllowUserToChangePassword')
        self.allow_user_to_manage_access_keys = map.get('AllowUserToManageAccessKeys')
        self.allow_user_to_manage_public_keys = map.get('AllowUserToManagePublicKeys')
        self.allow_user_to_manage_mfadevices = map.get('AllowUserToManageMFADevices')
        self.login_session_duration = map.get('LoginSessionDuration')
        self.login_network_masks = map.get('LoginNetworkMasks')
        return self


class SetSecurityPreferenceResponse(TeaModel):
    def __init__(self, request_id=None, security_preference=None):
        self.request_id = request_id
        self.security_preference = security_preference

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.security_preference, 'security_preference')
        if self.security_preference:
            self.security_preference.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.security_preference is not None:
            result['SecurityPreference'] = self.security_preference.to_map()
        else:
            result['SecurityPreference'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('SecurityPreference') is not None:
            temp_model = SetSecurityPreferenceResponseSecurityPreference()
            self.security_preference = temp_model.from_map(map['SecurityPreference'])
        else:
            self.security_preference = None
        return self


class SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference(TeaModel):
    def __init__(self, enable_save_mfaticket=None, allow_user_to_change_password=None, login_session_duration=None, login_network_masks=None):
        self.enable_save_mfaticket = enable_save_mfaticket
        self.allow_user_to_change_password = allow_user_to_change_password
        self.login_session_duration = login_session_duration
        self.login_network_masks = login_network_masks

    def validate(self):
        self.validate_required(self.enable_save_mfaticket, 'enable_save_mfaticket')
        self.validate_required(self.allow_user_to_change_password, 'allow_user_to_change_password')
        self.validate_required(self.login_session_duration, 'login_session_duration')
        self.validate_required(self.login_network_masks, 'login_network_masks')

    def to_map(self):
        result = {}
        result['EnableSaveMFATicket'] = self.enable_save_mfaticket
        result['AllowUserToChangePassword'] = self.allow_user_to_change_password
        result['LoginSessionDuration'] = self.login_session_duration
        result['LoginNetworkMasks'] = self.login_network_masks
        return result

    def from_map(self, map={}):
        self.enable_save_mfaticket = map.get('EnableSaveMFATicket')
        self.allow_user_to_change_password = map.get('AllowUserToChangePassword')
        self.login_session_duration = map.get('LoginSessionDuration')
        self.login_network_masks = map.get('LoginNetworkMasks')
        return self


class SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference(TeaModel):
    def __init__(self, allow_user_to_manage_access_keys=None):
        self.allow_user_to_manage_access_keys = allow_user_to_manage_access_keys

    def validate(self):
        self.validate_required(self.allow_user_to_manage_access_keys, 'allow_user_to_manage_access_keys')

    def to_map(self):
        result = {}
        result['AllowUserToManageAccessKeys'] = self.allow_user_to_manage_access_keys
        return result

    def from_map(self, map={}):
        self.allow_user_to_manage_access_keys = map.get('AllowUserToManageAccessKeys')
        return self


class SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference(TeaModel):
    def __init__(self, allow_user_to_manage_public_keys=None):
        self.allow_user_to_manage_public_keys = allow_user_to_manage_public_keys

    def validate(self):
        self.validate_required(self.allow_user_to_manage_public_keys, 'allow_user_to_manage_public_keys')

    def to_map(self):
        result = {}
        result['AllowUserToManagePublicKeys'] = self.allow_user_to_manage_public_keys
        return result

    def from_map(self, map={}):
        self.allow_user_to_manage_public_keys = map.get('AllowUserToManagePublicKeys')
        return self


class SetSecurityPreferenceResponseSecurityPreferenceMFAPreference(TeaModel):
    def __init__(self, allow_user_to_manage_mfadevices=None):
        self.allow_user_to_manage_mfadevices = allow_user_to_manage_mfadevices

    def validate(self):
        self.validate_required(self.allow_user_to_manage_mfadevices, 'allow_user_to_manage_mfadevices')

    def to_map(self):
        result = {}
        result['AllowUserToManageMFADevices'] = self.allow_user_to_manage_mfadevices
        return result

    def from_map(self, map={}):
        self.allow_user_to_manage_mfadevices = map.get('AllowUserToManageMFADevices')
        return self


class SetSecurityPreferenceResponseSecurityPreference(TeaModel):
    def __init__(self, login_profile_preference=None, access_key_preference=None, public_key_preference=None, mfapreference=None):
        self.login_profile_preference = login_profile_preference
        self.access_key_preference = access_key_preference
        self.public_key_preference = public_key_preference
        self.mfapreference = mfapreference

    def validate(self):
        self.validate_required(self.login_profile_preference, 'login_profile_preference')
        if self.login_profile_preference:
            self.login_profile_preference.validate()
        self.validate_required(self.access_key_preference, 'access_key_preference')
        if self.access_key_preference:
            self.access_key_preference.validate()
        self.validate_required(self.public_key_preference, 'public_key_preference')
        if self.public_key_preference:
            self.public_key_preference.validate()
        self.validate_required(self.mfapreference, 'mfapreference')
        if self.mfapreference:
            self.mfapreference.validate()

    def to_map(self):
        result = {}
        if self.login_profile_preference is not None:
            result['LoginProfilePreference'] = self.login_profile_preference.to_map()
        else:
            result['LoginProfilePreference'] = None
        if self.access_key_preference is not None:
            result['AccessKeyPreference'] = self.access_key_preference.to_map()
        else:
            result['AccessKeyPreference'] = None
        if self.public_key_preference is not None:
            result['PublicKeyPreference'] = self.public_key_preference.to_map()
        else:
            result['PublicKeyPreference'] = None
        if self.mfapreference is not None:
            result['MFAPreference'] = self.mfapreference.to_map()
        else:
            result['MFAPreference'] = None
        return result

    def from_map(self, map={}):
        if map.get('LoginProfilePreference') is not None:
            temp_model = SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference()
            self.login_profile_preference = temp_model.from_map(map['LoginProfilePreference'])
        else:
            self.login_profile_preference = None
        if map.get('AccessKeyPreference') is not None:
            temp_model = SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference()
            self.access_key_preference = temp_model.from_map(map['AccessKeyPreference'])
        else:
            self.access_key_preference = None
        if map.get('PublicKeyPreference') is not None:
            temp_model = SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference()
            self.public_key_preference = temp_model.from_map(map['PublicKeyPreference'])
        else:
            self.public_key_preference = None
        if map.get('MFAPreference') is not None:
            temp_model = SetSecurityPreferenceResponseSecurityPreferenceMFAPreference()
            self.mfapreference = temp_model.from_map(map['MFAPreference'])
        else:
            self.mfapreference = None
        return self


class ListRolesRequest(TeaModel):
    def __init__(self, marker=None, max_items=None):
        self.marker = marker
        self.max_items = max_items

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Marker'] = self.marker
        result['MaxItems'] = self.max_items
        return result

    def from_map(self, map={}):
        self.marker = map.get('Marker')
        self.max_items = map.get('MaxItems')
        return self


class ListRolesResponse(TeaModel):
    def __init__(self, request_id=None, is_truncated=None, marker=None, roles=None):
        self.request_id = request_id
        self.is_truncated = is_truncated
        self.marker = marker
        self.roles = roles

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_truncated, 'is_truncated')
        self.validate_required(self.marker, 'marker')
        self.validate_required(self.roles, 'roles')
        if self.roles:
            self.roles.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsTruncated'] = self.is_truncated
        result['Marker'] = self.marker
        if self.roles is not None:
            result['Roles'] = self.roles.to_map()
        else:
            result['Roles'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_truncated = map.get('IsTruncated')
        self.marker = map.get('Marker')
        if map.get('Roles') is not None:
            temp_model = ListRolesResponseRoles()
            self.roles = temp_model.from_map(map['Roles'])
        else:
            self.roles = None
        return self


class ListRolesResponseRolesRole(TeaModel):
    def __init__(self, role_id=None, role_name=None, arn=None, description=None, create_date=None, update_date=None, max_session_duration=None):
        self.role_id = role_id
        self.role_name = role_name
        self.arn = arn
        self.description = description
        self.create_date = create_date
        self.update_date = update_date
        self.max_session_duration = max_session_duration

    def validate(self):
        self.validate_required(self.role_id, 'role_id')
        self.validate_required(self.role_name, 'role_name')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.description, 'description')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')
        self.validate_required(self.max_session_duration, 'max_session_duration')

    def to_map(self):
        result = {}
        result['RoleId'] = self.role_id
        result['RoleName'] = self.role_name
        result['Arn'] = self.arn
        result['Description'] = self.description
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        result['MaxSessionDuration'] = self.max_session_duration
        return result

    def from_map(self, map={}):
        self.role_id = map.get('RoleId')
        self.role_name = map.get('RoleName')
        self.arn = map.get('Arn')
        self.description = map.get('Description')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        self.max_session_duration = map.get('MaxSessionDuration')
        return self


class ListRolesResponseRoles(TeaModel):
    def __init__(self, role=None):
        self.role = []

    def validate(self):
        self.validate_required(self.role, 'role')
        if self.role:
            for k in self.role:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Role'] = []
        if self.role is not None:
            for k in self.role:
                result['Role'].append(k.to_map() if k else None)
        else:
            result['Role'] = None
        return result

    def from_map(self, map={}):
        self.role = []
        if map.get('Role') is not None:
            for k in map.get('Role'):
                temp_model = ListRolesResponseRolesRole()
                temp_model = temp_model.from_map(k)
                self.role.append(temp_model)
        else:
            self.role = None
        return self


class ListPoliciesForRoleRequest(TeaModel):
    def __init__(self, role_name=None):
        self.role_name = role_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RoleName'] = self.role_name
        return result

    def from_map(self, map={}):
        self.role_name = map.get('RoleName')
        return self


class ListPoliciesForRoleResponse(TeaModel):
    def __init__(self, request_id=None, policies=None):
        self.request_id = request_id
        self.policies = policies

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policies, 'policies')
        if self.policies:
            self.policies.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policies is not None:
            result['Policies'] = self.policies.to_map()
        else:
            result['Policies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Policies') is not None:
            temp_model = ListPoliciesForRoleResponsePolicies()
            self.policies = temp_model.from_map(map['Policies'])
        else:
            self.policies = None
        return self


class ListPoliciesForRoleResponsePoliciesPolicy(TeaModel):
    def __init__(self, policy_name=None, policy_type=None, description=None, default_version=None, attach_date=None):
        self.policy_name = policy_name
        self.policy_type = policy_type
        self.description = description
        self.default_version = default_version
        self.attach_date = attach_date

    def validate(self):
        self.validate_required(self.policy_name, 'policy_name')
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.default_version, 'default_version')
        self.validate_required(self.attach_date, 'attach_date')

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['PolicyType'] = self.policy_type
        result['Description'] = self.description
        result['DefaultVersion'] = self.default_version
        result['AttachDate'] = self.attach_date
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.policy_type = map.get('PolicyType')
        self.description = map.get('Description')
        self.default_version = map.get('DefaultVersion')
        self.attach_date = map.get('AttachDate')
        return self


class ListPoliciesForRoleResponsePolicies(TeaModel):
    def __init__(self, policy=None):
        self.policy = []

    def validate(self):
        self.validate_required(self.policy, 'policy')
        if self.policy:
            for k in self.policy:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Policy'] = []
        if self.policy is not None:
            for k in self.policy:
                result['Policy'].append(k.to_map() if k else None)
        else:
            result['Policy'] = None
        return result

    def from_map(self, map={}):
        self.policy = []
        if map.get('Policy') is not None:
            for k in map.get('Policy'):
                temp_model = ListPoliciesForRoleResponsePoliciesPolicy()
                temp_model = temp_model.from_map(k)
                self.policy.append(temp_model)
        else:
            self.policy = None
        return self


class GetSecurityPreferenceRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class GetSecurityPreferenceResponse(TeaModel):
    def __init__(self, request_id=None, security_preference=None):
        self.request_id = request_id
        self.security_preference = security_preference

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.security_preference, 'security_preference')
        if self.security_preference:
            self.security_preference.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.security_preference is not None:
            result['SecurityPreference'] = self.security_preference.to_map()
        else:
            result['SecurityPreference'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('SecurityPreference') is not None:
            temp_model = GetSecurityPreferenceResponseSecurityPreference()
            self.security_preference = temp_model.from_map(map['SecurityPreference'])
        else:
            self.security_preference = None
        return self


class GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference(TeaModel):
    def __init__(self, enable_save_mfaticket=None, allow_user_to_change_password=None, login_session_duration=None, login_network_masks=None):
        self.enable_save_mfaticket = enable_save_mfaticket
        self.allow_user_to_change_password = allow_user_to_change_password
        self.login_session_duration = login_session_duration
        self.login_network_masks = login_network_masks

    def validate(self):
        self.validate_required(self.enable_save_mfaticket, 'enable_save_mfaticket')
        self.validate_required(self.allow_user_to_change_password, 'allow_user_to_change_password')
        self.validate_required(self.login_session_duration, 'login_session_duration')
        self.validate_required(self.login_network_masks, 'login_network_masks')

    def to_map(self):
        result = {}
        result['EnableSaveMFATicket'] = self.enable_save_mfaticket
        result['AllowUserToChangePassword'] = self.allow_user_to_change_password
        result['LoginSessionDuration'] = self.login_session_duration
        result['LoginNetworkMasks'] = self.login_network_masks
        return result

    def from_map(self, map={}):
        self.enable_save_mfaticket = map.get('EnableSaveMFATicket')
        self.allow_user_to_change_password = map.get('AllowUserToChangePassword')
        self.login_session_duration = map.get('LoginSessionDuration')
        self.login_network_masks = map.get('LoginNetworkMasks')
        return self


class GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference(TeaModel):
    def __init__(self, allow_user_to_manage_access_keys=None):
        self.allow_user_to_manage_access_keys = allow_user_to_manage_access_keys

    def validate(self):
        self.validate_required(self.allow_user_to_manage_access_keys, 'allow_user_to_manage_access_keys')

    def to_map(self):
        result = {}
        result['AllowUserToManageAccessKeys'] = self.allow_user_to_manage_access_keys
        return result

    def from_map(self, map={}):
        self.allow_user_to_manage_access_keys = map.get('AllowUserToManageAccessKeys')
        return self


class GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference(TeaModel):
    def __init__(self, allow_user_to_manage_public_keys=None):
        self.allow_user_to_manage_public_keys = allow_user_to_manage_public_keys

    def validate(self):
        self.validate_required(self.allow_user_to_manage_public_keys, 'allow_user_to_manage_public_keys')

    def to_map(self):
        result = {}
        result['AllowUserToManagePublicKeys'] = self.allow_user_to_manage_public_keys
        return result

    def from_map(self, map={}):
        self.allow_user_to_manage_public_keys = map.get('AllowUserToManagePublicKeys')
        return self


class GetSecurityPreferenceResponseSecurityPreferenceMFAPreference(TeaModel):
    def __init__(self, allow_user_to_manage_mfadevices=None):
        self.allow_user_to_manage_mfadevices = allow_user_to_manage_mfadevices

    def validate(self):
        self.validate_required(self.allow_user_to_manage_mfadevices, 'allow_user_to_manage_mfadevices')

    def to_map(self):
        result = {}
        result['AllowUserToManageMFADevices'] = self.allow_user_to_manage_mfadevices
        return result

    def from_map(self, map={}):
        self.allow_user_to_manage_mfadevices = map.get('AllowUserToManageMFADevices')
        return self


class GetSecurityPreferenceResponseSecurityPreference(TeaModel):
    def __init__(self, login_profile_preference=None, access_key_preference=None, public_key_preference=None, mfapreference=None):
        self.login_profile_preference = login_profile_preference
        self.access_key_preference = access_key_preference
        self.public_key_preference = public_key_preference
        self.mfapreference = mfapreference

    def validate(self):
        self.validate_required(self.login_profile_preference, 'login_profile_preference')
        if self.login_profile_preference:
            self.login_profile_preference.validate()
        self.validate_required(self.access_key_preference, 'access_key_preference')
        if self.access_key_preference:
            self.access_key_preference.validate()
        self.validate_required(self.public_key_preference, 'public_key_preference')
        if self.public_key_preference:
            self.public_key_preference.validate()
        self.validate_required(self.mfapreference, 'mfapreference')
        if self.mfapreference:
            self.mfapreference.validate()

    def to_map(self):
        result = {}
        if self.login_profile_preference is not None:
            result['LoginProfilePreference'] = self.login_profile_preference.to_map()
        else:
            result['LoginProfilePreference'] = None
        if self.access_key_preference is not None:
            result['AccessKeyPreference'] = self.access_key_preference.to_map()
        else:
            result['AccessKeyPreference'] = None
        if self.public_key_preference is not None:
            result['PublicKeyPreference'] = self.public_key_preference.to_map()
        else:
            result['PublicKeyPreference'] = None
        if self.mfapreference is not None:
            result['MFAPreference'] = self.mfapreference.to_map()
        else:
            result['MFAPreference'] = None
        return result

    def from_map(self, map={}):
        if map.get('LoginProfilePreference') is not None:
            temp_model = GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference()
            self.login_profile_preference = temp_model.from_map(map['LoginProfilePreference'])
        else:
            self.login_profile_preference = None
        if map.get('AccessKeyPreference') is not None:
            temp_model = GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference()
            self.access_key_preference = temp_model.from_map(map['AccessKeyPreference'])
        else:
            self.access_key_preference = None
        if map.get('PublicKeyPreference') is not None:
            temp_model = GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference()
            self.public_key_preference = temp_model.from_map(map['PublicKeyPreference'])
        else:
            self.public_key_preference = None
        if map.get('MFAPreference') is not None:
            temp_model = GetSecurityPreferenceResponseSecurityPreferenceMFAPreference()
            self.mfapreference = temp_model.from_map(map['MFAPreference'])
        else:
            self.mfapreference = None
        return self


class GetRoleRequest(TeaModel):
    def __init__(self, role_name=None):
        self.role_name = role_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RoleName'] = self.role_name
        return result

    def from_map(self, map={}):
        self.role_name = map.get('RoleName')
        return self


class GetRoleResponse(TeaModel):
    def __init__(self, request_id=None, role=None):
        self.request_id = request_id
        self.role = role

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.role, 'role')
        if self.role:
            self.role.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.role is not None:
            result['Role'] = self.role.to_map()
        else:
            result['Role'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Role') is not None:
            temp_model = GetRoleResponseRole()
            self.role = temp_model.from_map(map['Role'])
        else:
            self.role = None
        return self


class GetRoleResponseRole(TeaModel):
    def __init__(self, role_id=None, role_name=None, arn=None, description=None, assume_role_policy_document=None, create_date=None, update_date=None, max_session_duration=None):
        self.role_id = role_id
        self.role_name = role_name
        self.arn = arn
        self.description = description
        self.assume_role_policy_document = assume_role_policy_document
        self.create_date = create_date
        self.update_date = update_date
        self.max_session_duration = max_session_duration

    def validate(self):
        self.validate_required(self.role_id, 'role_id')
        self.validate_required(self.role_name, 'role_name')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.description, 'description')
        self.validate_required(self.assume_role_policy_document, 'assume_role_policy_document')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')
        self.validate_required(self.max_session_duration, 'max_session_duration')

    def to_map(self):
        result = {}
        result['RoleId'] = self.role_id
        result['RoleName'] = self.role_name
        result['Arn'] = self.arn
        result['Description'] = self.description
        result['AssumeRolePolicyDocument'] = self.assume_role_policy_document
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        result['MaxSessionDuration'] = self.max_session_duration
        return result

    def from_map(self, map={}):
        self.role_id = map.get('RoleId')
        self.role_name = map.get('RoleName')
        self.arn = map.get('Arn')
        self.description = map.get('Description')
        self.assume_role_policy_document = map.get('AssumeRolePolicyDocument')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        self.max_session_duration = map.get('MaxSessionDuration')
        return self


class DetachPolicyFromRoleRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None, role_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name
        self.role_name = role_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        result['RoleName'] = self.role_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        self.role_name = map.get('RoleName')
        return self


class DetachPolicyFromRoleResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteRoleRequest(TeaModel):
    def __init__(self, role_name=None):
        self.role_name = role_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RoleName'] = self.role_name
        return result

    def from_map(self, map={}):
        self.role_name = map.get('RoleName')
        return self


class DeleteRoleResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateRoleRequest(TeaModel):
    def __init__(self, role_name=None, description=None, assume_role_policy_document=None, max_session_duration=None):
        self.role_name = role_name
        self.description = description
        self.assume_role_policy_document = assume_role_policy_document
        self.max_session_duration = max_session_duration

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RoleName'] = self.role_name
        result['Description'] = self.description
        result['AssumeRolePolicyDocument'] = self.assume_role_policy_document
        result['MaxSessionDuration'] = self.max_session_duration
        return result

    def from_map(self, map={}):
        self.role_name = map.get('RoleName')
        self.description = map.get('Description')
        self.assume_role_policy_document = map.get('AssumeRolePolicyDocument')
        self.max_session_duration = map.get('MaxSessionDuration')
        return self


class CreateRoleResponse(TeaModel):
    def __init__(self, request_id=None, role=None):
        self.request_id = request_id
        self.role = role

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.role, 'role')
        if self.role:
            self.role.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.role is not None:
            result['Role'] = self.role.to_map()
        else:
            result['Role'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Role') is not None:
            temp_model = CreateRoleResponseRole()
            self.role = temp_model.from_map(map['Role'])
        else:
            self.role = None
        return self


class CreateRoleResponseRole(TeaModel):
    def __init__(self, role_id=None, role_name=None, arn=None, description=None, assume_role_policy_document=None, create_date=None, max_session_duration=None):
        self.role_id = role_id
        self.role_name = role_name
        self.arn = arn
        self.description = description
        self.assume_role_policy_document = assume_role_policy_document
        self.create_date = create_date
        self.max_session_duration = max_session_duration

    def validate(self):
        self.validate_required(self.role_id, 'role_id')
        self.validate_required(self.role_name, 'role_name')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.description, 'description')
        self.validate_required(self.assume_role_policy_document, 'assume_role_policy_document')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.max_session_duration, 'max_session_duration')

    def to_map(self):
        result = {}
        result['RoleId'] = self.role_id
        result['RoleName'] = self.role_name
        result['Arn'] = self.arn
        result['Description'] = self.description
        result['AssumeRolePolicyDocument'] = self.assume_role_policy_document
        result['CreateDate'] = self.create_date
        result['MaxSessionDuration'] = self.max_session_duration
        return result

    def from_map(self, map={}):
        self.role_id = map.get('RoleId')
        self.role_name = map.get('RoleName')
        self.arn = map.get('Arn')
        self.description = map.get('Description')
        self.assume_role_policy_document = map.get('AssumeRolePolicyDocument')
        self.create_date = map.get('CreateDate')
        self.max_session_duration = map.get('MaxSessionDuration')
        return self


class AttachPolicyToRoleRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None, role_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name
        self.role_name = role_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        result['RoleName'] = self.role_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        self.role_name = map.get('RoleName')
        return self


class AttachPolicyToRoleResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class UnbindMFADeviceRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class UnbindMFADeviceResponse(TeaModel):
    def __init__(self, request_id=None, mfadevice=None):
        self.request_id = request_id
        self.mfadevice = mfadevice

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.mfadevice, 'mfadevice')
        if self.mfadevice:
            self.mfadevice.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.mfadevice is not None:
            result['MFADevice'] = self.mfadevice.to_map()
        else:
            result['MFADevice'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MFADevice') is not None:
            temp_model = UnbindMFADeviceResponseMFADevice()
            self.mfadevice = temp_model.from_map(map['MFADevice'])
        else:
            self.mfadevice = None
        return self


class UnbindMFADeviceResponseMFADevice(TeaModel):
    def __init__(self, serial_number=None):
        self.serial_number = serial_number

    def validate(self):
        self.validate_required(self.serial_number, 'serial_number')

    def to_map(self):
        result = {}
        result['SerialNumber'] = self.serial_number
        return result

    def from_map(self, map={}):
        self.serial_number = map.get('SerialNumber')
        return self


class ListVirtualMFADevicesRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class ListVirtualMFADevicesResponse(TeaModel):
    def __init__(self, request_id=None, virtual_mfadevices=None):
        self.request_id = request_id
        self.virtual_mfadevices = virtual_mfadevices

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.virtual_mfadevices, 'virtual_mfadevices')
        if self.virtual_mfadevices:
            self.virtual_mfadevices.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.virtual_mfadevices is not None:
            result['VirtualMFADevices'] = self.virtual_mfadevices.to_map()
        else:
            result['VirtualMFADevices'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('VirtualMFADevices') is not None:
            temp_model = ListVirtualMFADevicesResponseVirtualMFADevices()
            self.virtual_mfadevices = temp_model.from_map(map['VirtualMFADevices'])
        else:
            self.virtual_mfadevices = None
        return self


class ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser(TeaModel):
    def __init__(self, user_id=None, user_name=None, display_name=None):
        self.user_id = user_id
        self.user_name = user_name
        self.display_name = display_name

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.display_name, 'display_name')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        return self


class ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice(TeaModel):
    def __init__(self, serial_number=None, activate_date=None, user=None):
        self.serial_number = serial_number
        self.activate_date = activate_date
        self.user = user

    def validate(self):
        self.validate_required(self.serial_number, 'serial_number')
        self.validate_required(self.activate_date, 'activate_date')
        self.validate_required(self.user, 'user')
        if self.user:
            self.user.validate()

    def to_map(self):
        result = {}
        result['SerialNumber'] = self.serial_number
        result['ActivateDate'] = self.activate_date
        if self.user is not None:
            result['User'] = self.user.to_map()
        else:
            result['User'] = None
        return result

    def from_map(self, map={}):
        self.serial_number = map.get('SerialNumber')
        self.activate_date = map.get('ActivateDate')
        if map.get('User') is not None:
            temp_model = ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser()
            self.user = temp_model.from_map(map['User'])
        else:
            self.user = None
        return self


class ListVirtualMFADevicesResponseVirtualMFADevices(TeaModel):
    def __init__(self, virtual_mfadevice=None):
        self.virtual_mfadevice = []

    def validate(self):
        self.validate_required(self.virtual_mfadevice, 'virtual_mfadevice')
        if self.virtual_mfadevice:
            for k in self.virtual_mfadevice:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VirtualMFADevice'] = []
        if self.virtual_mfadevice is not None:
            for k in self.virtual_mfadevice:
                result['VirtualMFADevice'].append(k.to_map() if k else None)
        else:
            result['VirtualMFADevice'] = None
        return result

    def from_map(self, map={}):
        self.virtual_mfadevice = []
        if map.get('VirtualMFADevice') is not None:
            for k in map.get('VirtualMFADevice'):
                temp_model = ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice()
                temp_model = temp_model.from_map(k)
                self.virtual_mfadevice.append(temp_model)
        else:
            self.virtual_mfadevice = None
        return self


class GetUserMFAInfoRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class GetUserMFAInfoResponse(TeaModel):
    def __init__(self, request_id=None, mfadevice=None):
        self.request_id = request_id
        self.mfadevice = mfadevice

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.mfadevice, 'mfadevice')
        if self.mfadevice:
            self.mfadevice.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.mfadevice is not None:
            result['MFADevice'] = self.mfadevice.to_map()
        else:
            result['MFADevice'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MFADevice') is not None:
            temp_model = GetUserMFAInfoResponseMFADevice()
            self.mfadevice = temp_model.from_map(map['MFADevice'])
        else:
            self.mfadevice = None
        return self


class GetUserMFAInfoResponseMFADevice(TeaModel):
    def __init__(self, serial_number=None):
        self.serial_number = serial_number

    def validate(self):
        self.validate_required(self.serial_number, 'serial_number')

    def to_map(self):
        result = {}
        result['SerialNumber'] = self.serial_number
        return result

    def from_map(self, map={}):
        self.serial_number = map.get('SerialNumber')
        return self


class DeleteVirtualMFADeviceRequest(TeaModel):
    def __init__(self, serial_number=None):
        self.serial_number = serial_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SerialNumber'] = self.serial_number
        return result

    def from_map(self, map={}):
        self.serial_number = map.get('SerialNumber')
        return self


class DeleteVirtualMFADeviceResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateVirtualMFADeviceRequest(TeaModel):
    def __init__(self, virtual_mfadevice_name=None):
        self.virtual_mfadevice_name = virtual_mfadevice_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['VirtualMFADeviceName'] = self.virtual_mfadevice_name
        return result

    def from_map(self, map={}):
        self.virtual_mfadevice_name = map.get('VirtualMFADeviceName')
        return self


class CreateVirtualMFADeviceResponse(TeaModel):
    def __init__(self, request_id=None, virtual_mfadevice=None):
        self.request_id = request_id
        self.virtual_mfadevice = virtual_mfadevice

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.virtual_mfadevice, 'virtual_mfadevice')
        if self.virtual_mfadevice:
            self.virtual_mfadevice.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.virtual_mfadevice is not None:
            result['VirtualMFADevice'] = self.virtual_mfadevice.to_map()
        else:
            result['VirtualMFADevice'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('VirtualMFADevice') is not None:
            temp_model = CreateVirtualMFADeviceResponseVirtualMFADevice()
            self.virtual_mfadevice = temp_model.from_map(map['VirtualMFADevice'])
        else:
            self.virtual_mfadevice = None
        return self


class CreateVirtualMFADeviceResponseVirtualMFADevice(TeaModel):
    def __init__(self, serial_number=None, base_32string_seed=None, qrcode_png=None):
        self.serial_number = serial_number
        self.base_32string_seed = base_32string_seed
        self.qrcode_png = qrcode_png

    def validate(self):
        self.validate_required(self.serial_number, 'serial_number')
        self.validate_required(self.base_32string_seed, 'base_32string_seed')
        self.validate_required(self.qrcode_png, 'qrcode_png')

    def to_map(self):
        result = {}
        result['SerialNumber'] = self.serial_number
        result['Base32StringSeed'] = self.base_32string_seed
        result['QRCodePNG'] = self.qrcode_png
        return result

    def from_map(self, map={}):
        self.serial_number = map.get('SerialNumber')
        self.base_32string_seed = map.get('Base32StringSeed')
        self.qrcode_png = map.get('QRCodePNG')
        return self


class BindMFADeviceRequest(TeaModel):
    def __init__(self, serial_number=None, user_name=None, authentication_code_1=None, authentication_code_2=None):
        self.serial_number = serial_number
        self.user_name = user_name
        self.authentication_code_1 = authentication_code_1
        self.authentication_code_2 = authentication_code_2

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SerialNumber'] = self.serial_number
        result['UserName'] = self.user_name
        result['AuthenticationCode1'] = self.authentication_code_1
        result['AuthenticationCode2'] = self.authentication_code_2
        return result

    def from_map(self, map={}):
        self.serial_number = map.get('SerialNumber')
        self.user_name = map.get('UserName')
        self.authentication_code_1 = map.get('AuthenticationCode1')
        self.authentication_code_2 = map.get('AuthenticationCode2')
        return self


class BindMFADeviceResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class UpdateLoginProfileRequest(TeaModel):
    def __init__(self, user_name=None, password=None, password_reset_required=None, mfabind_required=None):
        self.user_name = user_name
        self.password = password
        self.password_reset_required = password_reset_required
        self.mfabind_required = mfabind_required

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['Password'] = self.password
        result['PasswordResetRequired'] = self.password_reset_required
        result['MFABindRequired'] = self.mfabind_required
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.password = map.get('Password')
        self.password_reset_required = map.get('PasswordResetRequired')
        self.mfabind_required = map.get('MFABindRequired')
        return self


class UpdateLoginProfileResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetLoginProfileRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class GetLoginProfileResponse(TeaModel):
    def __init__(self, request_id=None, login_profile=None):
        self.request_id = request_id
        self.login_profile = login_profile

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.login_profile, 'login_profile')
        if self.login_profile:
            self.login_profile.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.login_profile is not None:
            result['LoginProfile'] = self.login_profile.to_map()
        else:
            result['LoginProfile'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('LoginProfile') is not None:
            temp_model = GetLoginProfileResponseLoginProfile()
            self.login_profile = temp_model.from_map(map['LoginProfile'])
        else:
            self.login_profile = None
        return self


class GetLoginProfileResponseLoginProfile(TeaModel):
    def __init__(self, user_name=None, password_reset_required=None, mfabind_required=None, create_date=None):
        self.user_name = user_name
        self.password_reset_required = password_reset_required
        self.mfabind_required = mfabind_required
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.password_reset_required, 'password_reset_required')
        self.validate_required(self.mfabind_required, 'mfabind_required')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['PasswordResetRequired'] = self.password_reset_required
        result['MFABindRequired'] = self.mfabind_required
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.password_reset_required = map.get('PasswordResetRequired')
        self.mfabind_required = map.get('MFABindRequired')
        self.create_date = map.get('CreateDate')
        return self


class DeleteLoginProfileRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class DeleteLoginProfileResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateLoginProfileRequest(TeaModel):
    def __init__(self, user_name=None, password=None, password_reset_required=None, mfabind_required=None):
        self.user_name = user_name
        self.password = password
        self.password_reset_required = password_reset_required
        self.mfabind_required = mfabind_required

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['Password'] = self.password
        result['PasswordResetRequired'] = self.password_reset_required
        result['MFABindRequired'] = self.mfabind_required
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.password = map.get('Password')
        self.password_reset_required = map.get('PasswordResetRequired')
        self.mfabind_required = map.get('MFABindRequired')
        return self


class CreateLoginProfileResponse(TeaModel):
    def __init__(self, request_id=None, login_profile=None):
        self.request_id = request_id
        self.login_profile = login_profile

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.login_profile, 'login_profile')
        if self.login_profile:
            self.login_profile.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.login_profile is not None:
            result['LoginProfile'] = self.login_profile.to_map()
        else:
            result['LoginProfile'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('LoginProfile') is not None:
            temp_model = CreateLoginProfileResponseLoginProfile()
            self.login_profile = temp_model.from_map(map['LoginProfile'])
        else:
            self.login_profile = None
        return self


class CreateLoginProfileResponseLoginProfile(TeaModel):
    def __init__(self, user_name=None, password_reset_required=None, mfabind_required=None, create_date=None):
        self.user_name = user_name
        self.password_reset_required = password_reset_required
        self.mfabind_required = mfabind_required
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.password_reset_required, 'password_reset_required')
        self.validate_required(self.mfabind_required, 'mfabind_required')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['PasswordResetRequired'] = self.password_reset_required
        result['MFABindRequired'] = self.mfabind_required
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.password_reset_required = map.get('PasswordResetRequired')
        self.mfabind_required = map.get('MFABindRequired')
        self.create_date = map.get('CreateDate')
        return self


class UpdateUserRequest(TeaModel):
    def __init__(self, user_name=None, new_user_name=None, new_display_name=None, new_mobile_phone=None, new_email=None, new_comments=None):
        self.user_name = user_name
        self.new_user_name = new_user_name
        self.new_display_name = new_display_name
        self.new_mobile_phone = new_mobile_phone
        self.new_email = new_email
        self.new_comments = new_comments

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['NewUserName'] = self.new_user_name
        result['NewDisplayName'] = self.new_display_name
        result['NewMobilePhone'] = self.new_mobile_phone
        result['NewEmail'] = self.new_email
        result['NewComments'] = self.new_comments
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.new_user_name = map.get('NewUserName')
        self.new_display_name = map.get('NewDisplayName')
        self.new_mobile_phone = map.get('NewMobilePhone')
        self.new_email = map.get('NewEmail')
        self.new_comments = map.get('NewComments')
        return self


class UpdateUserResponse(TeaModel):
    def __init__(self, request_id=None, user=None):
        self.request_id = request_id
        self.user = user

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.user, 'user')
        if self.user:
            self.user.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.user is not None:
            result['User'] = self.user.to_map()
        else:
            result['User'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('User') is not None:
            temp_model = UpdateUserResponseUser()
            self.user = temp_model.from_map(map['User'])
        else:
            self.user = None
        return self


class UpdateUserResponseUser(TeaModel):
    def __init__(self, user_id=None, user_name=None, display_name=None, mobile_phone=None, email=None, comments=None, create_date=None, update_date=None):
        self.user_id = user_id
        self.user_name = user_name
        self.display_name = display_name
        self.mobile_phone = mobile_phone
        self.email = email
        self.comments = comments
        self.create_date = create_date
        self.update_date = update_date

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.display_name, 'display_name')
        self.validate_required(self.mobile_phone, 'mobile_phone')
        self.validate_required(self.email, 'email')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        result['MobilePhone'] = self.mobile_phone
        result['Email'] = self.email
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        self.mobile_phone = map.get('MobilePhone')
        self.email = map.get('Email')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        return self


class ListUsersRequest(TeaModel):
    def __init__(self, marker=None, max_items=None):
        self.marker = marker
        self.max_items = max_items

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Marker'] = self.marker
        result['MaxItems'] = self.max_items
        return result

    def from_map(self, map={}):
        self.marker = map.get('Marker')
        self.max_items = map.get('MaxItems')
        return self


class ListUsersResponse(TeaModel):
    def __init__(self, request_id=None, is_truncated=None, marker=None, users=None):
        self.request_id = request_id
        self.is_truncated = is_truncated
        self.marker = marker
        self.users = users

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_truncated, 'is_truncated')
        self.validate_required(self.marker, 'marker')
        self.validate_required(self.users, 'users')
        if self.users:
            self.users.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsTruncated'] = self.is_truncated
        result['Marker'] = self.marker
        if self.users is not None:
            result['Users'] = self.users.to_map()
        else:
            result['Users'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_truncated = map.get('IsTruncated')
        self.marker = map.get('Marker')
        if map.get('Users') is not None:
            temp_model = ListUsersResponseUsers()
            self.users = temp_model.from_map(map['Users'])
        else:
            self.users = None
        return self


class ListUsersResponseUsersUser(TeaModel):
    def __init__(self, user_id=None, user_name=None, display_name=None, mobile_phone=None, email=None, comments=None, create_date=None, update_date=None):
        self.user_id = user_id
        self.user_name = user_name
        self.display_name = display_name
        self.mobile_phone = mobile_phone
        self.email = email
        self.comments = comments
        self.create_date = create_date
        self.update_date = update_date

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.display_name, 'display_name')
        self.validate_required(self.mobile_phone, 'mobile_phone')
        self.validate_required(self.email, 'email')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        result['MobilePhone'] = self.mobile_phone
        result['Email'] = self.email
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        self.mobile_phone = map.get('MobilePhone')
        self.email = map.get('Email')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        return self


class ListUsersResponseUsers(TeaModel):
    def __init__(self, user=None):
        self.user = []

    def validate(self):
        self.validate_required(self.user, 'user')
        if self.user:
            for k in self.user:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['User'] = []
        if self.user is not None:
            for k in self.user:
                result['User'].append(k.to_map() if k else None)
        else:
            result['User'] = None
        return result

    def from_map(self, map={}):
        self.user = []
        if map.get('User') is not None:
            for k in map.get('User'):
                temp_model = ListUsersResponseUsersUser()
                temp_model = temp_model.from_map(k)
                self.user.append(temp_model)
        else:
            self.user = None
        return self


class GetUserRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class GetUserResponse(TeaModel):
    def __init__(self, request_id=None, user=None):
        self.request_id = request_id
        self.user = user

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.user, 'user')
        if self.user:
            self.user.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.user is not None:
            result['User'] = self.user.to_map()
        else:
            result['User'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('User') is not None:
            temp_model = GetUserResponseUser()
            self.user = temp_model.from_map(map['User'])
        else:
            self.user = None
        return self


class GetUserResponseUser(TeaModel):
    def __init__(self, user_id=None, user_name=None, display_name=None, mobile_phone=None, email=None, comments=None, create_date=None, update_date=None, last_login_date=None):
        self.user_id = user_id
        self.user_name = user_name
        self.display_name = display_name
        self.mobile_phone = mobile_phone
        self.email = email
        self.comments = comments
        self.create_date = create_date
        self.update_date = update_date
        self.last_login_date = last_login_date

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.display_name, 'display_name')
        self.validate_required(self.mobile_phone, 'mobile_phone')
        self.validate_required(self.email, 'email')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')
        self.validate_required(self.last_login_date, 'last_login_date')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        result['MobilePhone'] = self.mobile_phone
        result['Email'] = self.email
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        result['LastLoginDate'] = self.last_login_date
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        self.mobile_phone = map.get('MobilePhone')
        self.email = map.get('Email')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        self.last_login_date = map.get('LastLoginDate')
        return self


class DeleteUserRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class DeleteUserResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateUserRequest(TeaModel):
    def __init__(self, user_name=None, display_name=None, mobile_phone=None, email=None, comments=None):
        self.user_name = user_name
        self.display_name = display_name
        self.mobile_phone = mobile_phone
        self.email = email
        self.comments = comments

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        result['MobilePhone'] = self.mobile_phone
        result['Email'] = self.email
        result['Comments'] = self.comments
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        self.mobile_phone = map.get('MobilePhone')
        self.email = map.get('Email')
        self.comments = map.get('Comments')
        return self


class CreateUserResponse(TeaModel):
    def __init__(self, request_id=None, user=None):
        self.request_id = request_id
        self.user = user

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.user, 'user')
        if self.user:
            self.user.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.user is not None:
            result['User'] = self.user.to_map()
        else:
            result['User'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('User') is not None:
            temp_model = CreateUserResponseUser()
            self.user = temp_model.from_map(map['User'])
        else:
            self.user = None
        return self


class CreateUserResponseUser(TeaModel):
    def __init__(self, user_id=None, user_name=None, display_name=None, mobile_phone=None, email=None, comments=None, create_date=None):
        self.user_id = user_id
        self.user_name = user_name
        self.display_name = display_name
        self.mobile_phone = mobile_phone
        self.email = email
        self.comments = comments
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.display_name, 'display_name')
        self.validate_required(self.mobile_phone, 'mobile_phone')
        self.validate_required(self.email, 'email')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        result['MobilePhone'] = self.mobile_phone
        result['Email'] = self.email
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        self.mobile_phone = map.get('MobilePhone')
        self.email = map.get('Email')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        return self


class UpdateAccessKeyRequest(TeaModel):
    def __init__(self, user_name=None, user_access_key_id=None, status=None):
        self.user_name = user_name
        self.user_access_key_id = user_access_key_id
        self.status = status

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['UserAccessKeyId'] = self.user_access_key_id
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.user_access_key_id = map.get('UserAccessKeyId')
        self.status = map.get('Status')
        return self


class UpdateAccessKeyResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListAccessKeysRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class ListAccessKeysResponse(TeaModel):
    def __init__(self, request_id=None, access_keys=None):
        self.request_id = request_id
        self.access_keys = access_keys

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.access_keys, 'access_keys')
        if self.access_keys:
            self.access_keys.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.access_keys is not None:
            result['AccessKeys'] = self.access_keys.to_map()
        else:
            result['AccessKeys'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AccessKeys') is not None:
            temp_model = ListAccessKeysResponseAccessKeys()
            self.access_keys = temp_model.from_map(map['AccessKeys'])
        else:
            self.access_keys = None
        return self


class ListAccessKeysResponseAccessKeysAccessKey(TeaModel):
    def __init__(self, access_key_id=None, status=None, create_date=None):
        self.access_key_id = access_key_id
        self.status = status
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.access_key_id, 'access_key_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Status'] = self.status
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.status = map.get('Status')
        self.create_date = map.get('CreateDate')
        return self


class ListAccessKeysResponseAccessKeys(TeaModel):
    def __init__(self, access_key=None):
        self.access_key = []

    def validate(self):
        self.validate_required(self.access_key, 'access_key')
        if self.access_key:
            for k in self.access_key:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessKey'] = []
        if self.access_key is not None:
            for k in self.access_key:
                result['AccessKey'].append(k.to_map() if k else None)
        else:
            result['AccessKey'] = None
        return result

    def from_map(self, map={}):
        self.access_key = []
        if map.get('AccessKey') is not None:
            for k in map.get('AccessKey'):
                temp_model = ListAccessKeysResponseAccessKeysAccessKey()
                temp_model = temp_model.from_map(k)
                self.access_key.append(temp_model)
        else:
            self.access_key = None
        return self


class DeleteAccessKeyRequest(TeaModel):
    def __init__(self, user_name=None, user_access_key_id=None):
        self.user_name = user_name
        self.user_access_key_id = user_access_key_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['UserAccessKeyId'] = self.user_access_key_id
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.user_access_key_id = map.get('UserAccessKeyId')
        return self


class DeleteAccessKeyResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateAccessKeyRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class CreateAccessKeyResponse(TeaModel):
    def __init__(self, request_id=None, access_key=None):
        self.request_id = request_id
        self.access_key = access_key

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.access_key, 'access_key')
        if self.access_key:
            self.access_key.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.access_key is not None:
            result['AccessKey'] = self.access_key.to_map()
        else:
            result['AccessKey'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AccessKey') is not None:
            temp_model = CreateAccessKeyResponseAccessKey()
            self.access_key = temp_model.from_map(map['AccessKey'])
        else:
            self.access_key = None
        return self


class CreateAccessKeyResponseAccessKey(TeaModel):
    def __init__(self, access_key_id=None, access_key_secret=None, status=None, create_date=None):
        self.access_key_id = access_key_id
        self.access_key_secret = access_key_secret
        self.status = status
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.access_key_id, 'access_key_id')
        self.validate_required(self.access_key_secret, 'access_key_secret')
        self.validate_required(self.status, 'status')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['AccessKeySecret'] = self.access_key_secret
        result['Status'] = self.status
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.access_key_secret = map.get('AccessKeySecret')
        self.status = map.get('Status')
        self.create_date = map.get('CreateDate')
        return self


class SetPasswordPolicyRequest(TeaModel):
    def __init__(self, minimum_password_length=None, require_lowercase_characters=None, require_uppercase_characters=None, require_numbers=None, require_symbols=None, hard_expiry=None, max_password_age=None, password_reuse_prevention=None, max_login_attemps=None):
        self.minimum_password_length = minimum_password_length
        self.require_lowercase_characters = require_lowercase_characters
        self.require_uppercase_characters = require_uppercase_characters
        self.require_numbers = require_numbers
        self.require_symbols = require_symbols
        self.hard_expiry = hard_expiry
        self.max_password_age = max_password_age
        self.password_reuse_prevention = password_reuse_prevention
        self.max_login_attemps = max_login_attemps

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['MinimumPasswordLength'] = self.minimum_password_length
        result['RequireLowercaseCharacters'] = self.require_lowercase_characters
        result['RequireUppercaseCharacters'] = self.require_uppercase_characters
        result['RequireNumbers'] = self.require_numbers
        result['RequireSymbols'] = self.require_symbols
        result['HardExpiry'] = self.hard_expiry
        result['MaxPasswordAge'] = self.max_password_age
        result['PasswordReusePrevention'] = self.password_reuse_prevention
        result['MaxLoginAttemps'] = self.max_login_attemps
        return result

    def from_map(self, map={}):
        self.minimum_password_length = map.get('MinimumPasswordLength')
        self.require_lowercase_characters = map.get('RequireLowercaseCharacters')
        self.require_uppercase_characters = map.get('RequireUppercaseCharacters')
        self.require_numbers = map.get('RequireNumbers')
        self.require_symbols = map.get('RequireSymbols')
        self.hard_expiry = map.get('HardExpiry')
        self.max_password_age = map.get('MaxPasswordAge')
        self.password_reuse_prevention = map.get('PasswordReusePrevention')
        self.max_login_attemps = map.get('MaxLoginAttemps')
        return self


class SetPasswordPolicyResponse(TeaModel):
    def __init__(self, request_id=None, password_policy=None):
        self.request_id = request_id
        self.password_policy = password_policy

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.password_policy, 'password_policy')
        if self.password_policy:
            self.password_policy.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.password_policy is not None:
            result['PasswordPolicy'] = self.password_policy.to_map()
        else:
            result['PasswordPolicy'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PasswordPolicy') is not None:
            temp_model = SetPasswordPolicyResponsePasswordPolicy()
            self.password_policy = temp_model.from_map(map['PasswordPolicy'])
        else:
            self.password_policy = None
        return self


class SetPasswordPolicyResponsePasswordPolicy(TeaModel):
    def __init__(self, minimum_password_length=None, require_lowercase_characters=None, require_uppercase_characters=None, require_numbers=None, require_symbols=None, hard_expiry=None, max_password_age=None, password_reuse_prevention=None, max_login_attemps=None):
        self.minimum_password_length = minimum_password_length
        self.require_lowercase_characters = require_lowercase_characters
        self.require_uppercase_characters = require_uppercase_characters
        self.require_numbers = require_numbers
        self.require_symbols = require_symbols
        self.hard_expiry = hard_expiry
        self.max_password_age = max_password_age
        self.password_reuse_prevention = password_reuse_prevention
        self.max_login_attemps = max_login_attemps

    def validate(self):
        self.validate_required(self.minimum_password_length, 'minimum_password_length')
        self.validate_required(self.require_lowercase_characters, 'require_lowercase_characters')
        self.validate_required(self.require_uppercase_characters, 'require_uppercase_characters')
        self.validate_required(self.require_numbers, 'require_numbers')
        self.validate_required(self.require_symbols, 'require_symbols')
        self.validate_required(self.hard_expiry, 'hard_expiry')
        self.validate_required(self.max_password_age, 'max_password_age')
        self.validate_required(self.password_reuse_prevention, 'password_reuse_prevention')
        self.validate_required(self.max_login_attemps, 'max_login_attemps')

    def to_map(self):
        result = {}
        result['MinimumPasswordLength'] = self.minimum_password_length
        result['RequireLowercaseCharacters'] = self.require_lowercase_characters
        result['RequireUppercaseCharacters'] = self.require_uppercase_characters
        result['RequireNumbers'] = self.require_numbers
        result['RequireSymbols'] = self.require_symbols
        result['HardExpiry'] = self.hard_expiry
        result['MaxPasswordAge'] = self.max_password_age
        result['PasswordReusePrevention'] = self.password_reuse_prevention
        result['MaxLoginAttemps'] = self.max_login_attemps
        return result

    def from_map(self, map={}):
        self.minimum_password_length = map.get('MinimumPasswordLength')
        self.require_lowercase_characters = map.get('RequireLowercaseCharacters')
        self.require_uppercase_characters = map.get('RequireUppercaseCharacters')
        self.require_numbers = map.get('RequireNumbers')
        self.require_symbols = map.get('RequireSymbols')
        self.hard_expiry = map.get('HardExpiry')
        self.max_password_age = map.get('MaxPasswordAge')
        self.password_reuse_prevention = map.get('PasswordReusePrevention')
        self.max_login_attemps = map.get('MaxLoginAttemps')
        return self


class SetAccountAliasRequest(TeaModel):
    def __init__(self, account_alias=None):
        self.account_alias = account_alias

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccountAlias'] = self.account_alias
        return result

    def from_map(self, map={}):
        self.account_alias = map.get('AccountAlias')
        return self


class SetAccountAliasResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetPasswordPolicyRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class GetPasswordPolicyResponse(TeaModel):
    def __init__(self, request_id=None, password_policy=None):
        self.request_id = request_id
        self.password_policy = password_policy

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.password_policy, 'password_policy')
        if self.password_policy:
            self.password_policy.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.password_policy is not None:
            result['PasswordPolicy'] = self.password_policy.to_map()
        else:
            result['PasswordPolicy'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PasswordPolicy') is not None:
            temp_model = GetPasswordPolicyResponsePasswordPolicy()
            self.password_policy = temp_model.from_map(map['PasswordPolicy'])
        else:
            self.password_policy = None
        return self


class GetPasswordPolicyResponsePasswordPolicy(TeaModel):
    def __init__(self, minimum_password_length=None, require_lowercase_characters=None, require_uppercase_characters=None, require_numbers=None, require_symbols=None, hard_expiry=None, max_password_age=None, password_reuse_prevention=None, max_login_attemps=None):
        self.minimum_password_length = minimum_password_length
        self.require_lowercase_characters = require_lowercase_characters
        self.require_uppercase_characters = require_uppercase_characters
        self.require_numbers = require_numbers
        self.require_symbols = require_symbols
        self.hard_expiry = hard_expiry
        self.max_password_age = max_password_age
        self.password_reuse_prevention = password_reuse_prevention
        self.max_login_attemps = max_login_attemps

    def validate(self):
        self.validate_required(self.minimum_password_length, 'minimum_password_length')
        self.validate_required(self.require_lowercase_characters, 'require_lowercase_characters')
        self.validate_required(self.require_uppercase_characters, 'require_uppercase_characters')
        self.validate_required(self.require_numbers, 'require_numbers')
        self.validate_required(self.require_symbols, 'require_symbols')
        self.validate_required(self.hard_expiry, 'hard_expiry')
        self.validate_required(self.max_password_age, 'max_password_age')
        self.validate_required(self.password_reuse_prevention, 'password_reuse_prevention')
        self.validate_required(self.max_login_attemps, 'max_login_attemps')

    def to_map(self):
        result = {}
        result['MinimumPasswordLength'] = self.minimum_password_length
        result['RequireLowercaseCharacters'] = self.require_lowercase_characters
        result['RequireUppercaseCharacters'] = self.require_uppercase_characters
        result['RequireNumbers'] = self.require_numbers
        result['RequireSymbols'] = self.require_symbols
        result['HardExpiry'] = self.hard_expiry
        result['MaxPasswordAge'] = self.max_password_age
        result['PasswordReusePrevention'] = self.password_reuse_prevention
        result['MaxLoginAttemps'] = self.max_login_attemps
        return result

    def from_map(self, map={}):
        self.minimum_password_length = map.get('MinimumPasswordLength')
        self.require_lowercase_characters = map.get('RequireLowercaseCharacters')
        self.require_uppercase_characters = map.get('RequireUppercaseCharacters')
        self.require_numbers = map.get('RequireNumbers')
        self.require_symbols = map.get('RequireSymbols')
        self.hard_expiry = map.get('HardExpiry')
        self.max_password_age = map.get('MaxPasswordAge')
        self.password_reuse_prevention = map.get('PasswordReusePrevention')
        self.max_login_attemps = map.get('MaxLoginAttemps')
        return self


class GetAccountAliasRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class GetAccountAliasResponse(TeaModel):
    def __init__(self, request_id=None, account_alias=None):
        self.request_id = request_id
        self.account_alias = account_alias

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.account_alias, 'account_alias')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AccountAlias'] = self.account_alias
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.account_alias = map.get('AccountAlias')
        return self


class ClearAccountAliasRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class ClearAccountAliasResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class SetDefaultPolicyVersionRequest(TeaModel):
    def __init__(self, policy_name=None, version_id=None):
        self.policy_name = policy_name
        self.version_id = version_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['VersionId'] = self.version_id
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.version_id = map.get('VersionId')
        return self


class SetDefaultPolicyVersionResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListPolicyVersionsRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        return self


class ListPolicyVersionsResponse(TeaModel):
    def __init__(self, request_id=None, policy_versions=None):
        self.request_id = request_id
        self.policy_versions = policy_versions

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policy_versions, 'policy_versions')
        if self.policy_versions:
            self.policy_versions.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policy_versions is not None:
            result['PolicyVersions'] = self.policy_versions.to_map()
        else:
            result['PolicyVersions'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PolicyVersions') is not None:
            temp_model = ListPolicyVersionsResponsePolicyVersions()
            self.policy_versions = temp_model.from_map(map['PolicyVersions'])
        else:
            self.policy_versions = None
        return self


class ListPolicyVersionsResponsePolicyVersionsPolicyVersion(TeaModel):
    def __init__(self, version_id=None, is_default_version=None, policy_document=None, create_date=None):
        self.version_id = version_id
        self.is_default_version = is_default_version
        self.policy_document = policy_document
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.is_default_version, 'is_default_version')
        self.validate_required(self.policy_document, 'policy_document')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['VersionId'] = self.version_id
        result['IsDefaultVersion'] = self.is_default_version
        result['PolicyDocument'] = self.policy_document
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.version_id = map.get('VersionId')
        self.is_default_version = map.get('IsDefaultVersion')
        self.policy_document = map.get('PolicyDocument')
        self.create_date = map.get('CreateDate')
        return self


class ListPolicyVersionsResponsePolicyVersions(TeaModel):
    def __init__(self, policy_version=None):
        self.policy_version = []

    def validate(self):
        self.validate_required(self.policy_version, 'policy_version')
        if self.policy_version:
            for k in self.policy_version:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PolicyVersion'] = []
        if self.policy_version is not None:
            for k in self.policy_version:
                result['PolicyVersion'].append(k.to_map() if k else None)
        else:
            result['PolicyVersion'] = None
        return result

    def from_map(self, map={}):
        self.policy_version = []
        if map.get('PolicyVersion') is not None:
            for k in map.get('PolicyVersion'):
                temp_model = ListPolicyVersionsResponsePolicyVersionsPolicyVersion()
                temp_model = temp_model.from_map(k)
                self.policy_version.append(temp_model)
        else:
            self.policy_version = None
        return self


class GetPolicyVersionRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None, version_id=None):
        self.policy_type = policy_type
        self.policy_name = policy_name
        self.version_id = version_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        result['VersionId'] = self.version_id
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        self.version_id = map.get('VersionId')
        return self


class GetPolicyVersionResponse(TeaModel):
    def __init__(self, request_id=None, policy_version=None):
        self.request_id = request_id
        self.policy_version = policy_version

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policy_version, 'policy_version')
        if self.policy_version:
            self.policy_version.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policy_version is not None:
            result['PolicyVersion'] = self.policy_version.to_map()
        else:
            result['PolicyVersion'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PolicyVersion') is not None:
            temp_model = GetPolicyVersionResponsePolicyVersion()
            self.policy_version = temp_model.from_map(map['PolicyVersion'])
        else:
            self.policy_version = None
        return self


class GetPolicyVersionResponsePolicyVersion(TeaModel):
    def __init__(self, version_id=None, is_default_version=None, policy_document=None, create_date=None):
        self.version_id = version_id
        self.is_default_version = is_default_version
        self.policy_document = policy_document
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.is_default_version, 'is_default_version')
        self.validate_required(self.policy_document, 'policy_document')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['VersionId'] = self.version_id
        result['IsDefaultVersion'] = self.is_default_version
        result['PolicyDocument'] = self.policy_document
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.version_id = map.get('VersionId')
        self.is_default_version = map.get('IsDefaultVersion')
        self.policy_document = map.get('PolicyDocument')
        self.create_date = map.get('CreateDate')
        return self


class DeletePolicyVersionRequest(TeaModel):
    def __init__(self, policy_name=None, version_id=None):
        self.policy_name = policy_name
        self.version_id = version_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['VersionId'] = self.version_id
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.version_id = map.get('VersionId')
        return self


class DeletePolicyVersionResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreatePolicyVersionRequest(TeaModel):
    def __init__(self, policy_name=None, policy_document=None, set_as_default=None, rotate_strategy=None):
        self.policy_name = policy_name
        self.policy_document = policy_document
        self.set_as_default = set_as_default
        self.rotate_strategy = rotate_strategy

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['PolicyDocument'] = self.policy_document
        result['SetAsDefault'] = self.set_as_default
        result['RotateStrategy'] = self.rotate_strategy
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.policy_document = map.get('PolicyDocument')
        self.set_as_default = map.get('SetAsDefault')
        self.rotate_strategy = map.get('RotateStrategy')
        return self


class CreatePolicyVersionResponse(TeaModel):
    def __init__(self, request_id=None, policy_version=None):
        self.request_id = request_id
        self.policy_version = policy_version

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policy_version, 'policy_version')
        if self.policy_version:
            self.policy_version.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policy_version is not None:
            result['PolicyVersion'] = self.policy_version.to_map()
        else:
            result['PolicyVersion'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PolicyVersion') is not None:
            temp_model = CreatePolicyVersionResponsePolicyVersion()
            self.policy_version = temp_model.from_map(map['PolicyVersion'])
        else:
            self.policy_version = None
        return self


class CreatePolicyVersionResponsePolicyVersion(TeaModel):
    def __init__(self, version_id=None, is_default_version=None, policy_document=None, create_date=None):
        self.version_id = version_id
        self.is_default_version = is_default_version
        self.policy_document = policy_document
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.is_default_version, 'is_default_version')
        self.validate_required(self.policy_document, 'policy_document')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['VersionId'] = self.version_id
        result['IsDefaultVersion'] = self.is_default_version
        result['PolicyDocument'] = self.policy_document
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.version_id = map.get('VersionId')
        self.is_default_version = map.get('IsDefaultVersion')
        self.policy_document = map.get('PolicyDocument')
        self.create_date = map.get('CreateDate')
        return self


class ListPoliciesForUserRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class ListPoliciesForUserResponse(TeaModel):
    def __init__(self, request_id=None, policies=None):
        self.request_id = request_id
        self.policies = policies

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policies, 'policies')
        if self.policies:
            self.policies.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policies is not None:
            result['Policies'] = self.policies.to_map()
        else:
            result['Policies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Policies') is not None:
            temp_model = ListPoliciesForUserResponsePolicies()
            self.policies = temp_model.from_map(map['Policies'])
        else:
            self.policies = None
        return self


class ListPoliciesForUserResponsePoliciesPolicy(TeaModel):
    def __init__(self, policy_name=None, policy_type=None, description=None, default_version=None, attach_date=None):
        self.policy_name = policy_name
        self.policy_type = policy_type
        self.description = description
        self.default_version = default_version
        self.attach_date = attach_date

    def validate(self):
        self.validate_required(self.policy_name, 'policy_name')
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.default_version, 'default_version')
        self.validate_required(self.attach_date, 'attach_date')

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['PolicyType'] = self.policy_type
        result['Description'] = self.description
        result['DefaultVersion'] = self.default_version
        result['AttachDate'] = self.attach_date
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.policy_type = map.get('PolicyType')
        self.description = map.get('Description')
        self.default_version = map.get('DefaultVersion')
        self.attach_date = map.get('AttachDate')
        return self


class ListPoliciesForUserResponsePolicies(TeaModel):
    def __init__(self, policy=None):
        self.policy = []

    def validate(self):
        self.validate_required(self.policy, 'policy')
        if self.policy:
            for k in self.policy:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Policy'] = []
        if self.policy is not None:
            for k in self.policy:
                result['Policy'].append(k.to_map() if k else None)
        else:
            result['Policy'] = None
        return result

    def from_map(self, map={}):
        self.policy = []
        if map.get('Policy') is not None:
            for k in map.get('Policy'):
                temp_model = ListPoliciesForUserResponsePoliciesPolicy()
                temp_model = temp_model.from_map(k)
                self.policy.append(temp_model)
        else:
            self.policy = None
        return self


class ListPoliciesForGroupRequest(TeaModel):
    def __init__(self, group_name=None):
        self.group_name = group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        return self


class ListPoliciesForGroupResponse(TeaModel):
    def __init__(self, request_id=None, policies=None):
        self.request_id = request_id
        self.policies = policies

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policies, 'policies')
        if self.policies:
            self.policies.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policies is not None:
            result['Policies'] = self.policies.to_map()
        else:
            result['Policies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Policies') is not None:
            temp_model = ListPoliciesForGroupResponsePolicies()
            self.policies = temp_model.from_map(map['Policies'])
        else:
            self.policies = None
        return self


class ListPoliciesForGroupResponsePoliciesPolicy(TeaModel):
    def __init__(self, policy_name=None, policy_type=None, description=None, default_version=None, attach_date=None):
        self.policy_name = policy_name
        self.policy_type = policy_type
        self.description = description
        self.default_version = default_version
        self.attach_date = attach_date

    def validate(self):
        self.validate_required(self.policy_name, 'policy_name')
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.default_version, 'default_version')
        self.validate_required(self.attach_date, 'attach_date')

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['PolicyType'] = self.policy_type
        result['Description'] = self.description
        result['DefaultVersion'] = self.default_version
        result['AttachDate'] = self.attach_date
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.policy_type = map.get('PolicyType')
        self.description = map.get('Description')
        self.default_version = map.get('DefaultVersion')
        self.attach_date = map.get('AttachDate')
        return self


class ListPoliciesForGroupResponsePolicies(TeaModel):
    def __init__(self, policy=None):
        self.policy = []

    def validate(self):
        self.validate_required(self.policy, 'policy')
        if self.policy:
            for k in self.policy:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Policy'] = []
        if self.policy is not None:
            for k in self.policy:
                result['Policy'].append(k.to_map() if k else None)
        else:
            result['Policy'] = None
        return result

    def from_map(self, map={}):
        self.policy = []
        if map.get('Policy') is not None:
            for k in map.get('Policy'):
                temp_model = ListPoliciesForGroupResponsePoliciesPolicy()
                temp_model = temp_model.from_map(k)
                self.policy.append(temp_model)
        else:
            self.policy = None
        return self


class ListEntitiesForPolicyRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        return self


class ListEntitiesForPolicyResponse(TeaModel):
    def __init__(self, request_id=None, groups=None, users=None, roles=None):
        self.request_id = request_id
        self.groups = groups
        self.users = users
        self.roles = roles

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.groups, 'groups')
        if self.groups:
            self.groups.validate()
        self.validate_required(self.users, 'users')
        if self.users:
            self.users.validate()
        self.validate_required(self.roles, 'roles')
        if self.roles:
            self.roles.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.groups is not None:
            result['Groups'] = self.groups.to_map()
        else:
            result['Groups'] = None
        if self.users is not None:
            result['Users'] = self.users.to_map()
        else:
            result['Users'] = None
        if self.roles is not None:
            result['Roles'] = self.roles.to_map()
        else:
            result['Roles'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Groups') is not None:
            temp_model = ListEntitiesForPolicyResponseGroups()
            self.groups = temp_model.from_map(map['Groups'])
        else:
            self.groups = None
        if map.get('Users') is not None:
            temp_model = ListEntitiesForPolicyResponseUsers()
            self.users = temp_model.from_map(map['Users'])
        else:
            self.users = None
        if map.get('Roles') is not None:
            temp_model = ListEntitiesForPolicyResponseRoles()
            self.roles = temp_model.from_map(map['Roles'])
        else:
            self.roles = None
        return self


class ListEntitiesForPolicyResponseGroupsGroup(TeaModel):
    def __init__(self, group_name=None, comments=None, attach_date=None):
        self.group_name = group_name
        self.comments = comments
        self.attach_date = attach_date

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.attach_date, 'attach_date')

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Comments'] = self.comments
        result['AttachDate'] = self.attach_date
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.comments = map.get('Comments')
        self.attach_date = map.get('AttachDate')
        return self


class ListEntitiesForPolicyResponseGroups(TeaModel):
    def __init__(self, group=None):
        self.group = []

    def validate(self):
        self.validate_required(self.group, 'group')
        if self.group:
            for k in self.group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Group'] = []
        if self.group is not None:
            for k in self.group:
                result['Group'].append(k.to_map() if k else None)
        else:
            result['Group'] = None
        return result

    def from_map(self, map={}):
        self.group = []
        if map.get('Group') is not None:
            for k in map.get('Group'):
                temp_model = ListEntitiesForPolicyResponseGroupsGroup()
                temp_model = temp_model.from_map(k)
                self.group.append(temp_model)
        else:
            self.group = None
        return self


class ListEntitiesForPolicyResponseUsersUser(TeaModel):
    def __init__(self, user_id=None, user_name=None, display_name=None, attach_date=None):
        self.user_id = user_id
        self.user_name = user_name
        self.display_name = display_name
        self.attach_date = attach_date

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.display_name, 'display_name')
        self.validate_required(self.attach_date, 'attach_date')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        result['AttachDate'] = self.attach_date
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        self.attach_date = map.get('AttachDate')
        return self


class ListEntitiesForPolicyResponseUsers(TeaModel):
    def __init__(self, user=None):
        self.user = []

    def validate(self):
        self.validate_required(self.user, 'user')
        if self.user:
            for k in self.user:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['User'] = []
        if self.user is not None:
            for k in self.user:
                result['User'].append(k.to_map() if k else None)
        else:
            result['User'] = None
        return result

    def from_map(self, map={}):
        self.user = []
        if map.get('User') is not None:
            for k in map.get('User'):
                temp_model = ListEntitiesForPolicyResponseUsersUser()
                temp_model = temp_model.from_map(k)
                self.user.append(temp_model)
        else:
            self.user = None
        return self


class ListEntitiesForPolicyResponseRolesRole(TeaModel):
    def __init__(self, role_id=None, role_name=None, arn=None, description=None, attach_date=None):
        self.role_id = role_id
        self.role_name = role_name
        self.arn = arn
        self.description = description
        self.attach_date = attach_date

    def validate(self):
        self.validate_required(self.role_id, 'role_id')
        self.validate_required(self.role_name, 'role_name')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.description, 'description')
        self.validate_required(self.attach_date, 'attach_date')

    def to_map(self):
        result = {}
        result['RoleId'] = self.role_id
        result['RoleName'] = self.role_name
        result['Arn'] = self.arn
        result['Description'] = self.description
        result['AttachDate'] = self.attach_date
        return result

    def from_map(self, map={}):
        self.role_id = map.get('RoleId')
        self.role_name = map.get('RoleName')
        self.arn = map.get('Arn')
        self.description = map.get('Description')
        self.attach_date = map.get('AttachDate')
        return self


class ListEntitiesForPolicyResponseRoles(TeaModel):
    def __init__(self, role=None):
        self.role = []

    def validate(self):
        self.validate_required(self.role, 'role')
        if self.role:
            for k in self.role:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Role'] = []
        if self.role is not None:
            for k in self.role:
                result['Role'].append(k.to_map() if k else None)
        else:
            result['Role'] = None
        return result

    def from_map(self, map={}):
        self.role = []
        if map.get('Role') is not None:
            for k in map.get('Role'):
                temp_model = ListEntitiesForPolicyResponseRolesRole()
                temp_model = temp_model.from_map(k)
                self.role.append(temp_model)
        else:
            self.role = None
        return self


class DetachPolicyFromUserRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None, user_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        self.user_name = map.get('UserName')
        return self


class DetachPolicyFromUserResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DetachPolicyFromGroupRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None, group_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name
        self.group_name = group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        self.group_name = map.get('GroupName')
        return self


class DetachPolicyFromGroupResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class AttachPolicyToUserRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None, user_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        self.user_name = map.get('UserName')
        return self


class AttachPolicyToUserResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class AttachPolicyToGroupRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None, group_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name
        self.group_name = group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        self.group_name = map.get('GroupName')
        return self


class AttachPolicyToGroupResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListPoliciesRequest(TeaModel):
    def __init__(self, policy_type=None, marker=None, max_items=None):
        self.policy_type = policy_type
        self.marker = marker
        self.max_items = max_items

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['Marker'] = self.marker
        result['MaxItems'] = self.max_items
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.marker = map.get('Marker')
        self.max_items = map.get('MaxItems')
        return self


class ListPoliciesResponse(TeaModel):
    def __init__(self, request_id=None, is_truncated=None, marker=None, policies=None):
        self.request_id = request_id
        self.is_truncated = is_truncated
        self.marker = marker
        self.policies = policies

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_truncated, 'is_truncated')
        self.validate_required(self.marker, 'marker')
        self.validate_required(self.policies, 'policies')
        if self.policies:
            self.policies.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsTruncated'] = self.is_truncated
        result['Marker'] = self.marker
        if self.policies is not None:
            result['Policies'] = self.policies.to_map()
        else:
            result['Policies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_truncated = map.get('IsTruncated')
        self.marker = map.get('Marker')
        if map.get('Policies') is not None:
            temp_model = ListPoliciesResponsePolicies()
            self.policies = temp_model.from_map(map['Policies'])
        else:
            self.policies = None
        return self


class ListPoliciesResponsePoliciesPolicy(TeaModel):
    def __init__(self, policy_name=None, policy_type=None, description=None, default_version=None, create_date=None, update_date=None, attachment_count=None):
        self.policy_name = policy_name
        self.policy_type = policy_type
        self.description = description
        self.default_version = default_version
        self.create_date = create_date
        self.update_date = update_date
        self.attachment_count = attachment_count

    def validate(self):
        self.validate_required(self.policy_name, 'policy_name')
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.default_version, 'default_version')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')
        self.validate_required(self.attachment_count, 'attachment_count')

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['PolicyType'] = self.policy_type
        result['Description'] = self.description
        result['DefaultVersion'] = self.default_version
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        result['AttachmentCount'] = self.attachment_count
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.policy_type = map.get('PolicyType')
        self.description = map.get('Description')
        self.default_version = map.get('DefaultVersion')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        self.attachment_count = map.get('AttachmentCount')
        return self


class ListPoliciesResponsePolicies(TeaModel):
    def __init__(self, policy=None):
        self.policy = []

    def validate(self):
        self.validate_required(self.policy, 'policy')
        if self.policy:
            for k in self.policy:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Policy'] = []
        if self.policy is not None:
            for k in self.policy:
                result['Policy'].append(k.to_map() if k else None)
        else:
            result['Policy'] = None
        return result

    def from_map(self, map={}):
        self.policy = []
        if map.get('Policy') is not None:
            for k in map.get('Policy'):
                temp_model = ListPoliciesResponsePoliciesPolicy()
                temp_model = temp_model.from_map(k)
                self.policy.append(temp_model)
        else:
            self.policy = None
        return self


class GetPolicyRequest(TeaModel):
    def __init__(self, policy_type=None, policy_name=None):
        self.policy_type = policy_type
        self.policy_name = policy_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PolicyName'] = self.policy_name
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.policy_name = map.get('PolicyName')
        return self


class GetPolicyResponse(TeaModel):
    def __init__(self, request_id=None, policy=None, default_policy_version=None):
        self.request_id = request_id
        self.policy = policy
        self.default_policy_version = default_policy_version

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policy, 'policy')
        if self.policy:
            self.policy.validate()
        self.validate_required(self.default_policy_version, 'default_policy_version')
        if self.default_policy_version:
            self.default_policy_version.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policy is not None:
            result['Policy'] = self.policy.to_map()
        else:
            result['Policy'] = None
        if self.default_policy_version is not None:
            result['DefaultPolicyVersion'] = self.default_policy_version.to_map()
        else:
            result['DefaultPolicyVersion'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Policy') is not None:
            temp_model = GetPolicyResponsePolicy()
            self.policy = temp_model.from_map(map['Policy'])
        else:
            self.policy = None
        if map.get('DefaultPolicyVersion') is not None:
            temp_model = GetPolicyResponseDefaultPolicyVersion()
            self.default_policy_version = temp_model.from_map(map['DefaultPolicyVersion'])
        else:
            self.default_policy_version = None
        return self


class GetPolicyResponsePolicy(TeaModel):
    def __init__(self, policy_name=None, policy_type=None, description=None, default_version=None, policy_document=None, create_date=None, update_date=None, attachment_count=None):
        self.policy_name = policy_name
        self.policy_type = policy_type
        self.description = description
        self.default_version = default_version
        self.policy_document = policy_document
        self.create_date = create_date
        self.update_date = update_date
        self.attachment_count = attachment_count

    def validate(self):
        self.validate_required(self.policy_name, 'policy_name')
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.default_version, 'default_version')
        self.validate_required(self.policy_document, 'policy_document')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')
        self.validate_required(self.attachment_count, 'attachment_count')

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['PolicyType'] = self.policy_type
        result['Description'] = self.description
        result['DefaultVersion'] = self.default_version
        result['PolicyDocument'] = self.policy_document
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        result['AttachmentCount'] = self.attachment_count
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.policy_type = map.get('PolicyType')
        self.description = map.get('Description')
        self.default_version = map.get('DefaultVersion')
        self.policy_document = map.get('PolicyDocument')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        self.attachment_count = map.get('AttachmentCount')
        return self


class GetPolicyResponseDefaultPolicyVersion(TeaModel):
    def __init__(self, version_id=None, is_default_version=None, policy_document=None, create_date=None):
        self.version_id = version_id
        self.is_default_version = is_default_version
        self.policy_document = policy_document
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.is_default_version, 'is_default_version')
        self.validate_required(self.policy_document, 'policy_document')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['VersionId'] = self.version_id
        result['IsDefaultVersion'] = self.is_default_version
        result['PolicyDocument'] = self.policy_document
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.version_id = map.get('VersionId')
        self.is_default_version = map.get('IsDefaultVersion')
        self.policy_document = map.get('PolicyDocument')
        self.create_date = map.get('CreateDate')
        return self


class DeletePolicyRequest(TeaModel):
    def __init__(self, policy_name=None):
        self.policy_name = policy_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        return self


class DeletePolicyResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreatePolicyRequest(TeaModel):
    def __init__(self, policy_name=None, description=None, policy_document=None):
        self.policy_name = policy_name
        self.description = description
        self.policy_document = policy_document

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['Description'] = self.description
        result['PolicyDocument'] = self.policy_document
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.description = map.get('Description')
        self.policy_document = map.get('PolicyDocument')
        return self


class CreatePolicyResponse(TeaModel):
    def __init__(self, request_id=None, policy=None):
        self.request_id = request_id
        self.policy = policy

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.policy, 'policy')
        if self.policy:
            self.policy.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.policy is not None:
            result['Policy'] = self.policy.to_map()
        else:
            result['Policy'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Policy') is not None:
            temp_model = CreatePolicyResponsePolicy()
            self.policy = temp_model.from_map(map['Policy'])
        else:
            self.policy = None
        return self


class CreatePolicyResponsePolicy(TeaModel):
    def __init__(self, policy_name=None, policy_type=None, description=None, default_version=None, create_date=None):
        self.policy_name = policy_name
        self.policy_type = policy_type
        self.description = description
        self.default_version = default_version
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.policy_name, 'policy_name')
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.default_version, 'default_version')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['PolicyName'] = self.policy_name
        result['PolicyType'] = self.policy_type
        result['Description'] = self.description
        result['DefaultVersion'] = self.default_version
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.policy_name = map.get('PolicyName')
        self.policy_type = map.get('PolicyType')
        self.description = map.get('Description')
        self.default_version = map.get('DefaultVersion')
        self.create_date = map.get('CreateDate')
        return self


class RemoveUserFromGroupRequest(TeaModel):
    def __init__(self, user_name=None, group_name=None):
        self.user_name = user_name
        self.group_name = group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.group_name = map.get('GroupName')
        return self


class RemoveUserFromGroupResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListUsersForGroupRequest(TeaModel):
    def __init__(self, group_name=None, marker=None, max_items=None):
        self.group_name = group_name
        self.marker = marker
        self.max_items = max_items

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Marker'] = self.marker
        result['MaxItems'] = self.max_items
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.marker = map.get('Marker')
        self.max_items = map.get('MaxItems')
        return self


class ListUsersForGroupResponse(TeaModel):
    def __init__(self, request_id=None, is_truncated=None, marker=None, users=None):
        self.request_id = request_id
        self.is_truncated = is_truncated
        self.marker = marker
        self.users = users

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_truncated, 'is_truncated')
        self.validate_required(self.marker, 'marker')
        self.validate_required(self.users, 'users')
        if self.users:
            self.users.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsTruncated'] = self.is_truncated
        result['Marker'] = self.marker
        if self.users is not None:
            result['Users'] = self.users.to_map()
        else:
            result['Users'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_truncated = map.get('IsTruncated')
        self.marker = map.get('Marker')
        if map.get('Users') is not None:
            temp_model = ListUsersForGroupResponseUsers()
            self.users = temp_model.from_map(map['Users'])
        else:
            self.users = None
        return self


class ListUsersForGroupResponseUsersUser(TeaModel):
    def __init__(self, user_name=None, display_name=None, join_date=None):
        self.user_name = user_name
        self.display_name = display_name
        self.join_date = join_date

    def validate(self):
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.display_name, 'display_name')
        self.validate_required(self.join_date, 'join_date')

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['DisplayName'] = self.display_name
        result['JoinDate'] = self.join_date
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.display_name = map.get('DisplayName')
        self.join_date = map.get('JoinDate')
        return self


class ListUsersForGroupResponseUsers(TeaModel):
    def __init__(self, user=None):
        self.user = []

    def validate(self):
        self.validate_required(self.user, 'user')
        if self.user:
            for k in self.user:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['User'] = []
        if self.user is not None:
            for k in self.user:
                result['User'].append(k.to_map() if k else None)
        else:
            result['User'] = None
        return result

    def from_map(self, map={}):
        self.user = []
        if map.get('User') is not None:
            for k in map.get('User'):
                temp_model = ListUsersForGroupResponseUsersUser()
                temp_model = temp_model.from_map(k)
                self.user.append(temp_model)
        else:
            self.user = None
        return self


class ListGroupsForUserRequest(TeaModel):
    def __init__(self, user_name=None):
        self.user_name = user_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        return self


class ListGroupsForUserResponse(TeaModel):
    def __init__(self, request_id=None, groups=None):
        self.request_id = request_id
        self.groups = groups

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.groups, 'groups')
        if self.groups:
            self.groups.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.groups is not None:
            result['Groups'] = self.groups.to_map()
        else:
            result['Groups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Groups') is not None:
            temp_model = ListGroupsForUserResponseGroups()
            self.groups = temp_model.from_map(map['Groups'])
        else:
            self.groups = None
        return self


class ListGroupsForUserResponseGroupsGroup(TeaModel):
    def __init__(self, group_name=None, comments=None, join_date=None):
        self.group_name = group_name
        self.comments = comments
        self.join_date = join_date

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.join_date, 'join_date')

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Comments'] = self.comments
        result['JoinDate'] = self.join_date
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.comments = map.get('Comments')
        self.join_date = map.get('JoinDate')
        return self


class ListGroupsForUserResponseGroups(TeaModel):
    def __init__(self, group=None):
        self.group = []

    def validate(self):
        self.validate_required(self.group, 'group')
        if self.group:
            for k in self.group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Group'] = []
        if self.group is not None:
            for k in self.group:
                result['Group'].append(k.to_map() if k else None)
        else:
            result['Group'] = None
        return result

    def from_map(self, map={}):
        self.group = []
        if map.get('Group') is not None:
            for k in map.get('Group'):
                temp_model = ListGroupsForUserResponseGroupsGroup()
                temp_model = temp_model.from_map(k)
                self.group.append(temp_model)
        else:
            self.group = None
        return self


class AddUserToGroupRequest(TeaModel):
    def __init__(self, user_name=None, group_name=None):
        self.user_name = user_name
        self.group_name = group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserName'] = self.user_name
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.user_name = map.get('UserName')
        self.group_name = map.get('GroupName')
        return self


class AddUserToGroupResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class UpdateGroupRequest(TeaModel):
    def __init__(self, group_name=None, new_group_name=None, new_comments=None):
        self.group_name = group_name
        self.new_group_name = new_group_name
        self.new_comments = new_comments

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['NewGroupName'] = self.new_group_name
        result['NewComments'] = self.new_comments
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.new_group_name = map.get('NewGroupName')
        self.new_comments = map.get('NewComments')
        return self


class UpdateGroupResponse(TeaModel):
    def __init__(self, request_id=None, group=None):
        self.request_id = request_id
        self.group = group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.group, 'group')
        if self.group:
            self.group.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.group is not None:
            result['Group'] = self.group.to_map()
        else:
            result['Group'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Group') is not None:
            temp_model = UpdateGroupResponseGroup()
            self.group = temp_model.from_map(map['Group'])
        else:
            self.group = None
        return self


class UpdateGroupResponseGroup(TeaModel):
    def __init__(self, group_name=None, comments=None, create_date=None, update_date=None):
        self.group_name = group_name
        self.comments = comments
        self.create_date = create_date
        self.update_date = update_date

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        return self


class ListGroupsRequest(TeaModel):
    def __init__(self, marker=None, max_items=None):
        self.marker = marker
        self.max_items = max_items

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Marker'] = self.marker
        result['MaxItems'] = self.max_items
        return result

    def from_map(self, map={}):
        self.marker = map.get('Marker')
        self.max_items = map.get('MaxItems')
        return self


class ListGroupsResponse(TeaModel):
    def __init__(self, request_id=None, is_truncated=None, marker=None, groups=None):
        self.request_id = request_id
        self.is_truncated = is_truncated
        self.marker = marker
        self.groups = groups

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_truncated, 'is_truncated')
        self.validate_required(self.marker, 'marker')
        self.validate_required(self.groups, 'groups')
        if self.groups:
            self.groups.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsTruncated'] = self.is_truncated
        result['Marker'] = self.marker
        if self.groups is not None:
            result['Groups'] = self.groups.to_map()
        else:
            result['Groups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_truncated = map.get('IsTruncated')
        self.marker = map.get('Marker')
        if map.get('Groups') is not None:
            temp_model = ListGroupsResponseGroups()
            self.groups = temp_model.from_map(map['Groups'])
        else:
            self.groups = None
        return self


class ListGroupsResponseGroupsGroup(TeaModel):
    def __init__(self, group_name=None, comments=None, create_date=None, update_date=None):
        self.group_name = group_name
        self.comments = comments
        self.create_date = create_date
        self.update_date = update_date

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        return self


class ListGroupsResponseGroups(TeaModel):
    def __init__(self, group=None):
        self.group = []

    def validate(self):
        self.validate_required(self.group, 'group')
        if self.group:
            for k in self.group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Group'] = []
        if self.group is not None:
            for k in self.group:
                result['Group'].append(k.to_map() if k else None)
        else:
            result['Group'] = None
        return result

    def from_map(self, map={}):
        self.group = []
        if map.get('Group') is not None:
            for k in map.get('Group'):
                temp_model = ListGroupsResponseGroupsGroup()
                temp_model = temp_model.from_map(k)
                self.group.append(temp_model)
        else:
            self.group = None
        return self


class GetGroupRequest(TeaModel):
    def __init__(self, group_name=None):
        self.group_name = group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        return self


class GetGroupResponse(TeaModel):
    def __init__(self, request_id=None, group=None):
        self.request_id = request_id
        self.group = group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.group, 'group')
        if self.group:
            self.group.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.group is not None:
            result['Group'] = self.group.to_map()
        else:
            result['Group'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Group') is not None:
            temp_model = GetGroupResponseGroup()
            self.group = temp_model.from_map(map['Group'])
        else:
            self.group = None
        return self


class GetGroupResponseGroup(TeaModel):
    def __init__(self, group_name=None, comments=None, create_date=None, update_date=None):
        self.group_name = group_name
        self.comments = comments
        self.create_date = create_date
        self.update_date = update_date

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.update_date, 'update_date')

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        result['UpdateDate'] = self.update_date
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        self.update_date = map.get('UpdateDate')
        return self


class DeleteGroupRequest(TeaModel):
    def __init__(self, group_name=None):
        self.group_name = group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        return self


class DeleteGroupResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateGroupRequest(TeaModel):
    def __init__(self, group_name=None, comments=None):
        self.group_name = group_name
        self.comments = comments

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Comments'] = self.comments
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.comments = map.get('Comments')
        return self


class CreateGroupResponse(TeaModel):
    def __init__(self, request_id=None, group=None):
        self.request_id = request_id
        self.group = group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.group, 'group')
        if self.group:
            self.group.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.group is not None:
            result['Group'] = self.group.to_map()
        else:
            result['Group'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Group') is not None:
            temp_model = CreateGroupResponseGroup()
            self.group = temp_model.from_map(map['Group'])
        else:
            self.group = None
        return self


class CreateGroupResponseGroup(TeaModel):
    def __init__(self, group_name=None, comments=None, create_date=None):
        self.group_name = group_name
        self.comments = comments
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.comments, 'comments')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['Comments'] = self.comments
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.comments = map.get('Comments')
        self.create_date = map.get('CreateDate')
        return self
