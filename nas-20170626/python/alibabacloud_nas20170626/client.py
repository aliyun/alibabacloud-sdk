# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_nas20170626 import models as _nas20170626_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self._endpoint_map = {
            "cn-chengdu": "nas.aliyuncs.com",
            "me-east-1": "nas.ap-northeast-1.aliyuncs.com",
            "cn-hangzhou-finance": "nas.aliyuncs.com"
        }
        self.check_config(config)
        self._endpoint = self.get_endpoint("nas", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def delete_lifecycle_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteLifecyclePolicyResponse().from_map(self.do_request("DeleteLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_lifecycle_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_lifecycle_policy_with_options(request, runtime)

    def upgrade_file_system_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.UpgradeFileSystemResponse().from_map(self.do_request("UpgradeFileSystem", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def upgrade_file_system(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.upgrade_file_system_with_options(request, runtime)

    def modify_lifecycle_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ModifyLifecyclePolicyResponse().from_map(self.do_request("ModifyLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def modify_lifecycle_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_lifecycle_policy_with_options(request, runtime)

    def create_lifecycle_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateLifecyclePolicyResponse().from_map(self.do_request("CreateLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_lifecycle_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_lifecycle_policy_with_options(request, runtime)

    def describe_lifecycle_policies_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeLifecyclePoliciesResponse().from_map(self.do_request("DescribeLifecyclePolicies", "HTTPS", "GET", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_lifecycle_policies(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_lifecycle_policies_with_options(request, runtime)

    def describe_dir_quotas_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeDirQuotasResponse().from_map(self.do_request("DescribeDirQuotas", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_dir_quotas(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dir_quotas_with_options(request, runtime)

    def set_dir_quota_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.SetDirQuotaResponse().from_map(self.do_request("SetDirQuota", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def set_dir_quota(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_dir_quota_with_options(request, runtime)

    def cancel_dir_quota_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CancelDirQuotaResponse().from_map(self.do_request("CancelDirQuota", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def cancel_dir_quota(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_dir_quota_with_options(request, runtime)

    def describe_storage_packages_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeStoragePackagesResponse().from_map(self.do_request("DescribeStoragePackages", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_storage_packages(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_storage_packages_with_options(request, runtime)

    def describe_file_system_statistics_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeFileSystemStatisticsResponse().from_map(self.do_request("DescribeFileSystemStatistics", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_file_system_statistics(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_file_system_statistics_with_options(request, runtime)

    def describe_log_analysis_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeLogAnalysisResponse().from_map(self.do_request("DescribeLogAnalysis", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_log_analysis(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_log_analysis_with_options(request, runtime)

    def describe_mounted_clients_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeMountedClientsResponse().from_map(self.do_request("DescribeMountedClients", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_mounted_clients(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_mounted_clients_with_options(request, runtime)

    def describe_auto_snapshot_tasks_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeAutoSnapshotTasksResponse().from_map(self.do_request("DescribeAutoSnapshotTasks", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_auto_snapshot_tasks(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_auto_snapshot_tasks_with_options(request, runtime)

    def remove_client_from_black_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.RemoveClientFromBlackListResponse().from_map(self.do_request("RemoveClientFromBlackList", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def remove_client_from_black_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_client_from_black_list_with_options(request, runtime)

    def describe_black_list_clients_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeBlackListClientsResponse().from_map(self.do_request("DescribeBlackListClients", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_black_list_clients(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_black_list_clients_with_options(request, runtime)

    def add_client_to_black_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.AddClientToBlackListResponse().from_map(self.do_request("AddClientToBlackList", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def add_client_to_black_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_client_to_black_list_with_options(request, runtime)

    def describe_ldapconfig_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeLDAPConfigResponse().from_map(self.do_request("DescribeLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_ldapconfig(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_ldapconfig_with_options(request, runtime)

    def modify_ldapconfig_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ModifyLDAPConfigResponse().from_map(self.do_request("ModifyLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def modify_ldapconfig(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_ldapconfig_with_options(request, runtime)

    def create_ldapconfig_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateLDAPConfigResponse().from_map(self.do_request("CreateLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_ldapconfig(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_ldapconfig_with_options(request, runtime)

    def delete_ldapconfig_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteLDAPConfigResponse().from_map(self.do_request("DeleteLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_ldapconfig(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_ldapconfig_with_options(request, runtime)

    def describe_tags_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeTagsResponse().from_map(self.do_request("DescribeTags", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_tags(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_tags_with_options(request, runtime)

    def remove_tags_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.RemoveTagsResponse().from_map(self.do_request("RemoveTags", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def remove_tags(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_tags_with_options(request, runtime)

    def add_tags_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.AddTagsResponse().from_map(self.do_request("AddTags", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def add_tags(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_tags_with_options(request, runtime)

    def reset_file_system_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ResetFileSystemResponse().from_map(self.do_request("ResetFileSystem", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def reset_file_system(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.reset_file_system_with_options(request, runtime)

    def create_auto_snapshot_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateAutoSnapshotPolicyResponse().from_map(self.do_request("CreateAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_auto_snapshot_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_auto_snapshot_policy_with_options(request, runtime)

    def describe_auto_snapshot_policies_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeAutoSnapshotPoliciesResponse().from_map(self.do_request("DescribeAutoSnapshotPolicies", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_auto_snapshot_policies(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_auto_snapshot_policies_with_options(request, runtime)

    def cancel_auto_snapshot_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CancelAutoSnapshotPolicyResponse().from_map(self.do_request("CancelAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def cancel_auto_snapshot_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_auto_snapshot_policy_with_options(request, runtime)

    def apply_auto_snapshot_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ApplyAutoSnapshotPolicyResponse().from_map(self.do_request("ApplyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def apply_auto_snapshot_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.apply_auto_snapshot_policy_with_options(request, runtime)

    def modify_auto_snapshot_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ModifyAutoSnapshotPolicyResponse().from_map(self.do_request("ModifyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def modify_auto_snapshot_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_auto_snapshot_policy_with_options(request, runtime)

    def delete_auto_snapshot_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteAutoSnapshotPolicyResponse().from_map(self.do_request("DeleteAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_auto_snapshot_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_auto_snapshot_policy_with_options(request, runtime)

    def delete_snapshot_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteSnapshotResponse().from_map(self.do_request("DeleteSnapshot", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_snapshot(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_snapshot_with_options(request, runtime)

    def create_snapshot_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateSnapshotResponse().from_map(self.do_request("CreateSnapshot", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_snapshot(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_snapshot_with_options(request, runtime)

    def describe_snapshots_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeSnapshotsResponse().from_map(self.do_request("DescribeSnapshots", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_snapshots(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_snapshots_with_options(request, runtime)

    def describe_zones_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeZonesResponse().from_map(self.do_request("DescribeZones", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_zones(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_zones_with_options(request, runtime)

    def create_access_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateAccessGroupResponse().from_map(self.do_request("CreateAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_access_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_access_group_with_options(request, runtime)

    def create_mount_target_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateMountTargetResponse().from_map(self.do_request("CreateMountTarget", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_mount_target(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_mount_target_with_options(request, runtime)

    def create_file_system_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateFileSystemResponse().from_map(self.do_request("CreateFileSystem", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_file_system(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_file_system_with_options(request, runtime)

    def create_access_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.CreateAccessRuleResponse().from_map(self.do_request("CreateAccessRule", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def create_access_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_access_rule_with_options(request, runtime)

    def describe_access_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeAccessRulesResponse().from_map(self.do_request("DescribeAccessRules", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_access_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_access_rules_with_options(request, runtime)

    def describe_access_groups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeAccessGroupsResponse().from_map(self.do_request("DescribeAccessGroups", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_access_groups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_access_groups_with_options(request, runtime)

    def delete_mount_target_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteMountTargetResponse().from_map(self.do_request("DeleteMountTarget", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_mount_target(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_mount_target_with_options(request, runtime)

    def delete_file_system_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteFileSystemResponse().from_map(self.do_request("DeleteFileSystem", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_file_system(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_file_system_with_options(request, runtime)

    def delete_access_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteAccessRuleResponse().from_map(self.do_request("DeleteAccessRule", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_access_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_access_rule_with_options(request, runtime)

    def delete_access_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DeleteAccessGroupResponse().from_map(self.do_request("DeleteAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def delete_access_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_access_group_with_options(request, runtime)

    def modify_access_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ModifyAccessRuleResponse().from_map(self.do_request("ModifyAccessRule", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def modify_access_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_access_rule_with_options(request, runtime)

    def modify_access_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ModifyAccessGroupResponse().from_map(self.do_request("ModifyAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def modify_access_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_access_group_with_options(request, runtime)

    def describe_regions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeRegionsResponse().from_map(self.do_request("DescribeRegions", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_regions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_regions_with_options(request, runtime)

    def describe_mount_targets_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeMountTargetsResponse().from_map(self.do_request("DescribeMountTargets", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_mount_targets(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_mount_targets_with_options(request, runtime)

    def describe_file_systems_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.DescribeFileSystemsResponse().from_map(self.do_request("DescribeFileSystems", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def describe_file_systems(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_file_systems_with_options(request, runtime)

    def modify_mount_target_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ModifyMountTargetResponse().from_map(self.do_request("ModifyMountTarget", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def modify_mount_target(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_mount_target_with_options(request, runtime)

    def modify_file_system_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _nas20170626_models.ModifyFileSystemResponse().from_map(self.do_request("ModifyFileSystem", "HTTPS", "POST", "2017-06-26", "AK", None, request.to_map(), runtime))


    def modify_file_system(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_file_system_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
