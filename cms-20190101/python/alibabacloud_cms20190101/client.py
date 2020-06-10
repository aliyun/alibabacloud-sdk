# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_cms20190101 import models as cms_20190101_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = ""
        self.check_config(config)
        self._endpoint = self.get_endpoint("cms", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def describe_exporter_output_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeExporterOutputListResponse().from_map(self.do_request("DescribeExporterOutputList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_exporter_output_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_exporter_output_list_with_options(request, runtime)

    def delete_exporter_output_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteExporterOutputResponse().from_map(self.do_request("DeleteExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_exporter_output(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_exporter_output_with_options(request, runtime)

    def put_exporter_output_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutExporterOutputResponse().from_map(self.do_request("PutExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_exporter_output(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_exporter_output_with_options(request, runtime)

    def describe_folder_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeFolderListResponse().from_map(self.do_request("DescribeFolderList", "HTTPS", "GET", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_folder_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_folder_list_with_options(request, runtime)

    def delete_exporter_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteExporterRuleResponse().from_map(self.do_request("DeleteExporterRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_exporter_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_exporter_rule_with_options(request, runtime)

    def describe_exporter_rule_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeExporterRuleListResponse().from_map(self.do_request("DescribeExporterRuleList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_exporter_rule_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_exporter_rule_list_with_options(request, runtime)

    def put_exporter_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutExporterRuleResponse().from_map(self.do_request("PutExporterRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_exporter_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_exporter_rule_with_options(request, runtime)

    def describe_dynamic_tag_rule_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeDynamicTagRuleListResponse().from_map(self.do_request("DescribeDynamicTagRuleList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_dynamic_tag_rule_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_dynamic_tag_rule_list_with_options(request, runtime)

    def describe_product_resource_tag_key_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeProductResourceTagKeyListResponse().from_map(self.do_request("DescribeProductResourceTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_product_resource_tag_key_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_product_resource_tag_key_list_with_options(request, runtime)

    def create_dynamic_tag_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateDynamicTagGroupResponse().from_map(self.do_request("CreateDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_dynamic_tag_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_dynamic_tag_group_with_options(request, runtime)

    def delete_dynamic_tag_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteDynamicTagGroupResponse().from_map(self.do_request("DeleteDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_dynamic_tag_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_dynamic_tag_group_with_options(request, runtime)

    def modify_group_monitoring_agent_process_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.ModifyGroupMonitoringAgentProcessResponse().from_map(self.do_request("ModifyGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def modify_group_monitoring_agent_process(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_group_monitoring_agent_process_with_options(request, runtime)

    def delete_group_monitoring_agent_process_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteGroupMonitoringAgentProcessResponse().from_map(self.do_request("DeleteGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_group_monitoring_agent_process(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_group_monitoring_agent_process_with_options(request, runtime)

    def create_group_monitoring_agent_process_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateGroupMonitoringAgentProcessResponse().from_map(self.do_request("CreateGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_group_monitoring_agent_process(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_group_monitoring_agent_process_with_options(request, runtime)

    def describe_tag_key_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeTagKeyListResponse().from_map(self.do_request("DescribeTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_tag_key_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_tag_key_list_with_options(request, runtime)

    def describe_tag_value_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeTagValueListResponse().from_map(self.do_request("DescribeTagValueList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_tag_value_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_tag_value_list_with_options(request, runtime)

    def remove_tags_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.RemoveTagsResponse().from_map(self.do_request("RemoveTags", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def remove_tags(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_tags_with_options(request, runtime)

    def add_tags_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.AddTagsResponse().from_map(self.do_request("AddTags", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def add_tags(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_tags_with_options(request, runtime)

    def describe_group_monitoring_agent_process_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeGroupMonitoringAgentProcessResponse().from_map(self.do_request("DescribeGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_group_monitoring_agent_process(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_group_monitoring_agent_process_with_options(request, runtime)

    def put_resource_metric_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutResourceMetricRulesResponse().from_map(self.do_request("PutResourceMetricRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_resource_metric_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_resource_metric_rules_with_options(request, runtime)

    def create_metric_rule_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateMetricRuleResourcesResponse().from_map(self.do_request("CreateMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_metric_rule_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_metric_rule_resources_with_options(request, runtime)

    def delete_metric_rule_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMetricRuleResourcesResponse().from_map(self.do_request("DeleteMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_metric_rule_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_metric_rule_resources_with_options(request, runtime)

    def delete_metric_rule_targets_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMetricRuleTargetsResponse().from_map(self.do_request("DeleteMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_metric_rule_targets(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_metric_rule_targets_with_options(request, runtime)

    def put_metric_rule_targets_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutMetricRuleTargetsResponse().from_map(self.do_request("PutMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_metric_rule_targets(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_metric_rule_targets_with_options(request, runtime)

    def describe_metric_rule_targets_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricRuleTargetsResponse().from_map(self.do_request("DescribeMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_rule_targets(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_rule_targets_with_options(request, runtime)

    def modify_monitor_group_instances_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.ModifyMonitorGroupInstancesResponse().from_map(self.do_request("ModifyMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def modify_monitor_group_instances(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_monitor_group_instances_with_options(request, runtime)

    def describe_monitoring_agent_statuses_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitoringAgentStatusesResponse().from_map(self.do_request("DescribeMonitoringAgentStatuses", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitoring_agent_statuses(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitoring_agent_statuses_with_options(request, runtime)

    def create_monitor_agent_process_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateMonitorAgentProcessResponse().from_map(self.do_request("CreateMonitorAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_monitor_agent_process(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_monitor_agent_process_with_options(request, runtime)

    def describe_alert_history_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeAlertHistoryListResponse().from_map(self.do_request("DescribeAlertHistoryList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_alert_history_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_alert_history_list_with_options(request, runtime)

    def describe_alerting_metric_rule_resources_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeAlertingMetricRuleResourcesResponse().from_map(self.do_request("DescribeAlertingMetricRuleResources", "HTTPS", "GET", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_alerting_metric_rule_resources(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_alerting_metric_rule_resources_with_options(request, runtime)

    def disable_active_metric_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DisableActiveMetricRuleResponse().from_map(self.do_request("DisableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def disable_active_metric_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.disable_active_metric_rule_with_options(request, runtime)

    def describe_active_metric_rule_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeActiveMetricRuleListResponse().from_map(self.do_request("DescribeActiveMetricRuleList", "HTTPS", "GET", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_active_metric_rule_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_active_metric_rule_list_with_options(request, runtime)

    def describe_products_of_active_metric_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeProductsOfActiveMetricRuleResponse().from_map(self.do_request("DescribeProductsOfActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_products_of_active_metric_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_products_of_active_metric_rule_with_options(request, runtime)

    def enable_active_metric_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.EnableActiveMetricRuleResponse().from_map(self.do_request("EnableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def enable_active_metric_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.enable_active_metric_rule_with_options(request, runtime)

    def describe_monitor_group_instance_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitorGroupInstanceAttributeResponse().from_map(self.do_request("DescribeMonitorGroupInstanceAttribute", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitor_group_instance_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitor_group_instance_attribute_with_options(request, runtime)

    def describe_monitor_group_notify_policy_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitorGroupNotifyPolicyListResponse().from_map(self.do_request("DescribeMonitorGroupNotifyPolicyList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitor_group_notify_policy_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitor_group_notify_policy_list_with_options(request, runtime)

    def delete_monitor_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMonitorGroupResponse().from_map(self.do_request("DeleteMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_monitor_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_monitor_group_with_options(request, runtime)

    def create_monitor_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateMonitorGroupResponse().from_map(self.do_request("CreateMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_monitor_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_monitor_group_with_options(request, runtime)

    def describe_monitor_groups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitorGroupsResponse().from_map(self.do_request("DescribeMonitorGroups", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitor_groups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitor_groups_with_options(request, runtime)

    def delete_monitor_group_notify_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMonitorGroupNotifyPolicyResponse().from_map(self.do_request("DeleteMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_monitor_group_notify_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_monitor_group_notify_policy_with_options(request, runtime)

    def describe_monitor_group_dynamic_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitorGroupDynamicRulesResponse().from_map(self.do_request("DescribeMonitorGroupDynamicRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitor_group_dynamic_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitor_group_dynamic_rules_with_options(request, runtime)

    def create_monitor_group_instances_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateMonitorGroupInstancesResponse().from_map(self.do_request("CreateMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_monitor_group_instances(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_monitor_group_instances_with_options(request, runtime)

    def create_monitor_group_notify_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateMonitorGroupNotifyPolicyResponse().from_map(self.do_request("CreateMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_monitor_group_notify_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_monitor_group_notify_policy_with_options(request, runtime)

    def delete_monitor_group_instances_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMonitorGroupInstancesResponse().from_map(self.do_request("DeleteMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_monitor_group_instances(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_monitor_group_instances_with_options(request, runtime)

    def delete_monitor_group_dynamic_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMonitorGroupDynamicRuleResponse().from_map(self.do_request("DeleteMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_monitor_group_dynamic_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_monitor_group_dynamic_rule_with_options(request, runtime)

    def put_monitor_group_dynamic_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutMonitorGroupDynamicRuleResponse().from_map(self.do_request("PutMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_monitor_group_dynamic_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_monitor_group_dynamic_rule_with_options(request, runtime)

    def describe_monitor_group_instances_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitorGroupInstancesResponse().from_map(self.do_request("DescribeMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitor_group_instances(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitor_group_instances_with_options(request, runtime)

    def describe_monitor_group_categories_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitorGroupCategoriesResponse().from_map(self.do_request("DescribeMonitorGroupCategories", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitor_group_categories(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitor_group_categories_with_options(request, runtime)

    def modify_monitor_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.ModifyMonitorGroupResponse().from_map(self.do_request("ModifyMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def modify_monitor_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_monitor_group_with_options(request, runtime)

    def describe_metric_rule_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricRuleListResponse().from_map(self.do_request("DescribeMetricRuleList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_rule_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_rule_list_with_options(request, runtime)

    def put_resource_metric_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutResourceMetricRuleResponse().from_map(self.do_request("PutResourceMetricRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_resource_metric_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_resource_metric_rule_with_options(request, runtime)

    def put_group_metric_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutGroupMetricRuleResponse().from_map(self.do_request("PutGroupMetricRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_group_metric_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_group_metric_rule_with_options(request, runtime)

    def enable_metric_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.EnableMetricRulesResponse().from_map(self.do_request("EnableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def enable_metric_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.enable_metric_rules_with_options(request, runtime)

    def describe_metric_rule_count_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricRuleCountResponse().from_map(self.do_request("DescribeMetricRuleCount", "HTTPS", "GET", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_rule_count(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_rule_count_with_options(request, runtime)

    def create_group_metric_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateGroupMetricRulesResponse().from_map(self.do_request("CreateGroupMetricRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_group_metric_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_group_metric_rules_with_options(request, runtime)

    def disable_metric_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DisableMetricRulesResponse().from_map(self.do_request("DisableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def disable_metric_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.disable_metric_rules_with_options(request, runtime)

    def delete_metric_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMetricRulesResponse().from_map(self.do_request("DeleteMetricRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_metric_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_metric_rules_with_options(request, runtime)

    def modify_metric_rule_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.ModifyMetricRuleTemplateResponse().from_map(self.do_request("ModifyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def modify_metric_rule_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_metric_rule_template_with_options(request, runtime)

    def apply_metric_rule_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.ApplyMetricRuleTemplateResponse().from_map(self.do_request("ApplyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def apply_metric_rule_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.apply_metric_rule_template_with_options(request, runtime)

    def describe_metric_rule_template_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricRuleTemplateAttributeResponse().from_map(self.do_request("DescribeMetricRuleTemplateAttribute", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_rule_template_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_rule_template_attribute_with_options(request, runtime)

    def create_metric_rule_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateMetricRuleTemplateResponse().from_map(self.do_request("CreateMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_metric_rule_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_metric_rule_template_with_options(request, runtime)

    def delete_metric_rule_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMetricRuleTemplateResponse().from_map(self.do_request("DeleteMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_metric_rule_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_metric_rule_template_with_options(request, runtime)

    def describe_metric_rule_template_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricRuleTemplateListResponse().from_map(self.do_request("DescribeMetricRuleTemplateList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_rule_template_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_rule_template_list_with_options(request, runtime)

    def put_custom_event_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutCustomEventResponse().from_map(self.do_request("PutCustomEvent", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_custom_event(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_custom_event_with_options(request, runtime)

    def describe_custom_event_count_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeCustomEventCountResponse().from_map(self.do_request("DescribeCustomEventCount", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_custom_event_count(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_custom_event_count_with_options(request, runtime)

    def describe_custom_event_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeCustomEventAttributeResponse().from_map(self.do_request("DescribeCustomEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_custom_event_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_custom_event_attribute_with_options(request, runtime)

    def describe_custom_event_histogram_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeCustomEventHistogramResponse().from_map(self.do_request("DescribeCustomEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_custom_event_histogram(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_custom_event_histogram_with_options(request, runtime)

    def delete_custom_metric_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteCustomMetricResponse().from_map(self.do_request("DeleteCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_custom_metric(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_custom_metric_with_options(request, runtime)

    def describe_custom_metric_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeCustomMetricListResponse().from_map(self.do_request("DescribeCustomMetricList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_custom_metric_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_custom_metric_list_with_options(request, runtime)

    def put_custom_metric_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutCustomMetricResponse().from_map(self.do_request("PutCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_custom_metric(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_custom_metric_with_options(request, runtime)

    def describe_event_rule_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeEventRuleAttributeResponse().from_map(self.do_request("DescribeEventRuleAttribute", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_event_rule_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_event_rule_attribute_with_options(request, runtime)

    def delete_contact_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteContactGroupResponse().from_map(self.do_request("DeleteContactGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_contact_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_contact_group_with_options(request, runtime)

    def describe_contact_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeContactListResponse().from_map(self.do_request("DescribeContactList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_contact_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_contact_list_with_options(request, runtime)

    def describe_contact_list_by_contact_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeContactListByContactGroupResponse().from_map(self.do_request("DescribeContactListByContactGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_contact_list_by_contact_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_contact_list_by_contact_group_with_options(request, runtime)

    def delete_contact_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteContactResponse().from_map(self.do_request("DeleteContact", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_contact(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_contact_with_options(request, runtime)

    def put_contact_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutContactGroupResponse().from_map(self.do_request("PutContactGroup", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_contact_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_contact_group_with_options(request, runtime)

    def put_contact_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutContactResponse().from_map(self.do_request("PutContact", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_contact(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_contact_with_options(request, runtime)

    def describe_contact_group_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeContactGroupListResponse().from_map(self.do_request("DescribeContactGroupList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_contact_group_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_contact_group_list_with_options(request, runtime)

    def put_event_rule_targets_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutEventRuleTargetsResponse().from_map(self.do_request("PutEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_event_rule_targets(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_event_rule_targets_with_options(request, runtime)

    def delete_event_rule_targets_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteEventRuleTargetsResponse().from_map(self.do_request("DeleteEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_event_rule_targets(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_event_rule_targets_with_options(request, runtime)

    def disable_event_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DisableEventRulesResponse().from_map(self.do_request("DisableEventRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def disable_event_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.disable_event_rules_with_options(request, runtime)

    def describe_event_rule_target_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeEventRuleTargetListResponse().from_map(self.do_request("DescribeEventRuleTargetList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_event_rule_target_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_event_rule_target_list_with_options(request, runtime)

    def delete_event_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteEventRulesResponse().from_map(self.do_request("DeleteEventRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_event_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_event_rules_with_options(request, runtime)

    def enable_event_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.EnableEventRulesResponse().from_map(self.do_request("EnableEventRules", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def enable_event_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.enable_event_rules_with_options(request, runtime)

    def put_event_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutEventRuleResponse().from_map(self.do_request("PutEventRule", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_event_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_event_rule_with_options(request, runtime)

    def describe_event_rule_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeEventRuleListResponse().from_map(self.do_request("DescribeEventRuleList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_event_rule_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_event_rule_list_with_options(request, runtime)

    def describe_system_event_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSystemEventAttributeResponse().from_map(self.do_request("DescribeSystemEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_system_event_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_system_event_attribute_with_options(request, runtime)

    def describe_system_event_histogram_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSystemEventHistogramResponse().from_map(self.do_request("DescribeSystemEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_system_event_histogram(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_system_event_histogram_with_options(request, runtime)

    def describe_system_event_count_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSystemEventCountResponse().from_map(self.do_request("DescribeSystemEventCount", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_system_event_count(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_system_event_count_with_options(request, runtime)

    def describe_system_event_meta_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSystemEventMetaListResponse().from_map(self.do_request("DescribeSystemEventMetaList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_system_event_meta_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_system_event_meta_list_with_options(request, runtime)

    def describe_monitoring_agent_processes_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitoringAgentProcessesResponse().from_map(self.do_request("DescribeMonitoringAgentProcesses", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitoring_agent_processes(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitoring_agent_processes_with_options(request, runtime)

    def uninstall_monitoring_agent_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.UninstallMonitoringAgentResponse().from_map(self.do_request("UninstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def uninstall_monitoring_agent(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.uninstall_monitoring_agent_with_options(request, runtime)

    def describe_monitoring_agent_access_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitoringAgentAccessKeyResponse().from_map(self.do_request("DescribeMonitoringAgentAccessKey", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitoring_agent_access_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitoring_agent_access_key_with_options(request, runtime)

    def install_monitoring_agent_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.InstallMonitoringAgentResponse().from_map(self.do_request("InstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def install_monitoring_agent(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.install_monitoring_agent_with_options(request, runtime)

    def send_dry_run_system_event_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.SendDryRunSystemEventResponse().from_map(self.do_request("SendDryRunSystemEvent", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def send_dry_run_system_event(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.send_dry_run_system_event_with_options(request, runtime)

    def create_monitoring_agent_process_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateMonitoringAgentProcessResponse().from_map(self.do_request("CreateMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_monitoring_agent_process(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_monitoring_agent_process_with_options(request, runtime)

    def describe_monitoring_agent_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitoringAgentConfigResponse().from_map(self.do_request("DescribeMonitoringAgentConfig", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitoring_agent_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitoring_agent_config_with_options(request, runtime)

    def delete_monitoring_agent_process_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteMonitoringAgentProcessResponse().from_map(self.do_request("DeleteMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_monitoring_agent_process(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_monitoring_agent_process_with_options(request, runtime)

    def describe_monitoring_agent_hosts_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitoringAgentHostsResponse().from_map(self.do_request("DescribeMonitoringAgentHosts", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitoring_agent_hosts(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitoring_agent_hosts_with_options(request, runtime)

    def describe_site_monitor_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSiteMonitorDataResponse().from_map(self.do_request("DescribeSiteMonitorData", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_site_monitor_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_site_monitor_data_with_options(request, runtime)

    def modify_site_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.ModifySiteMonitorResponse().from_map(self.do_request("ModifySiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def modify_site_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_site_monitor_with_options(request, runtime)

    def describe_site_monitor_ispcity_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSiteMonitorISPCityListResponse().from_map(self.do_request("DescribeSiteMonitorISPCityList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_site_monitor_ispcity_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_site_monitor_ispcity_list_with_options(request, runtime)

    def describe_site_monitor_quota_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSiteMonitorQuotaResponse().from_map(self.do_request("DescribeSiteMonitorQuota", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_site_monitor_quota(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_site_monitor_quota_with_options(request, runtime)

    def describe_site_monitor_statistics_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSiteMonitorStatisticsResponse().from_map(self.do_request("DescribeSiteMonitorStatistics", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_site_monitor_statistics(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_site_monitor_statistics_with_options(request, runtime)

    def enable_site_monitors_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.EnableSiteMonitorsResponse().from_map(self.do_request("EnableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def enable_site_monitors(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.enable_site_monitors_with_options(request, runtime)

    def describe_site_monitor_attribute_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSiteMonitorAttributeResponse().from_map(self.do_request("DescribeSiteMonitorAttribute", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_site_monitor_attribute(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_site_monitor_attribute_with_options(request, runtime)

    def describe_site_monitor_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeSiteMonitorListResponse().from_map(self.do_request("DescribeSiteMonitorList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_site_monitor_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_site_monitor_list_with_options(request, runtime)

    def delete_site_monitors_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteSiteMonitorsResponse().from_map(self.do_request("DeleteSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_site_monitors(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_site_monitors_with_options(request, runtime)

    def disable_site_monitors_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DisableSiteMonitorsResponse().from_map(self.do_request("DisableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def disable_site_monitors(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.disable_site_monitors_with_options(request, runtime)

    def create_site_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateSiteMonitorResponse().from_map(self.do_request("CreateSiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_site_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_site_monitor_with_options(request, runtime)

    def describe_project_meta_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeProjectMetaResponse().from_map(self.do_request("DescribeProjectMeta", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_project_meta(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_project_meta_with_options(request, runtime)

    def describe_metric_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricListResponse().from_map(self.do_request("DescribeMetricList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_list_with_options(request, runtime)

    def describe_metric_meta_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricMetaListResponse().from_map(self.do_request("DescribeMetricMetaList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_meta_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_meta_list_with_options(request, runtime)

    def describe_metric_top_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricTopResponse().from_map(self.do_request("DescribeMetricTop", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_top(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_top_with_options(request, runtime)

    def describe_metric_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricDataResponse().from_map(self.do_request("DescribeMetricData", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_data_with_options(request, runtime)

    def describe_metric_last_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMetricLastResponse().from_map(self.do_request("DescribeMetricLast", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_metric_last(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_metric_last_with_options(request, runtime)

    def enable_host_availability_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.EnableHostAvailabilityResponse().from_map(self.do_request("EnableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def enable_host_availability(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.enable_host_availability_with_options(request, runtime)

    def modify_host_availability_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.ModifyHostAvailabilityResponse().from_map(self.do_request("ModifyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def modify_host_availability(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_host_availability_with_options(request, runtime)

    def disable_host_availability_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DisableHostAvailabilityResponse().from_map(self.do_request("DisableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def disable_host_availability(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.disable_host_availability_with_options(request, runtime)

    def describe_unhealthy_host_availability_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeUnhealthyHostAvailabilityResponse().from_map(self.do_request("DescribeUnhealthyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_unhealthy_host_availability(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_unhealthy_host_availability_with_options(request, runtime)

    def create_host_availability_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.CreateHostAvailabilityResponse().from_map(self.do_request("CreateHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def create_host_availability(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_host_availability_with_options(request, runtime)

    def describe_host_availability_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeHostAvailabilityListResponse().from_map(self.do_request("DescribeHostAvailabilityList", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_host_availability_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_host_availability_list_with_options(request, runtime)

    def delete_host_availability_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DeleteHostAvailabilityResponse().from_map(self.do_request("DeleteHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def delete_host_availability(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_host_availability_with_options(request, runtime)

    def describe_monitoring_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.DescribeMonitoringConfigResponse().from_map(self.do_request("DescribeMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def describe_monitoring_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_monitoring_config_with_options(request, runtime)

    def put_monitoring_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return cms_20190101_models.PutMonitoringConfigResponse().from_map(self.do_request("PutMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", None, request.to_map(), runtime))


    def put_monitoring_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_monitoring_config_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
