# -*- coding: utf-8 -*-
# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_idrsservice20200630 import models as idrsservice_20200630_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super(Client, self).__init__(config)
        self._endpoint_rule = "regional"
        self._endpoint_map = {
            "ap-northeast-1": "idrsservice.aliyuncs.com",
            "ap-northeast-2-pop": "idrsservice.aliyuncs.com",
            "ap-south-1": "idrsservice.aliyuncs.com",
            "ap-southeast-1": "idrsservice.aliyuncs.com",
            "ap-southeast-2": "idrsservice.aliyuncs.com",
            "ap-southeast-3": "idrsservice.aliyuncs.com",
            "ap-southeast-5": "idrsservice.aliyuncs.com",
            "cn-beijing": "idrsservice.aliyuncs.com",
            "cn-beijing-finance-1": "idrsservice.aliyuncs.com",
            "cn-beijing-finance-pop": "idrsservice.aliyuncs.com",
            "cn-beijing-gov-1": "idrsservice.aliyuncs.com",
            "cn-beijing-nu16-b01": "idrsservice.aliyuncs.com",
            "cn-chengdu": "idrsservice.aliyuncs.com",
            "cn-edge-1": "idrsservice.aliyuncs.com",
            "cn-fujian": "idrsservice.aliyuncs.com",
            "cn-haidian-cm12-c01": "idrsservice.aliyuncs.com",
            "cn-hangzhou-bj-b01": "idrsservice.aliyuncs.com",
            "cn-hangzhou-finance": "idrsservice.aliyuncs.com",
            "cn-hangzhou-internal-prod-1": "idrsservice.aliyuncs.com",
            "cn-hangzhou-internal-test-1": "idrsservice.aliyuncs.com",
            "cn-hangzhou-internal-test-2": "idrsservice.aliyuncs.com",
            "cn-hangzhou-internal-test-3": "idrsservice.aliyuncs.com",
            "cn-hangzhou-test-306": "idrsservice.aliyuncs.com",
            "cn-hongkong": "idrsservice.aliyuncs.com",
            "cn-hongkong-finance-pop": "idrsservice.aliyuncs.com",
            "cn-huhehaote": "idrsservice.aliyuncs.com",
            "cn-huhehaote-nebula-1": "idrsservice.aliyuncs.com",
            "cn-north-2-gov-1": "idrsservice.aliyuncs.com",
            "cn-qingdao": "idrsservice.aliyuncs.com",
            "cn-qingdao-nebula": "idrsservice.aliyuncs.com",
            "cn-shanghai": "idrsservice.aliyuncs.com",
            "cn-shanghai-et15-b01": "idrsservice.aliyuncs.com",
            "cn-shanghai-et2-b01": "idrsservice.aliyuncs.com",
            "cn-shanghai-inner": "idrsservice.aliyuncs.com",
            "cn-shanghai-internal-test-1": "idrsservice.aliyuncs.com",
            "cn-shenzhen": "idrsservice.aliyuncs.com",
            "cn-shenzhen-finance-1": "idrsservice.aliyuncs.com",
            "cn-shenzhen-inner": "idrsservice.aliyuncs.com",
            "cn-shenzhen-st4-d01": "idrsservice.aliyuncs.com",
            "cn-shenzhen-su18-b01": "idrsservice.aliyuncs.com",
            "cn-wuhan": "idrsservice.aliyuncs.com",
            "cn-wulanchabu": "idrsservice.aliyuncs.com",
            "cn-yushanfang": "idrsservice.aliyuncs.com",
            "cn-zhangbei-na61-b01": "idrsservice.aliyuncs.com",
            "cn-zhangjiakou": "idrsservice.aliyuncs.com",
            "cn-zhangjiakou-na62-a01": "idrsservice.aliyuncs.com",
            "cn-zhengzhou-nebula-1": "idrsservice.aliyuncs.com",
            "eu-central-1": "idrsservice.aliyuncs.com",
            "eu-west-1": "idrsservice.aliyuncs.com",
            "eu-west-1-oxs": "idrsservice.aliyuncs.com",
            "me-east-1": "idrsservice.aliyuncs.com",
            "rus-west-1-pop": "idrsservice.aliyuncs.com",
            "us-east-1": "idrsservice.aliyuncs.com",
            "us-west-1": "idrsservice.aliyuncs.com"
        }
        self.check_config(config)
        self._endpoint = self.get_endpoint("idrsservice", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def list_tasks_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListTasksResponse().from_map(self.do_request("ListTasks", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_tasks(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_tasks_with_options(request, runtime)

    def delete_app_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.DeleteAppResponse().from_map(self.do_request("DeleteApp", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def delete_app(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_app_with_options(request, runtime)

    def list_apps_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListAppsResponse().from_map(self.do_request("ListApps", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_apps(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_apps_with_options(request, runtime)

    def update_app_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.UpdateAppResponse().from_map(self.do_request("UpdateApp", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def update_app(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_app_with_options(request, runtime)

    def list_task_groups_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListTaskGroupsResponse().from_map(self.do_request("ListTaskGroups", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_task_groups(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_task_groups_with_options(request, runtime)

    def list_rules_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListRulesResponse().from_map(self.do_request("ListRules", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_rules(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_rules_with_options(request, runtime)

    def list_detections_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListDetectionsResponse().from_map(self.do_request("ListDetections", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_detections(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_detections_with_options(request, runtime)

    def create_task_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateTaskGroupResponse().from_map(self.do_request("CreateTaskGroup", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_task_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_task_group_with_options(request, runtime)

    def get_task_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetTaskGroupResponse().from_map(self.do_request("GetTaskGroup", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_task_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_task_group_with_options(request, runtime)

    def get_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetRuleResponse().from_map(self.do_request("GetRule", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_rule_with_options(request, runtime)

    def get_detection_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetDetectionResponse().from_map(self.do_request("GetDetection", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_detection(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_detection_with_options(request, runtime)

    def list_task_items_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListTaskItemsResponse().from_map(self.do_request("ListTaskItems", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_task_items(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_task_items_with_options(request, runtime)

    def get_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetUserResponse().from_map(self.do_request("GetUser", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_user_with_options(request, runtime)

    def create_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateRuleResponse().from_map(self.do_request("CreateRule", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_rule_with_options(request, runtime)

    def create_user_departments_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateUserDepartmentsResponse().from_map(self.do_request("CreateUserDepartments", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_user_departments(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_user_departments_with_options(request, runtime)

    def list_roles_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListRolesResponse().from_map(self.do_request("ListRoles", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_roles(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_roles_with_options(request, runtime)

    def update_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.UpdateUserResponse().from_map(self.do_request("UpdateUser", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def update_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_user_with_options(request, runtime)

    def delete_user_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.DeleteUserResponse().from_map(self.do_request("DeleteUser", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def delete_user(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_user_with_options(request, runtime)

    def create_department_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateDepartmentResponse().from_map(self.do_request("CreateDepartment", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_department(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_department_with_options(request, runtime)

    def update_department_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.UpdateDepartmentResponse().from_map(self.do_request("UpdateDepartment", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def update_department(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_department_with_options(request, runtime)

    def join_live_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.JoinLiveResponse().from_map(self.do_request("JoinLive", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def join_live(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.join_live_with_options(request, runtime)

    def update_live_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.UpdateLiveResponse().from_map(self.do_request("UpdateLive", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def update_live(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_live_with_options(request, runtime)

    def create_live_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateLiveResponse().from_map(self.do_request("CreateLive", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_live(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_live_with_options(request, runtime)

    def list_departments_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListDepartmentsResponse().from_map(self.do_request("ListDepartments", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_departments(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_departments_with_options(request, runtime)

    def update_service_configuration_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.UpdateServiceConfigurationResponse().from_map(self.do_request("UpdateServiceConfiguration", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def update_service_configuration(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_service_configuration_with_options(request, runtime)

    def create_app_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateAppResponse().from_map(self.do_request("CreateApp", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_app(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_app_with_options(request, runtime)

    def create_live_detection_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateLiveDetectionResponse().from_map(self.do_request("CreateLiveDetection", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_live_detection(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_live_detection_with_options(request, runtime)

    def delete_department_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.DeleteDepartmentResponse().from_map(self.do_request("DeleteDepartment", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def delete_department(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_department_with_options(request, runtime)

    def list_files_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListFilesResponse().from_map(self.do_request("ListFiles", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_files(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_files_with_options(request, runtime)

    def get_department_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetDepartmentResponse().from_map(self.do_request("GetDepartment", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_department(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_department_with_options(request, runtime)

    def delete_user_departments_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.DeleteUserDepartmentsResponse().from_map(self.do_request("DeleteUserDepartments", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def delete_user_departments(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_user_departments_with_options(request, runtime)

    def get_pre_signed_url_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetPreSignedUrlResponse().from_map(self.do_request("GetPreSignedUrl", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_pre_signed_url(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_pre_signed_url_with_options(request, runtime)

    def delete_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.DeleteRuleResponse().from_map(self.do_request("DeleteRule", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def delete_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_rule_with_options(request, runtime)

    def update_rule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.UpdateRuleResponse().from_map(self.do_request("UpdateRule", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def update_rule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_rule_with_options(request, runtime)

    def list_statistics_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListStatisticsTaskResponse().from_map(self.do_request("ListStatisticsTask", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_statistics_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_statistics_task_with_options(request, runtime)

    def list_lives_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListLivesResponse().from_map(self.do_request("ListLives", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_lives(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_lives_with_options(request, runtime)

    def exit_live_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ExitLiveResponse().from_map(self.do_request("ExitLive", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def exit_live(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.exit_live_with_options(request, runtime)

    def get_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetTaskResponse().from_map(self.do_request("GetTask", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_task_with_options(request, runtime)

    def get_statistics_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetStatisticsResponse().from_map(self.do_request("GetStatistics", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_statistics(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_statistics_with_options(request, runtime)

    def get_service_configuration_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetServiceConfigurationResponse().from_map(self.do_request("GetServiceConfiguration", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_service_configuration(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_service_configuration_with_options(request, runtime)

    def get_app_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.GetAppResponse().from_map(self.do_request("GetApp", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def get_app(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_app_with_options(request, runtime)

    def create_statistics_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateStatisticsRecordResponse().from_map(self.do_request("CreateStatisticsRecord", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_statistics_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_statistics_record_with_options(request, runtime)

    def list_users_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.ListUsersResponse().from_map(self.do_request("ListUsers", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def list_users(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_users_with_options(request, runtime)

    def create_statistics_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return idrsservice_20200630_models.CreateStatisticsTaskResponse().from_map(self.do_request("CreateStatisticsTask", "HTTPS", "POST", "2020-06-30", "AK", None, request.to_map(), runtime))


    def create_statistics_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_statistics_task_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
