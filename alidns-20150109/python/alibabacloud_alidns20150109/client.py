# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_alidns20150109 import models as alidns_20150109_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "central"
        self.check_config(config)
        self._endpoint = self.get_endpoint("alidns", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def list_tag_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.ListTagResourcesResponse().from_map(self.do_request("ListTagResources", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def list_tag_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_tag_resources_with_options(request, runtime)

    def tag_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.TagResourcesResponse().from_map(self.do_request("TagResources", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def tag_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.tag_resources_with_options(request, runtime)

    def untag_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UntagResourcesResponse().from_map(self.do_request("UntagResources", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def untag_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.untag_resources_with_options(request, runtime)

    def describe_tags_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeTagsResponse().from_map(self.do_request("DescribeTags", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_tags(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_tags_with_options(request, runtime)

    def copy_gtm_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.CopyGtmConfigResponse().from_map(self.do_request("CopyGtmConfig", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def copy_gtm_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.copy_gtm_config_with_options(request, runtime)

    def describe_domain_dnssec_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainDnssecInfoResponse().from_map(self.do_request("DescribeDomainDnssecInfo", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_domain_dnssec_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_dnssec_info_with_options(request, runtime)

    def set_domain_dnssec_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.SetDomainDnssecStatusResponse().from_map(self.do_request("SetDomainDnssecStatus", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def set_domain_dnssec_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_domain_dnssec_status_with_options(request, runtime)

    def transfer_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.TransferDomainResponse().from_map(self.do_request("TransferDomain", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def transfer_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.transfer_domain_with_options(request, runtime)

    def describe_transfer_domains_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeTransferDomainsResponse().from_map(self.do_request("DescribeTransferDomains", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_transfer_domains(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_transfer_domains_with_options(request, runtime)

    def add_domain_backup_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddDomainBackupResponse().from_map(self.do_request("AddDomainBackup", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def add_domain_backup(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_domain_backup_with_options(request, runtime)

    def retrieve_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.RetrieveDomainResponse().from_map(self.do_request("RetrieveDomain", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def retrieve_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.retrieve_domain_with_options(request, runtime)

    def describe_gtm_recovery_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmRecoveryPlanResponse().from_map(self.do_request("DescribeGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_recovery_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_recovery_plan_with_options(request, runtime)

    def add_gtm_recovery_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddGtmRecoveryPlanResponse().from_map(self.do_request("AddGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def add_gtm_recovery_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_gtm_recovery_plan_with_options(request, runtime)

    def update_gtm_recovery_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateGtmRecoveryPlanResponse().from_map(self.do_request("UpdateGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_gtm_recovery_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_gtm_recovery_plan_with_options(request, runtime)

    def delete_gtm_recovery_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteGtmRecoveryPlanResponse().from_map(self.do_request("DeleteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def delete_gtm_recovery_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_gtm_recovery_plan_with_options(request, runtime)

    def describe_gtm_recovery_plans_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmRecoveryPlansResponse().from_map(self.do_request("DescribeGtmRecoveryPlans", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_recovery_plans(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_recovery_plans_with_options(request, runtime)

    def describe_gtm_recovery_plan_available_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmRecoveryPlanAvailableConfigResponse().from_map(self.do_request("DescribeGtmRecoveryPlanAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_recovery_plan_available_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_recovery_plan_available_config_with_options(request, runtime)

    def execute_gtm_recovery_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.ExecuteGtmRecoveryPlanResponse().from_map(self.do_request("ExecuteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def execute_gtm_recovery_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.execute_gtm_recovery_plan_with_options(request, runtime)

    def rollback_gtm_recovery_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.RollbackGtmRecoveryPlanResponse().from_map(self.do_request("RollbackGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def rollback_gtm_recovery_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.rollback_gtm_recovery_plan_with_options(request, runtime)

    def preview_gtm_recovery_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.PreviewGtmRecoveryPlanResponse().from_map(self.do_request("PreviewGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def preview_gtm_recovery_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.preview_gtm_recovery_plan_with_options(request, runtime)

    def get_txt_record_for_verify_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.GetTxtRecordForVerifyResponse().from_map(self.do_request("GetTxtRecordForVerify", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def get_txt_record_for_verify(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_txt_record_for_verify_with_options(request, runtime)

    def describe_domain_statistics_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainStatisticsResponse().from_map(self.do_request("DescribeDomainStatistics", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_domain_statistics(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_statistics_with_options(request, runtime)

    def describe_record_statistics_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeRecordStatisticsResponse().from_map(self.do_request("DescribeRecordStatistics", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_record_statistics(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_record_statistics_with_options(request, runtime)

    def describe_gtm_instance_system_cname_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmInstanceSystemCnameResponse().from_map(self.do_request("DescribeGtmInstanceSystemCname", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_instance_system_cname(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_instance_system_cname_with_options(request, runtime)

    def describe_instance_domains_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeInstanceDomainsResponse().from_map(self.do_request("DescribeInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_instance_domains(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_instance_domains_with_options(request, runtime)

    def bind_instance_domains_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.BindInstanceDomainsResponse().from_map(self.do_request("BindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def bind_instance_domains(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.bind_instance_domains_with_options(request, runtime)

    def unbind_instance_domains_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UnbindInstanceDomainsResponse().from_map(self.do_request("UnbindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def unbind_instance_domains(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.unbind_instance_domains_with_options(request, runtime)

    def update_custom_line_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateCustomLineResponse().from_map(self.do_request("UpdateCustomLine", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_custom_line(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_custom_line_with_options(request, runtime)

    def add_custom_line_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddCustomLineResponse().from_map(self.do_request("AddCustomLine", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def add_custom_line(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_custom_line_with_options(request, runtime)

    def delete_custom_lines_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteCustomLinesResponse().from_map(self.do_request("DeleteCustomLines", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def delete_custom_lines(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_custom_lines_with_options(request, runtime)

    def describe_custom_line_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeCustomLineResponse().from_map(self.do_request("DescribeCustomLine", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_custom_line(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_custom_line_with_options(request, runtime)

    def describe_custom_lines_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeCustomLinesResponse().from_map(self.do_request("DescribeCustomLines", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_custom_lines(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_custom_lines_with_options(request, runtime)

    def describe_domain_statistics_summary_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainStatisticsSummaryResponse().from_map(self.do_request("DescribeDomainStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_domain_statistics_summary(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_statistics_summary_with_options(request, runtime)

    def describe_record_statistics_summary_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeRecordStatisticsSummaryResponse().from_map(self.do_request("DescribeRecordStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_record_statistics_summary(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_record_statistics_summary_with_options(request, runtime)

    def operate_batch_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.OperateBatchDomainResponse().from_map(self.do_request("OperateBatchDomain", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def operate_batch_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.operate_batch_domain_with_options(request, runtime)

    def describe_batch_result_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeBatchResultDetailResponse().from_map(self.do_request("DescribeBatchResultDetail", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_batch_result_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_batch_result_detail_with_options(request, runtime)

    def describe_batch_result_count_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeBatchResultCountResponse().from_map(self.do_request("DescribeBatchResultCount", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_batch_result_count(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_batch_result_count_with_options(request, runtime)

    def set_gtm_access_mode_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.SetGtmAccessModeResponse().from_map(self.do_request("SetGtmAccessMode", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def set_gtm_access_mode(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_gtm_access_mode_with_options(request, runtime)

    def set_gtm_monitor_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.SetGtmMonitorStatusResponse().from_map(self.do_request("SetGtmMonitorStatus", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def set_gtm_monitor_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_gtm_monitor_status_with_options(request, runtime)

    def update_gtm_instance_global_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateGtmInstanceGlobalConfigResponse().from_map(self.do_request("UpdateGtmInstanceGlobalConfig", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_gtm_instance_global_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_gtm_instance_global_config_with_options(request, runtime)

    def describe_gtm_logs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmLogsResponse().from_map(self.do_request("DescribeGtmLogs", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_logs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_logs_with_options(request, runtime)

    def delete_gtm_access_strategy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteGtmAccessStrategyResponse().from_map(self.do_request("DeleteGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def delete_gtm_access_strategy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_gtm_access_strategy_with_options(request, runtime)

    def add_gtm_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddGtmMonitorResponse().from_map(self.do_request("AddGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def add_gtm_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_gtm_monitor_with_options(request, runtime)

    def add_gtm_address_pool_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddGtmAddressPoolResponse().from_map(self.do_request("AddGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def add_gtm_address_pool(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_gtm_address_pool_with_options(request, runtime)

    def add_gtm_access_strategy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddGtmAccessStrategyResponse().from_map(self.do_request("AddGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def add_gtm_access_strategy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_gtm_access_strategy_with_options(request, runtime)

    def describe_gtm_instances_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmInstancesResponse().from_map(self.do_request("DescribeGtmInstances", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_instances(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_instances_with_options(request, runtime)

    def delete_gtm_address_pool_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteGtmAddressPoolResponse().from_map(self.do_request("DeleteGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def delete_gtm_address_pool(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_gtm_address_pool_with_options(request, runtime)

    def describe_gtm_access_strategies_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmAccessStrategiesResponse().from_map(self.do_request("DescribeGtmAccessStrategies", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_access_strategies(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_access_strategies_with_options(request, runtime)

    def describe_gtm_access_strategy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmAccessStrategyResponse().from_map(self.do_request("DescribeGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_access_strategy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_access_strategy_with_options(request, runtime)

    def describe_gtm_access_strategy_available_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmAccessStrategyAvailableConfigResponse().from_map(self.do_request("DescribeGtmAccessStrategyAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_access_strategy_available_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_access_strategy_available_config_with_options(request, runtime)

    def describe_gtm_available_alert_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmAvailableAlertGroupResponse().from_map(self.do_request("DescribeGtmAvailableAlertGroup", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_available_alert_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_available_alert_group_with_options(request, runtime)

    def describe_gtm_instance_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmInstanceResponse().from_map(self.do_request("DescribeGtmInstance", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_instance(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_instance_with_options(request, runtime)

    def describe_gtm_instance_address_pool_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmInstanceAddressPoolResponse().from_map(self.do_request("DescribeGtmInstanceAddressPool", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_instance_address_pool(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_instance_address_pool_with_options(request, runtime)

    def describe_gtm_instance_address_pools_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmInstanceAddressPoolsResponse().from_map(self.do_request("DescribeGtmInstanceAddressPools", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_instance_address_pools(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_instance_address_pools_with_options(request, runtime)

    def describe_gtm_instance_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmInstanceStatusResponse().from_map(self.do_request("DescribeGtmInstanceStatus", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_instance_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_instance_status_with_options(request, runtime)

    def describe_gtm_monitor_available_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmMonitorAvailableConfigResponse().from_map(self.do_request("DescribeGtmMonitorAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_monitor_available_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_monitor_available_config_with_options(request, runtime)

    def describe_gtm_monitor_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeGtmMonitorConfigResponse().from_map(self.do_request("DescribeGtmMonitorConfig", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_gtm_monitor_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_gtm_monitor_config_with_options(request, runtime)

    def update_gtm_access_strategy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateGtmAccessStrategyResponse().from_map(self.do_request("UpdateGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_gtm_access_strategy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_gtm_access_strategy_with_options(request, runtime)

    def update_gtm_address_pool_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateGtmAddressPoolResponse().from_map(self.do_request("UpdateGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_gtm_address_pool(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_gtm_address_pool_with_options(request, runtime)

    def update_gtm_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateGtmMonitorResponse().from_map(self.do_request("UpdateGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_gtm_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_gtm_monitor_with_options(request, runtime)

    def update_domain_remark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateDomainRemarkResponse().from_map(self.do_request("UpdateDomainRemark", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_domain_remark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_domain_remark_with_options(request, runtime)

    def update_domain_record_remark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateDomainRecordRemarkResponse().from_map(self.do_request("UpdateDomainRecordRemark", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_domain_record_remark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_domain_record_remark_with_options(request, runtime)

    def describe_support_lines_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeSupportLinesResponse().from_map(self.do_request("DescribeSupportLines", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_support_lines(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_support_lines_with_options(request, runtime)

    def describe_domain_ns_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainNsResponse().from_map(self.do_request("DescribeDomainNs", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_domain_ns(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_ns_with_options(request, runtime)

    def describe_dns_product_instance_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDnsProductInstanceResponse().from_map(self.do_request("DescribeDnsProductInstance", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_dns_product_instance(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dns_product_instance_with_options(request, runtime)

    def update_domain_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateDomainRecordResponse().from_map(self.do_request("UpdateDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def update_domain_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_domain_record_with_options(request, runtime)

    def update_domain_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateDomainGroupResponse().from_map(self.do_request("UpdateDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_domain_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_domain_group_with_options(request, runtime)

    def update_dnsslbweight_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.UpdateDNSSLBWeightResponse().from_map(self.do_request("UpdateDNSSLBWeight", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def update_dnsslbweight(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_dnsslbweight_with_options(request, runtime)

    def set_domain_record_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.SetDomainRecordStatusResponse().from_map(self.do_request("SetDomainRecordStatus", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def set_domain_record_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_domain_record_status_with_options(request, runtime)

    def set_dnsslbstatus_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.SetDNSSLBStatusResponse().from_map(self.do_request("SetDNSSLBStatus", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def set_dnsslbstatus(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_dnsslbstatus_with_options(request, runtime)

    def modify_hichina_domain_dnswith_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.ModifyHichinaDomainDNSResponse().from_map(self.do_request("ModifyHichinaDomainDNS", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def modify_hichina_domain_dns(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_hichina_domain_dnswith_options(request, runtime)

    def get_main_domain_name_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.GetMainDomainNameResponse().from_map(self.do_request("GetMainDomainName", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def get_main_domain_name(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_main_domain_name_with_options(request, runtime)

    def describe_sub_domain_records_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeSubDomainRecordsResponse().from_map(self.do_request("DescribeSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_sub_domain_records(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_sub_domain_records_with_options(request, runtime)

    def describe_record_logs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeRecordLogsResponse().from_map(self.do_request("DescribeRecordLogs", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_record_logs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_record_logs_with_options(request, runtime)

    def describe_domains_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainsResponse().from_map(self.do_request("DescribeDomains", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def describe_domains(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domains_with_options(request, runtime)

    def describe_domain_records_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainRecordsResponse().from_map(self.do_request("DescribeDomainRecords", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def describe_domain_records(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_records_with_options(request, runtime)

    def describe_domain_record_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainRecordInfoResponse().from_map(self.do_request("DescribeDomainRecordInfo", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def describe_domain_record_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_record_info_with_options(request, runtime)

    def describe_domain_logs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainLogsResponse().from_map(self.do_request("DescribeDomainLogs", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_domain_logs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_logs_with_options(request, runtime)

    def describe_domain_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainInfoResponse().from_map(self.do_request("DescribeDomainInfo", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_domain_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_info_with_options(request, runtime)

    def describe_domain_groups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDomainGroupsResponse().from_map(self.do_request("DescribeDomainGroups", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_domain_groups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_domain_groups_with_options(request, runtime)

    def describe_dnsslbsub_domains_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDNSSLBSubDomainsResponse().from_map(self.do_request("DescribeDNSSLBSubDomains", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_dnsslbsub_domains(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dnsslbsub_domains_with_options(request, runtime)

    def describe_dns_product_instances_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DescribeDnsProductInstancesResponse().from_map(self.do_request("DescribeDnsProductInstances", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def describe_dns_product_instances(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dns_product_instances_with_options(request, runtime)

    def delete_sub_domain_records_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteSubDomainRecordsResponse().from_map(self.do_request("DeleteSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def delete_sub_domain_records(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_sub_domain_records_with_options(request, runtime)

    def delete_domain_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteDomainRecordResponse().from_map(self.do_request("DeleteDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def delete_domain_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_domain_record_with_options(request, runtime)

    def delete_domain_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteDomainGroupResponse().from_map(self.do_request("DeleteDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def delete_domain_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_domain_group_with_options(request, runtime)

    def delete_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.DeleteDomainResponse().from_map(self.do_request("DeleteDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def delete_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_domain_with_options(request, runtime)

    def change_domain_of_dns_product_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.ChangeDomainOfDnsProductResponse().from_map(self.do_request("ChangeDomainOfDnsProduct", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def change_domain_of_dns_product(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.change_domain_of_dns_product_with_options(request, runtime)

    def change_domain_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.ChangeDomainGroupResponse().from_map(self.do_request("ChangeDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def change_domain_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.change_domain_group_with_options(request, runtime)

    def add_domain_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddDomainRecordResponse().from_map(self.do_request("AddDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def add_domain_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_domain_record_with_options(request, runtime)

    def add_domain_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddDomainGroupResponse().from_map(self.do_request("AddDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", None, request.to_map(), runtime))


    def add_domain_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_domain_group_with_options(request, runtime)

    def add_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return alidns_20150109_models.AddDomainResponse().from_map(self.do_request("AddDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", None, request.to_map(), runtime))


    def add_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_domain_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
