# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_pts20190810 import models as _pts20190810_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "central"
        self.check_config(config)
        self._endpoint = self.get_endpoint("pts", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def describe_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeConfigResponse().from_map(self.do_request("DescribeConfig", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def describe_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_config_with_options(request, runtime)

    def submit_testing_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.SubmitTestingResponse().from_map(self.do_request("SubmitTesting", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def submit_testing(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_testing_with_options(request, runtime)

    def submit_progress_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.SubmitProgressResponse().from_map(self.do_request("SubmitProgress", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def submit_progress(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_progress_with_options(request, runtime)

    def list_sla_warnings_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ListSlaWarningsResponse().from_map(self.do_request("ListSlaWarnings", "HTTPS", "POST", "2019-08-10", "AK,APP,BearerToken,PrivateKey", None, request.to_map(), runtime))


    def list_sla_warnings(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_sla_warnings_with_options(request, runtime)

    def list_sla_snapshot_summary_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ListSlaSnapshotSummaryResponse().from_map(self.do_request("ListSlaSnapshotSummary", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def list_sla_snapshot_summary(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_sla_snapshot_summary_with_options(request, runtime)

    def execute_scene_function_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ExecuteSceneFunctionResponse().from_map(self.do_request("ExecuteSceneFunction", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def execute_scene_function(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.execute_scene_function_with_options(request, runtime)

    def describe_intranet_resource_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeIntranetResourceResponse().from_map(self.do_request("DescribeIntranetResource", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_intranet_resource(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_intranet_resource_with_options(request, runtime)

    def upload_file_from_osswith_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.UploadFileFromOSSResponse().from_map(self.do_request("UploadFileFromOSS", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def upload_file_from_oss(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.upload_file_from_osswith_options(request, runtime)

    def list_sla_snapshot_real_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ListSlaSnapshotRealResponse().from_map(self.do_request("ListSlaSnapshotReal", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def list_sla_snapshot_real(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_sla_snapshot_real_with_options(request, runtime)

    def stop_scene_testing_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.StopSceneTestingResponse().from_map(self.do_request("StopSceneTesting", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def stop_scene_testing(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_scene_testing_with_options(request, runtime)

    def describe_sla_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeSlaTemplateResponse().from_map(self.do_request("DescribeSlaTemplate", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_sla_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_sla_template_with_options(request, runtime)

    def start_scene_testing_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.StartSceneTestingResponse().from_map(self.do_request("StartSceneTesting", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def start_scene_testing(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.start_scene_testing_with_options(request, runtime)

    def save_scene_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.SaveSceneResponse().from_map(self.do_request("SaveScene", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def save_scene(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.save_scene_with_options(request, runtime)

    def create_scene_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.CreateSceneResponse().from_map(self.do_request("CreateScene", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def create_scene(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_scene_with_options(request, runtime)

    def change_pressure_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ChangePressureResponse().from_map(self.do_request("ChangePressure", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def change_pressure(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.change_pressure_with_options(request, runtime)

    def list_engines_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ListEnginesResponse().from_map(self.do_request("ListEngines", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def list_engines(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_engines_with_options(request, runtime)

    def describe_real_time_log_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeRealTimeLogResponse().from_map(self.do_request("DescribeRealTimeLog", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def describe_real_time_log(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_real_time_log_with_options(request, runtime)

    def describe_structure_monitor_auth_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeStructureMonitorAuthResponse().from_map(self.do_request("DescribeStructureMonitorAuth", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", request.to_map(), None, runtime))


    def describe_structure_monitor_auth(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_structure_monitor_auth_with_options(request, runtime)

    def describe_jmeter_sample_summary_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterSampleSummaryResponse().from_map(self.do_request("DescribeJMeterSampleSummary", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def describe_jmeter_sample_summary(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_sample_summary_with_options(request, runtime)

    def clone_jmeter_scene_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.CloneJMeterSceneResponse().from_map(self.do_request("CloneJMeterScene", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def clone_jmeter_scene(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.clone_jmeter_scene_with_options(request, runtime)

    def adjust_jmeter_speed_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.AdjustJMeterSpeedResponse().from_map(self.do_request("AdjustJMeterSpeed", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def adjust_jmeter_speed(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.adjust_jmeter_speed_with_options(request, runtime)

    def describe_jmeter_sampling_logs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterSamplingLogsResponse().from_map(self.do_request("DescribeJMeterSamplingLogs", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def describe_jmeter_sampling_logs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_sampling_logs_with_options(request, runtime)

    def describe_agent_net_traffic_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeAgentNetTrafficResponse().from_map(self.do_request("DescribeAgentNetTraffic", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_agent_net_traffic(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_agent_net_traffic_with_options(request, runtime)

    def describe_agent_cpu_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeAgentCpuInfoResponse().from_map(self.do_request("DescribeAgentCpuInfo", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey", None, request.to_map(), runtime))


    def describe_agent_cpu_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_agent_cpu_info_with_options(request, runtime)

    def describe_agent_gcinfo_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeAgentGCInfoResponse().from_map(self.do_request("DescribeAgentGCInfo", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_agent_gcinfo(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_agent_gcinfo_with_options(request, runtime)

    def describe_agent_memory_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeAgentMemoryInfoResponse().from_map(self.do_request("DescribeAgentMemoryInfo", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def describe_agent_memory_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_agent_memory_info_with_options(request, runtime)

    def describe_agent_load_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeAgentLoadInfoResponse().from_map(self.do_request("DescribeAgentLoadInfo", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def describe_agent_load_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_agent_load_info_with_options(request, runtime)

    def describe_jmeter_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterPlanResponse().from_map(self.do_request("DescribeJMeterPlan", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_jmeter_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_plan_with_options(request, runtime)

    def describe_jmeter_scene_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterSceneResponse().from_map(self.do_request("DescribeJMeterScene", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_jmeter_scene(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_scene_with_options(request, runtime)

    def describe_jmeter_scene_running_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterSceneRunningStatusResponse().from_map(self.do_request("DescribeJMeterSceneRunningStatus", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_jmeter_scene_running_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_scene_running_status_with_options(request, runtime)

    def describe_jmeter_task_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterTaskListResponse().from_map(self.do_request("DescribeJMeterTaskList", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_jmeter_task_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_task_list_with_options(request, runtime)

    def describe_jmeter_logs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterLogsResponse().from_map(self.do_request("DescribeJMeterLogs", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_jmeter_logs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_logs_with_options(request, runtime)

    def stop_jmeter_testing_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.StopJMeterTestingResponse().from_map(self.do_request("StopJMeterTesting", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def stop_jmeter_testing(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_jmeter_testing_with_options(request, runtime)

    def describe_sample_metric_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeSampleMetricResponse().from_map(self.do_request("DescribeSampleMetric", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_sample_metric(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_sample_metric_with_options(request, runtime)

    def describe_jmeter_chain_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeJMeterChainDetailResponse().from_map(self.do_request("DescribeJMeterChainDetail", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_jmeter_chain_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_jmeter_chain_detail_with_options(request, runtime)

    def start_jmeter_testing_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.StartJMeterTestingResponse().from_map(self.do_request("StartJMeterTesting", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def start_jmeter_testing(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.start_jmeter_testing_with_options(request, runtime)

    def remove_instance_from_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.RemoveInstanceFromGroupResponse().from_map(self.do_request("RemoveInstanceFromGroup", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def remove_instance_from_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_instance_from_group_with_options(request, runtime)

    def replace_oss_file_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ReplaceOssFileResponse().from_map(self.do_request("ReplaceOssFile", "HTTPS", "POST", "2019-08-10", "AK", None, request.to_map(), runtime))


    def replace_oss_file(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.replace_oss_file_with_options(request, runtime)

    def start_testing_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.StartTestingResponse().from_map(self.do_request("StartTesting", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", request.to_map(), None, runtime))


    def start_testing(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.start_testing_with_options(request, runtime)

    def stop_testing_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.StopTestingResponse().from_map(self.do_request("StopTesting", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", request.to_map(), None, runtime))


    def stop_testing(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_testing_with_options(request, runtime)

    def list_reports_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ListReportsResponse().from_map(self.do_request("ListReports", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def list_reports(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_reports_with_options(request, runtime)

    def describe_report_chain_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeReportChainDetailResponse().from_map(self.do_request("DescribeReportChainDetail", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_report_chain_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_report_chain_detail_with_options(request, runtime)

    def describe_report_chain_summary_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeReportChainSummaryResponse().from_map(self.do_request("DescribeReportChainSummary", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_report_chain_summary(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_report_chain_summary_with_options(request, runtime)

    def remove_scenes_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.RemoveScenesResponse().from_map(self.do_request("RemoveScenes", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", request.to_map(), None, runtime))


    def remove_scenes(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_scenes_with_options(request, runtime)

    def describe_report_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeReportResponse().from_map(self.do_request("DescribeReport", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_report(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_report_with_options(request, runtime)

    def list_scenes_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.ListScenesResponse().from_map(self.do_request("ListScenes", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def list_scenes(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_scenes_with_options(request, runtime)

    def describe_scene_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeSceneResponse().from_map(self.do_request("DescribeScene", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_scene(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_scene_with_options(request, runtime)

    def describe_scene_running_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeSceneRunningStatusResponse().from_map(self.do_request("DescribeSceneRunningStatus", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_scene_running_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_scene_running_status_with_options(request, runtime)

    def adjust_scene_speed_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.AdjustSceneSpeedResponse().from_map(self.do_request("AdjustSceneSpeed", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def adjust_scene_speed(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.adjust_scene_speed_with_options(request, runtime)

    def adjust_relation_speed_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.AdjustRelationSpeedResponse().from_map(self.do_request("AdjustRelationSpeed", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def adjust_relation_speed(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.adjust_relation_speed_with_options(request, runtime)

    def describe_sampling_log_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return _pts20190810_models.DescribeSamplingLogResponse().from_map(self.do_request("DescribeSamplingLog", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", None, request.to_map(), runtime))


    def describe_sampling_log(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_sampling_log_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
