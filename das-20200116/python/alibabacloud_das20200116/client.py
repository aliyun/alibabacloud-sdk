# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_das20200116 import models as _das20200116_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = ""
        self.check_config(config)
        self._endpoint = self.get_endpoint("das", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def describe_diagnostic_report_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.DescribeDiagnosticReportListResponse().from_map(self.do_request("DescribeDiagnosticReportList", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def describe_diagnostic_report_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_diagnostic_report_list_with_options(request, runtime)

    def create_diagnostic_report_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.CreateDiagnosticReportResponse().from_map(self.do_request("CreateDiagnosticReport", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def create_diagnostic_report(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_diagnostic_report_with_options(request, runtime)

    def access_hdminstance_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.AccessHDMInstanceResponse().from_map(self.do_request("AccessHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def access_hdminstance(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.access_hdminstance_with_options(request, runtime)

    def sync_hdmaliyun_resource_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.SyncHDMAliyunResourceResponse().from_map(self.do_request("SyncHDMAliyunResource", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def sync_hdmaliyun_resource(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.sync_hdmaliyun_resource_with_options(request, runtime)

    def get_hdmlast_aliyun_resource_sync_result_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.GetHDMLastAliyunResourceSyncResultResponse().from_map(self.do_request("GetHDMLastAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def get_hdmlast_aliyun_resource_sync_result(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_hdmlast_aliyun_resource_sync_result_with_options(request, runtime)

    def get_endpoint_switch_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.GetEndpointSwitchTaskResponse().from_map(self.do_request("GetEndpointSwitchTask", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def get_endpoint_switch_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_endpoint_switch_task_with_options(request, runtime)

    def get_hdmaliyun_resource_sync_result_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.GetHDMAliyunResourceSyncResultResponse().from_map(self.do_request("GetHDMAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def get_hdmaliyun_resource_sync_result(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_hdmaliyun_resource_sync_result_with_options(request, runtime)

    def add_hdminstance_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _das20200116_models.AddHDMInstanceResponse().from_map(self.do_request("AddHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", None, request.to_map(), runtime))


    def add_hdminstance(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_hdminstance_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
