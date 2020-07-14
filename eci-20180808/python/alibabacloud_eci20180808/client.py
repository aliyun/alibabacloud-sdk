# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_eci20180808 import models as eci_20180808_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = ""
        self.check_config(config)
        self._endpoint = self.get_endpoint("eci", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def describe_regions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DescribeRegionsResponse().from_map(self.do_request("DescribeRegions", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def describe_regions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_regions_with_options(request, runtime)

    def describe_image_caches_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DescribeImageCachesResponse().from_map(self.do_request("DescribeImageCaches", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def describe_image_caches(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_image_caches_with_options(request, runtime)

    def delete_image_cache_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DeleteImageCacheResponse().from_map(self.do_request("DeleteImageCache", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def delete_image_cache(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_image_cache_with_options(request, runtime)

    def create_image_cache_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.CreateImageCacheResponse().from_map(self.do_request("CreateImageCache", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def create_image_cache(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_image_cache_with_options(request, runtime)

    def describe_multi_container_group_metric_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DescribeMultiContainerGroupMetricResponse().from_map(self.do_request("DescribeMultiContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def describe_multi_container_group_metric(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_multi_container_group_metric_with_options(request, runtime)

    def describe_container_group_metric_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DescribeContainerGroupMetricResponse().from_map(self.do_request("DescribeContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def describe_container_group_metric(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_container_group_metric_with_options(request, runtime)

    def update_container_group_by_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.UpdateContainerGroupByTemplateResponse().from_map(self.do_request("UpdateContainerGroupByTemplate", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def update_container_group_by_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_container_group_by_template_with_options(request, runtime)

    def create_container_group_from_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.CreateContainerGroupFromTemplateResponse().from_map(self.do_request("CreateContainerGroupFromTemplate", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def create_container_group_from_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_container_group_from_template_with_options(request, runtime)

    def export_container_group_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.ExportContainerGroupTemplateResponse().from_map(self.do_request("ExportContainerGroupTemplate", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def export_container_group_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.export_container_group_template_with_options(request, runtime)

    def restart_container_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.RestartContainerGroupResponse().from_map(self.do_request("RestartContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def restart_container_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.restart_container_group_with_options(request, runtime)

    def update_container_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.UpdateContainerGroupResponse().from_map(self.do_request("UpdateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def update_container_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_container_group_with_options(request, runtime)

    def describe_container_group_price_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DescribeContainerGroupPriceResponse().from_map(self.do_request("DescribeContainerGroupPrice", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def describe_container_group_price(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_container_group_price_with_options(request, runtime)

    def exec_container_command_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.ExecContainerCommandResponse().from_map(self.do_request("ExecContainerCommand", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def exec_container_command(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.exec_container_command_with_options(request, runtime)

    def describe_container_log_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DescribeContainerLogResponse().from_map(self.do_request("DescribeContainerLog", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def describe_container_log(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_container_log_with_options(request, runtime)

    def create_container_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.CreateContainerGroupResponse().from_map(self.do_request("CreateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def create_container_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_container_group_with_options(request, runtime)

    def describe_container_groups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DescribeContainerGroupsResponse().from_map(self.do_request("DescribeContainerGroups", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def describe_container_groups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_container_groups_with_options(request, runtime)

    def delete_container_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return eci_20180808_models.DeleteContainerGroupResponse().from_map(self.do_request("DeleteContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", None, request.to_map(), runtime))


    def delete_container_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_container_group_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
