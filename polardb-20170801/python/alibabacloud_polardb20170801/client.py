# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_polardb20170801 import models as polardb_20170801_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self._endpoint_map = {
            "cn-qingdao": "polardb.aliyuncs.com",
            "cn-beijing": "polardb.aliyuncs.com",
            "cn-hangzhou": "polardb.aliyuncs.com",
            "cn-shanghai": "polardb.aliyuncs.com",
            "cn-shenzhen": "polardb.aliyuncs.com",
            "cn-hongkong": "polardb.aliyuncs.com",
            "ap-southeast-1": "polardb.aliyuncs.com",
            "us-west-1": "polardb.aliyuncs.com",
            "cn-hangzhou-finance": "polardb.aliyuncs.com",
            "cn-shanghai-finance-1": "polardb.aliyuncs.com",
            "us-east-1": "polardb.ap-northeast-1.aliyuncs.com",
            "cn-shenzhen-finance-1": "polardb.aliyuncs.com",
            "cn-north-2-gov-1": "polardb.aliyuncs.com"
        }
        self.check_config(config)
        self._endpoint = self.get_endpoint("polardb", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def describe_dbcluster_audit_log_collector_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterAuditLogCollectorResponse().from_map(self.do_request("DescribeDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_audit_log_collector(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_audit_log_collector_with_options(request, runtime)

    def modify_dbcluster_audit_log_collector_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterAuditLogCollectorResponse().from_map(self.do_request("ModifyDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_audit_log_collector(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_audit_log_collector_with_options(request, runtime)

    def describe_detached_backups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDetachedBackupsResponse().from_map(self.do_request("DescribeDetachedBackups", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_detached_backups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_detached_backups_with_options(request, runtime)

    def describe_dbclusters_with_backups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClustersWithBackupsResponse().from_map(self.do_request("DescribeDBClustersWithBackups", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbclusters_with_backups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbclusters_with_backups_with_options(request, runtime)

    def describe_log_backup_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeLogBackupPolicyResponse().from_map(self.do_request("DescribeLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_log_backup_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_log_backup_policy_with_options(request, runtime)

    def modify_log_backup_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyLogBackupPolicyResponse().from_map(self.do_request("ModifyLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_log_backup_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_log_backup_policy_with_options(request, runtime)

    def modify_dbcluster_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterMonitorResponse().from_map(self.do_request("ModifyDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_monitor_with_options(request, runtime)

    def describe_dbcluster_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterMonitorResponse().from_map(self.do_request("DescribeDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_monitor_with_options(request, runtime)

    def describe_dbcluster_available_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterAvailableResourcesResponse().from_map(self.do_request("DescribeDBClusterAvailableResources", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_available_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_available_resources_with_options(request, runtime)

    def describe_backup_logs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeBackupLogsResponse().from_map(self.do_request("DescribeBackupLogs", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_backup_logs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_backup_logs_with_options(request, runtime)

    def modify_dbcluster_sslwith_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterSSLResponse().from_map(self.do_request("ModifyDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_ssl(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_sslwith_options(request, runtime)

    def describe_dbcluster_sslwith_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterSSLResponse().from_map(self.do_request("DescribeDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_ssl(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_sslwith_options(request, runtime)

    def describe_dbcluster_migration_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterMigrationResponse().from_map(self.do_request("DescribeDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_migration(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_migration_with_options(request, runtime)

    def close_dbcluster_migration_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CloseDBClusterMigrationResponse().from_map(self.do_request("CloseDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def close_dbcluster_migration(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.close_dbcluster_migration_with_options(request, runtime)

    def modify_dbcluster_migration_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterMigrationResponse().from_map(self.do_request("ModifyDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_migration(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_migration_with_options(request, runtime)

    def modify_auto_renew_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyAutoRenewAttributeResponse().from_map(self.do_request("ModifyAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_auto_renew_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_auto_renew_attribute_with_options(request, runtime)

    def modify_dbnode_class_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBNodeClassResponse().from_map(self.do_request("ModifyDBNodeClass", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbnode_class(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbnode_class_with_options(request, runtime)

    def describe_auto_renew_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeAutoRenewAttributeResponse().from_map(self.do_request("DescribeAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_auto_renew_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_auto_renew_attribute_with_options(request, runtime)

    def create_dbnodes_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CreateDBNodesResponse().from_map(self.do_request("CreateDBNodes", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def create_dbnodes(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_dbnodes_with_options(request, runtime)

    def delete_dbnodes_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DeleteDBNodesResponse().from_map(self.do_request("DeleteDBNodes", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def delete_dbnodes(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_dbnodes_with_options(request, runtime)

    def untag_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.UntagResourcesResponse().from_map(self.do_request("UntagResources", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def untag_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.untag_resources_with_options(request, runtime)

    def tag_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.TagResourcesResponse().from_map(self.do_request("TagResources", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def tag_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.tag_resources_with_options(request, runtime)

    def list_tag_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ListTagResourcesResponse().from_map(self.do_request("ListTagResources", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def list_tag_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_tag_resources_with_options(request, runtime)

    def modify_dbendpoint_address_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBEndpointAddressResponse().from_map(self.do_request("ModifyDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbendpoint_address(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbendpoint_address_with_options(request, runtime)

    def modify_dbdescription_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBDescriptionResponse().from_map(self.do_request("ModifyDBDescription", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbdescription(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbdescription_with_options(request, runtime)

    def modify_dbcluster_parameters_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterParametersResponse().from_map(self.do_request("ModifyDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_parameters(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_parameters_with_options(request, runtime)

    def modify_dbcluster_endpoint_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterEndpointResponse().from_map(self.do_request("ModifyDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_endpoint(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_endpoint_with_options(request, runtime)

    def modify_account_password_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyAccountPasswordResponse().from_map(self.do_request("ModifyAccountPassword", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_account_password(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_account_password_with_options(request, runtime)

    def describe_dbcluster_performance_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterPerformanceResponse().from_map(self.do_request("DescribeDBClusterPerformance", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_performance(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_performance_with_options(request, runtime)

    def describe_dbcluster_parameters_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterParametersResponse().from_map(self.do_request("DescribeDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_parameters(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_parameters_with_options(request, runtime)

    def describe_dbcluster_endpoints_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterEndpointsResponse().from_map(self.do_request("DescribeDBClusterEndpoints", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_endpoints(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_endpoints_with_options(request, runtime)

    def delete_dbendpoint_address_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DeleteDBEndpointAddressResponse().from_map(self.do_request("DeleteDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def delete_dbendpoint_address(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_dbendpoint_address_with_options(request, runtime)

    def delete_dbcluster_endpoint_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DeleteDBClusterEndpointResponse().from_map(self.do_request("DeleteDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def delete_dbcluster_endpoint(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_dbcluster_endpoint_with_options(request, runtime)

    def create_dbendpoint_address_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CreateDBEndpointAddressResponse().from_map(self.do_request("CreateDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def create_dbendpoint_address(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_dbendpoint_address_with_options(request, runtime)

    def create_dbcluster_endpoint_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CreateDBClusterEndpointResponse().from_map(self.do_request("CreateDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def create_dbcluster_endpoint(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_dbcluster_endpoint_with_options(request, runtime)

    def restart_dbnode_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.RestartDBNodeResponse().from_map(self.do_request("RestartDBNode", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def restart_dbnode(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.restart_dbnode_with_options(request, runtime)

    def describe_dbnode_performance_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBNodePerformanceResponse().from_map(self.do_request("DescribeDBNodePerformance", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbnode_performance(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbnode_performance_with_options(request, runtime)

    def modify_dbcluster_access_whitelist_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterAccessWhitelistResponse().from_map(self.do_request("ModifyDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_access_whitelist(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_access_whitelist_with_options(request, runtime)

    def describe_dbcluster_access_whitelist_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterAccessWhitelistResponse().from_map(self.do_request("DescribeDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_access_whitelist(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_access_whitelist_with_options(request, runtime)

    def modify_dbcluster_maintain_time_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterMaintainTimeResponse().from_map(self.do_request("ModifyDBClusterMaintainTime", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_maintain_time(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_maintain_time_with_options(request, runtime)

    def revoke_account_privilege_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.RevokeAccountPrivilegeResponse().from_map(self.do_request("RevokeAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def revoke_account_privilege(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.revoke_account_privilege_with_options(request, runtime)

    def reset_account_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ResetAccountResponse().from_map(self.do_request("ResetAccount", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def reset_account(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.reset_account_with_options(request, runtime)

    def grant_account_privilege_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.GrantAccountPrivilegeResponse().from_map(self.do_request("GrantAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def grant_account_privilege(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.grant_account_privilege_with_options(request, runtime)

    def describe_databases_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDatabasesResponse().from_map(self.do_request("DescribeDatabases", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_databases(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_databases_with_options(request, runtime)

    def delete_database_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DeleteDatabaseResponse().from_map(self.do_request("DeleteDatabase", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def delete_database(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_database_with_options(request, runtime)

    def delete_account_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DeleteAccountResponse().from_map(self.do_request("DeleteAccount", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def delete_account(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_account_with_options(request, runtime)

    def create_database_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CreateDatabaseResponse().from_map(self.do_request("CreateDatabase", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def create_database(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_database_with_options(request, runtime)

    def delete_backup_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DeleteBackupResponse().from_map(self.do_request("DeleteBackup", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def delete_backup(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_backup_with_options(request, runtime)

    def describe_slow_logs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeSlowLogsResponse().from_map(self.do_request("DescribeSlowLogs", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_slow_logs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_slow_logs_with_options(request, runtime)

    def describe_slow_log_records_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeSlowLogRecordsResponse().from_map(self.do_request("DescribeSlowLogRecords", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_slow_log_records(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_slow_log_records_with_options(request, runtime)

    def failover_dbcluster_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.FailoverDBClusterResponse().from_map(self.do_request("FailoverDBCluster", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def failover_dbcluster(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.failover_dbcluster_with_options(request, runtime)

    def modify_dbcluster_description_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyDBClusterDescriptionResponse().from_map(self.do_request("ModifyDBClusterDescription", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_dbcluster_description(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_dbcluster_description_with_options(request, runtime)

    def modify_account_description_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyAccountDescriptionResponse().from_map(self.do_request("ModifyAccountDescription", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_account_description(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_account_description_with_options(request, runtime)

    def describe_regions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeRegionsResponse().from_map(self.do_request("DescribeRegions", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_regions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_regions_with_options(request, runtime)

    def describe_accounts_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeAccountsResponse().from_map(self.do_request("DescribeAccounts", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_accounts(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_accounts_with_options(request, runtime)

    def delete_dbcluster_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DeleteDBClusterResponse().from_map(self.do_request("DeleteDBCluster", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def delete_dbcluster(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_dbcluster_with_options(request, runtime)

    def create_dbcluster_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CreateDBClusterResponse().from_map(self.do_request("CreateDBCluster", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def create_dbcluster(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_dbcluster_with_options(request, runtime)

    def create_backup_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CreateBackupResponse().from_map(self.do_request("CreateBackup", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def create_backup(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_backup_with_options(request, runtime)

    def create_account_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.CreateAccountResponse().from_map(self.do_request("CreateAccount", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def create_account(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_account_with_options(request, runtime)

    def describe_backups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeBackupsResponse().from_map(self.do_request("DescribeBackups", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_backups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_backups_with_options(request, runtime)

    def modify_backup_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.ModifyBackupPolicyResponse().from_map(self.do_request("ModifyBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def modify_backup_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_backup_policy_with_options(request, runtime)

    def describe_backup_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeBackupPolicyResponse().from_map(self.do_request("DescribeBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_backup_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_backup_policy_with_options(request, runtime)

    def describe_dbclusters_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClustersResponse().from_map(self.do_request("DescribeDBClusters", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbclusters(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbclusters_with_options(request, runtime)

    def describe_dbcluster_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return polardb_20170801_models.DescribeDBClusterAttributeResponse().from_map(self.do_request("DescribeDBClusterAttribute", "HTTPS", "POST", "2017-08-01", "AK", None, request.to_map(), runtime))


    def describe_dbcluster_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dbcluster_attribute_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
