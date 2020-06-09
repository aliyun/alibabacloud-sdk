# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_roa.client import Client as ROAClient
from alibabacloud_ros20150901 import models as _ros20150901_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(ROAClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "central"
        self.check_config(config)
        self._endpoint_host = self.get_endpoint("ros", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint_host)

    def create_change_set_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.CreateChangeSetResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/changeSets", None, request.headers, None, runtime))


    def create_change_set(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_change_set_with_options(request, runtime)

    def describe_change_set_detail_with_options(self, stack_name, stack_id, change_set_name, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeChangeSetDetailResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/changeSets/" + str(change_set_name) + "", None, request.headers, None, runtime))


    def describe_change_set_detail(self, stack_name, stack_id, change_set_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_change_set_detail_with_options(stack_name, stack_id, change_set_name, request, runtime)

    def describe_change_sets_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeChangeSetsResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/changeSets", None, request.headers, None, runtime))


    def describe_change_sets(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_change_sets_with_options(stack_name, stack_id, request, runtime)

    def execute_change_set_with_options(self, stack_name, stack_id, change_set_name, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.ExecuteChangeSetResponse().from_map(self.do_request("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/changeSets/" + str(change_set_name) + "/execute", None, request.headers, None, runtime))


    def execute_change_set(self, stack_name, stack_id, change_set_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.execute_change_set_with_options(stack_name, stack_id, change_set_name, request, runtime)

    def delete_change_set_with_options(self, stack_name, stack_id, change_set_name, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DeleteChangeSetResponse().from_map(self.do_request("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/changeSets/" + str(change_set_name) + "", None, request.headers, None, runtime))


    def delete_change_set(self, stack_name, stack_id, change_set_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_change_set_with_options(stack_name, stack_id, change_set_name, request, runtime)

    def continue_create_stack_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.ContinueCreateStackResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/continue", None, request.headers, None, runtime))


    def continue_create_stack(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.continue_create_stack_with_options(stack_name, stack_id, request, runtime)

    def cancel_update_stack_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.CancelUpdateStackResponse().from_map(self.do_request("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/cancel", None, request.headers, None, runtime))


    def cancel_update_stack(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_update_stack_with_options(stack_name, stack_id, request, runtime)

    def get_stack_policy_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.GetStackPolicyResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/policy", None, request.headers, None, runtime))


    def get_stack_policy(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_stack_policy_with_options(stack_name, stack_id, request, runtime)

    def set_stack_policy_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.SetStackPolicyResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/policy", None, request.headers, None, runtime))


    def set_stack_policy(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_stack_policy_with_options(stack_name, stack_id, request, runtime)

    def update_stack_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.UpdateStackResponse().from_map(self.do_request("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "", None, request.headers, None, runtime))


    def update_stack(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_stack_with_options(stack_name, stack_id, request, runtime)

    def wait_conditions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.WaitConditionsResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "Anonymous", "/waitcondition", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def wait_conditions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.wait_conditions_with_options(request, runtime)

    def inquiry_stack_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.InquiryStackResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/stacks/inquiry", None, request.headers, None, runtime))


    def inquiry_stack(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.inquiry_stack_with_options(request, runtime)

    def preview_stack_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.PreviewStackResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/stacks/preview", None, request.headers, None, runtime))


    def preview_stack(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.preview_stack_with_options(request, runtime)

    def do_actions_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DoActionsResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/actions", None, request.headers, None, runtime))


    def do_actions(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.do_actions_with_options(stack_name, stack_id, request, runtime)

    def describe_regions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeRegionsResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/regions", None, request.headers, None, runtime))


    def describe_regions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_regions_with_options(request, runtime)

    def describe_events_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeEventsResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/events", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_events(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_events_with_options(stack_name, stack_id, request, runtime)

    def delete_stack_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DeleteStackResponse().from_map(self.do_request("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def delete_stack(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_stack_with_options(stack_name, stack_id, request, runtime)

    def create_stacks_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.CreateStacksResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/stacks", None, request.headers, None, runtime))


    def create_stacks(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_stacks_with_options(request, runtime)

    def abandon_stack_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.AbandonStackResponse().from_map(self.do_request("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/abandon", None, request.headers, None, runtime))


    def abandon_stack(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.abandon_stack_with_options(stack_name, stack_id, request, runtime)

    def describe_resource_types_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeResourceTypesResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/resource_types", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_resource_types(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_resource_types_with_options(request, runtime)

    def describe_resource_type_detail_with_options(self, type_name, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeResourceTypeDetailResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" + str(type_name) + "", None, request.headers, None, runtime))


    def describe_resource_type_detail(self, type_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_resource_type_detail_with_options(type_name, request, runtime)

    def describe_resources_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeResourcesResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/resources", None, request.headers, None, runtime))


    def describe_resources(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_resources_with_options(stack_name, stack_id, request, runtime)

    def describe_resource_detail_with_options(self, stack_name, stack_id, resource_name, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeResourceDetailResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/resources/" + str(resource_name) + "", None, request.headers, None, runtime))


    def describe_resource_detail(self, stack_name, stack_id, resource_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_resource_detail_with_options(stack_name, stack_id, resource_name, request, runtime)

    def describe_resource_type_template_with_options(self, type_name, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeResourceTypeTemplateResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" + str(type_name) + "/template", None, request.headers, None, runtime))


    def describe_resource_type_template(self, type_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_resource_type_template_with_options(type_name, request, runtime)

    def describe_stacks_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeStacksResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_stacks(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_stacks_with_options(request, runtime)

    def describe_stack_detail_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeStackDetailResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "", None, request.headers, None, runtime))


    def describe_stack_detail(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_stack_detail_with_options(stack_name, stack_id, request, runtime)

    def validate_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.ValidateTemplateResponse().from_map(self.do_request("2015-09-01", "HTTPS", "POST", "AK", "/validate", None, request.headers, None, runtime))


    def validate_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.validate_template_with_options(request, runtime)

    def describe_template_with_options(self, stack_name, stack_id, request, runtime):
        UtilClient.validate_model(request)
        return _ros20150901_models.DescribeTemplateResponse().from_map(self.do_request("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + str(stack_name) + "/" + str(stack_id) + "/template", None, request.headers, None, runtime))


    def describe_template(self, stack_name, stack_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_template_with_options(stack_name, stack_id, request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
