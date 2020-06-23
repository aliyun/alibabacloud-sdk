# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_arms20190808 import models as _arms20190808_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self._endpoint_map = {
            "ap-northeast-1": "arms.ap-southeast-1.aliyuncs.com",
            "ap-south-1": "arms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2": "arms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3": "arms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5": "arms.ap-southeast-1.aliyuncs.com",
            "cn-chengdu": "arms.aliyuncs.com",
            "cn-huhehaote": "arms.aliyuncs.com",
            "eu-central-1": "arms.ap-southeast-1.aliyuncs.com",
            "eu-west-1": "arms.ap-southeast-1.aliyuncs.com",
            "me-east-1": "arms.ap-southeast-1.aliyuncs.com",
            "us-east-1": "arms.ap-southeast-1.aliyuncs.com",
            "cn-hangzhou-finance": "arms.aliyuncs.com",
            "cn-shenzhen-finance-1": "arms.aliyuncs.com",
            "cn-shanghai-finance-1": "arms.aliyuncs.com",
            "cn-north-2-gov-1": "arms.aliyuncs.com"
        }
        self.check_config(config)
        self._endpoint = self.get_endpoint("arms", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def get_multiple_trace_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.GetMultipleTraceResponse().from_map(self.do_request("GetMultipleTrace", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def get_multiple_trace(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_multiple_trace_with_options(request, runtime)

    def search_traces_by_page_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchTracesByPageResponse().from_map(self.do_request("SearchTracesByPage", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_traces_by_page(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_traces_by_page_with_options(request, runtime)

    def get_stack_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.GetStackResponse().from_map(self.do_request("GetStack", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def get_stack(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_stack_with_options(request, runtime)

    def describe_trace_location_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.DescribeTraceLocationResponse().from_map(self.do_request("DescribeTraceLocation", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def describe_trace_location(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_trace_location_with_options(request, runtime)

    def delete_trace_app_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.DeleteTraceAppResponse().from_map(self.do_request("DeleteTraceApp", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def delete_trace_app(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_trace_app_with_options(request, runtime)

    def describe_trace_license_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.DescribeTraceLicenseKeyResponse().from_map(self.do_request("DescribeTraceLicenseKey", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def describe_trace_license_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_trace_license_key_with_options(request, runtime)

    def check_service_linked_role_for_deleting_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.CheckServiceLinkedRoleForDeletingResponse().from_map(self.do_request("CheckServiceLinkedRoleForDeleting", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def check_service_linked_role_for_deleting(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.check_service_linked_role_for_deleting_with_options(request, runtime)

    def list_dashboards_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.ListDashboardsResponse().from_map(self.do_request("ListDashboards", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def list_dashboards(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_dashboards_with_options(request, runtime)

    def get_consistency_snapshot_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.GetConsistencySnapshotResponse().from_map(self.do_request("GetConsistencySnapshot", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def get_consistency_snapshot(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_consistency_snapshot_with_options(request, runtime)

    def check_data_consistency_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.CheckDataConsistencyResponse().from_map(self.do_request("CheckDataConsistency", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def check_data_consistency(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.check_data_consistency_with_options(request, runtime)

    def add_grafana_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.AddGrafanaResponse().from_map(self.do_request("AddGrafana", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def add_grafana(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_grafana_with_options(request, runtime)

    def add_integration_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.AddIntegrationResponse().from_map(self.do_request("AddIntegration", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def add_integration(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_integration_with_options(request, runtime)

    def get_trace_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.GetTraceResponse().from_map(self.do_request("GetTrace", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def get_trace(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_trace_with_options(request, runtime)

    def list_cluster_from_grafana_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.ListClusterFromGrafanaResponse().from_map(self.do_request("ListClusterFromGrafana", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def list_cluster_from_grafana(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_cluster_from_grafana_with_options(request, runtime)

    def search_traces_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchTracesResponse().from_map(self.do_request("SearchTraces", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_traces(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_traces_with_options(request, runtime)

    def get_prometheus_api_token_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.GetPrometheusApiTokenResponse().from_map(self.do_request("GetPrometheusApiToken", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def get_prometheus_api_token(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_prometheus_api_token_with_options(request, runtime)

    def set_retcode_share_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SetRetcodeShareStatusResponse().from_map(self.do_request("SetRetcodeShareStatus", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def set_retcode_share_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_retcode_share_status_with_options(request, runtime)

    def get_retcode_share_url_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.GetRetcodeShareUrlResponse().from_map(self.do_request("GetRetcodeShareUrl", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def get_retcode_share_url(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_retcode_share_url_with_options(request, runtime)

    def list_prom_clusters_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.ListPromClustersResponse().from_map(self.do_request("ListPromClusters", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def list_prom_clusters(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_prom_clusters_with_options(request, runtime)

    def update_alert_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.UpdateAlertRuleResponse().from_map(self.do_request("UpdateAlertRule", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def update_alert_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_alert_rule_with_options(request, runtime)

    def start_alert_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.StartAlertResponse().from_map(self.do_request("StartAlert", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def start_alert(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.start_alert_with_options(request, runtime)

    def stop_alert_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.StopAlertResponse().from_map(self.do_request("StopAlert", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def stop_alert(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_alert_with_options(request, runtime)

    def search_events_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchEventsResponse().from_map(self.do_request("SearchEvents", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_events(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_events_with_options(request, runtime)

    def search_alert_histories_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchAlertHistoriesResponse().from_map(self.do_request("SearchAlertHistories", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_alert_histories(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_alert_histories_with_options(request, runtime)

    def update_alert_contact_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.UpdateAlertContactResponse().from_map(self.do_request("UpdateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def update_alert_contact(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_alert_contact_with_options(request, runtime)

    def delete_alert_contact_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.DeleteAlertContactGroupResponse().from_map(self.do_request("DeleteAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def delete_alert_contact_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_alert_contact_group_with_options(request, runtime)

    def delete_alert_contact_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.DeleteAlertContactResponse().from_map(self.do_request("DeleteAlertContact", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def delete_alert_contact(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_alert_contact_with_options(request, runtime)

    def update_alert_contact_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.UpdateAlertContactGroupResponse().from_map(self.do_request("UpdateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def update_alert_contact_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_alert_contact_group_with_options(request, runtime)

    def import_custom_alert_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.ImportCustomAlertRulesResponse().from_map(self.do_request("ImportCustomAlertRules", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def import_custom_alert_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.import_custom_alert_rules_with_options(request, runtime)

    def search_alert_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchAlertRulesResponse().from_map(self.do_request("SearchAlertRules", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_alert_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_alert_rules_with_options(request, runtime)

    def delete_alert_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.DeleteAlertRulesResponse().from_map(self.do_request("DeleteAlertRules", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def delete_alert_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_alert_rules_with_options(request, runtime)

    def create_retcode_app_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.CreateRetcodeAppResponse().from_map(self.do_request("CreateRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def create_retcode_app(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_retcode_app_with_options(request, runtime)

    def delete_retcode_app_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.DeleteRetcodeAppResponse().from_map(self.do_request("DeleteRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def delete_retcode_app(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_retcode_app_with_options(request, runtime)

    def query_dataset_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.QueryDatasetResponse().from_map(self.do_request("QueryDataset", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def query_dataset(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_dataset_with_options(request, runtime)

    def query_metric_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.QueryMetricResponse().from_map(self.do_request("QueryMetric", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def query_metric(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_metric_with_options(request, runtime)

    def create_alert_contact_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.CreateAlertContactResponse().from_map(self.do_request("CreateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def create_alert_contact(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_alert_contact_with_options(request, runtime)

    def create_alert_contact_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.CreateAlertContactGroupResponse().from_map(self.do_request("CreateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def create_alert_contact_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_alert_contact_group_with_options(request, runtime)

    def search_alert_contact_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchAlertContactResponse().from_map(self.do_request("SearchAlertContact", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_alert_contact(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_alert_contact_with_options(request, runtime)

    def search_alert_contact_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchAlertContactGroupResponse().from_map(self.do_request("SearchAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_alert_contact_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_alert_contact_group_with_options(request, runtime)

    def import_app_alert_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.ImportAppAlertRulesResponse().from_map(self.do_request("ImportAppAlertRules", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def import_app_alert_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.import_app_alert_rules_with_options(request, runtime)

    def search_retcode_app_by_page_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchRetcodeAppByPageResponse().from_map(self.do_request("SearchRetcodeAppByPage", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_retcode_app_by_page(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_retcode_app_by_page_with_options(request, runtime)

    def search_trace_app_by_name_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchTraceAppByNameResponse().from_map(self.do_request("SearchTraceAppByName", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_trace_app_by_name(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_trace_app_by_name_with_options(request, runtime)

    def search_trace_app_by_page_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.SearchTraceAppByPageResponse().from_map(self.do_request("SearchTraceAppByPage", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def search_trace_app_by_page(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_trace_app_by_page_with_options(request, runtime)

    def list_retcode_apps_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.ListRetcodeAppsResponse().from_map(self.do_request("ListRetcodeApps", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def list_retcode_apps(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_retcode_apps_with_options(request, runtime)

    def list_trace_apps_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _arms20190808_models.ListTraceAppsResponse().from_map(self.do_request("ListTraceApps", "HTTPS", "POST", "2019-08-08", "AK", None, request.to_map(), runtime))


    def list_trace_apps(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_trace_apps_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
