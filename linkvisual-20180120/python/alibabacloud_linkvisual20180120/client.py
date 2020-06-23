# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_linkvisual20180120 import models as linkvisual_20180120_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self._endpoint_map = {
            "ap-northeast-1": "linkvisual.aliyuncs.com",
            "ap-northeast-2-pop": "linkvisual.aliyuncs.com",
            "ap-south-1": "linkvisual.aliyuncs.com",
            "ap-southeast-1": "linkvisual.aliyuncs.com",
            "ap-southeast-2": "linkvisual.aliyuncs.com",
            "ap-southeast-3": "linkvisual.aliyuncs.com",
            "ap-southeast-5": "linkvisual.aliyuncs.com",
            "cn-beijing": "linkvisual.aliyuncs.com",
            "cn-beijing-finance-1": "linkvisual.aliyuncs.com",
            "cn-beijing-finance-pop": "linkvisual.aliyuncs.com",
            "cn-beijing-gov-1": "linkvisual.aliyuncs.com",
            "cn-beijing-nu16-b01": "linkvisual.aliyuncs.com",
            "cn-chengdu": "linkvisual.aliyuncs.com",
            "cn-edge-1": "linkvisual.aliyuncs.com",
            "cn-fujian": "linkvisual.aliyuncs.com",
            "cn-haidian-cm12-c01": "linkvisual.aliyuncs.com",
            "cn-hangzhou-bj-b01": "linkvisual.aliyuncs.com",
            "cn-hangzhou-finance": "linkvisual.aliyuncs.com",
            "cn-hangzhou-internal-prod-1": "linkvisual.aliyuncs.com",
            "cn-hangzhou-internal-test-1": "linkvisual.aliyuncs.com",
            "cn-hangzhou-internal-test-2": "linkvisual.aliyuncs.com",
            "cn-hangzhou-internal-test-3": "linkvisual.aliyuncs.com",
            "cn-hangzhou-test-306": "linkvisual.aliyuncs.com",
            "cn-hongkong": "linkvisual.aliyuncs.com",
            "cn-hongkong-finance-pop": "linkvisual.aliyuncs.com",
            "cn-huhehaote": "linkvisual.aliyuncs.com",
            "cn-north-2-gov-1": "linkvisual.aliyuncs.com",
            "cn-qingdao": "linkvisual.aliyuncs.com",
            "cn-qingdao-nebula": "linkvisual.aliyuncs.com",
            "cn-shanghai-et15-b01": "linkvisual.aliyuncs.com",
            "cn-shanghai-et2-b01": "linkvisual.aliyuncs.com",
            "cn-shanghai-finance-1": "linkvisual.aliyuncs.com",
            "cn-shanghai-inner": "linkvisual.aliyuncs.com",
            "cn-shanghai-internal-test-1": "linkvisual.aliyuncs.com",
            "cn-shenzhen": "linkvisual.aliyuncs.com",
            "cn-shenzhen-finance-1": "linkvisual.aliyuncs.com",
            "cn-shenzhen-inner": "linkvisual.aliyuncs.com",
            "cn-shenzhen-st4-d01": "linkvisual.aliyuncs.com",
            "cn-shenzhen-su18-b01": "linkvisual.aliyuncs.com",
            "cn-wuhan": "linkvisual.aliyuncs.com",
            "cn-yushanfang": "linkvisual.aliyuncs.com",
            "cn-zhangbei-na61-b01": "linkvisual.aliyuncs.com",
            "cn-zhangjiakou": "linkvisual.aliyuncs.com",
            "cn-zhangjiakou-na62-a01": "linkvisual.aliyuncs.com",
            "cn-zhengzhou-nebula-1": "linkvisual.aliyuncs.com",
            "eu-central-1": "linkvisual.aliyuncs.com",
            "eu-west-1": "linkvisual.aliyuncs.com",
            "eu-west-1-oxs": "linkvisual.aliyuncs.com",
            "me-east-1": "linkvisual.aliyuncs.com",
            "rus-west-1-pop": "linkvisual.aliyuncs.com",
            "us-east-1": "linkvisual.aliyuncs.com",
            "us-west-1": "linkvisual.aliyuncs.com"
        }
        self.check_config(config)
        self._endpoint = self.get_endpoint("linkvisual", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def create_device_purify_job_by_plan_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.CreateDevicePurifyJobByPlanIdResponse().from_map(self.do_request("CreateDevicePurifyJobByPlanId", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def create_device_purify_job_by_plan_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_device_purify_job_by_plan_id_with_options(request, runtime)

    def remove_device_purify_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.RemoveDevicePurifyPlanResponse().from_map(self.do_request("RemoveDevicePurifyPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def remove_device_purify_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_device_purify_plan_with_options(request, runtime)

    def update_device_purify_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.UpdateDevicePurifyPlanResponse().from_map(self.do_request("UpdateDevicePurifyPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def update_device_purify_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_device_purify_plan_with_options(request, runtime)

    def create_device_purify_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.CreateDevicePurifyPlanResponse().from_map(self.do_request("CreateDevicePurifyPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def create_device_purify_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_device_purify_plan_with_options(request, runtime)

    def query_device_purify_plan_by_plan_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDevicePurifyPlanByPlanIdResponse().from_map(self.do_request("QueryDevicePurifyPlanByPlanId", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_purify_plan_by_plan_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_purify_plan_by_plan_id_with_options(request, runtime)

    def create_device_purify_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.CreateDevicePurifyJobResponse().from_map(self.do_request("CreateDevicePurifyJob", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def create_device_purify_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_device_purify_job_with_options(request, runtime)

    def get_device_purify_job_by_job_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.GetDevicePurifyJobByJobIdResponse().from_map(self.do_request("GetDevicePurifyJobByJobId", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def get_device_purify_job_by_job_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_device_purify_job_by_job_id_with_options(request, runtime)

    def query_device_purify_jobs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDevicePurifyJobsResponse().from_map(self.do_request("QueryDevicePurifyJobs", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_purify_jobs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_purify_jobs_with_options(request, runtime)

    def query_device_purify_plans_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDevicePurifyPlansResponse().from_map(self.do_request("QueryDevicePurifyPlans", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_purify_plans(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_purify_plans_with_options(request, runtime)

    def stop_triggered_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.StopTriggeredRecordResponse().from_map(self.do_request("StopTriggeredRecord", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def stop_triggered_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_triggered_record_with_options(request, runtime)

    def query_record_by_record_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryRecordByRecordIdResponse().from_map(self.do_request("QueryRecordByRecordId", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_record_by_record_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_record_by_record_id_with_options(request, runtime)

    def query_device_vod_url_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDeviceVodUrlResponse().from_map(self.do_request("QueryDeviceVodUrl", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_vod_url(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_vod_url_with_options(request, runtime)

    def query_time_template_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryTimeTemplateDetailResponse().from_map(self.do_request("QueryTimeTemplateDetail", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_time_template_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_time_template_detail_with_options(request, runtime)

    def update_time_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.UpdateTimeTemplateResponse().from_map(self.do_request("UpdateTimeTemplate", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def update_time_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_time_template_with_options(request, runtime)

    def create_time_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.CreateTimeTemplateResponse().from_map(self.do_request("CreateTimeTemplate", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def create_time_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_time_template_with_options(request, runtime)

    def stop_live_streaming_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.StopLiveStreamingResponse().from_map(self.do_request("StopLiveStreaming", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def stop_live_streaming(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_live_streaming_with_options(request, runtime)

    def set_device_picture_life_cycle_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.SetDevicePictureLifeCycleResponse().from_map(self.do_request("SetDevicePictureLifeCycle", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def set_device_picture_life_cycle(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_device_picture_life_cycle_with_options(request, runtime)

    def query_device_record_life_cycle_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDeviceRecordLifeCycleResponse().from_map(self.do_request("QueryDeviceRecordLifeCycle", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_record_life_cycle(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_record_life_cycle_with_options(request, runtime)

    def set_device_record_life_cycle_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.SetDeviceRecordLifeCycleResponse().from_map(self.do_request("SetDeviceRecordLifeCycle", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def set_device_record_life_cycle(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_device_record_life_cycle_with_options(request, runtime)

    def query_live_streaming_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryLiveStreamingResponse().from_map(self.do_request("QueryLiveStreaming", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_live_streaming(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_live_streaming_with_options(request, runtime)

    def query_device_picture_life_cycle_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDevicePictureLifeCycleResponse().from_map(self.do_request("QueryDevicePictureLifeCycle", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_picture_life_cycle(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_picture_life_cycle_with_options(request, runtime)

    def query_time_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryTimeTemplateResponse().from_map(self.do_request("QueryTimeTemplate", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_time_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_time_template_with_options(request, runtime)

    def delete_time_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.DeleteTimeTemplateResponse().from_map(self.do_request("DeleteTimeTemplate", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def delete_time_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_time_template_with_options(request, runtime)

    def create_record_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.CreateRecordPlanResponse().from_map(self.do_request("CreateRecordPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def create_record_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_record_plan_with_options(request, runtime)

    def update_record_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.UpdateRecordPlanResponse().from_map(self.do_request("UpdateRecordPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def update_record_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_record_plan_with_options(request, runtime)

    def query_record_plans_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryRecordPlansResponse().from_map(self.do_request("QueryRecordPlans", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_record_plans(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_record_plans_with_options(request, runtime)

    def query_record_plan_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryRecordPlanDetailResponse().from_map(self.do_request("QueryRecordPlanDetail", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_record_plan_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_record_plan_detail_with_options(request, runtime)

    def delete_record_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.DeleteRecordPlanResponse().from_map(self.do_request("DeleteRecordPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def delete_record_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_record_plan_with_options(request, runtime)

    def add_record_plan_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.AddRecordPlanDeviceResponse().from_map(self.do_request("AddRecordPlanDevice", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def add_record_plan_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_record_plan_device_with_options(request, runtime)

    def delete_record_plan_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.DeleteRecordPlanDeviceResponse().from_map(self.do_request("DeleteRecordPlanDevice", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def delete_record_plan_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_record_plan_device_with_options(request, runtime)

    def query_record_plan_device_by_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryRecordPlanDeviceByPlanResponse().from_map(self.do_request("QueryRecordPlanDeviceByPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_record_plan_device_by_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_record_plan_device_by_plan_with_options(request, runtime)

    def query_event_record_plans_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryEventRecordPlansResponse().from_map(self.do_request("QueryEventRecordPlans", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_event_record_plans(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_event_record_plans_with_options(request, runtime)

    def delete_event_record_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.DeleteEventRecordPlanResponse().from_map(self.do_request("DeleteEventRecordPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def delete_event_record_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_event_record_plan_with_options(request, runtime)

    def query_event_record_plan_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryEventRecordPlanDetailResponse().from_map(self.do_request("QueryEventRecordPlanDetail", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_event_record_plan_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_event_record_plan_detail_with_options(request, runtime)

    def add_event_record_plan_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.AddEventRecordPlanDeviceResponse().from_map(self.do_request("AddEventRecordPlanDevice", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def add_event_record_plan_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_event_record_plan_device_with_options(request, runtime)

    def delete_event_record_plan_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.DeleteEventRecordPlanDeviceResponse().from_map(self.do_request("DeleteEventRecordPlanDevice", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def delete_event_record_plan_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_event_record_plan_device_with_options(request, runtime)

    def query_event_record_plan_device_by_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryEventRecordPlanDeviceByDeviceResponse().from_map(self.do_request("QueryEventRecordPlanDeviceByDevice", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_event_record_plan_device_by_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_event_record_plan_device_by_device_with_options(request, runtime)

    def trigger_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.TriggerRecordResponse().from_map(self.do_request("TriggerRecord", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def trigger_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.trigger_record_with_options(request, runtime)

    def query_device_event_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDeviceEventResponse().from_map(self.do_request("QueryDeviceEvent", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_event(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_event_with_options(request, runtime)

    def query_device_event_picture_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDeviceEventPictureResponse().from_map(self.do_request("QueryDeviceEventPicture", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_event_picture(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_event_picture_with_options(request, runtime)

    def query_device_picture_file_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDevicePictureFileResponse().from_map(self.do_request("QueryDevicePictureFile", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_picture_file(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_picture_file_with_options(request, runtime)

    def query_month_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryMonthRecordResponse().from_map(self.do_request("QueryMonthRecord", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_month_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_month_record_with_options(request, runtime)

    def query_record_plan_device_by_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryRecordPlanDeviceByDeviceResponse().from_map(self.do_request("QueryRecordPlanDeviceByDevice", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_record_plan_device_by_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_record_plan_device_by_device_with_options(request, runtime)

    def update_event_record_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.UpdateEventRecordPlanResponse().from_map(self.do_request("UpdateEventRecordPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def update_event_record_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_event_record_plan_with_options(request, runtime)

    def query_event_record_plan_device_by_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryEventRecordPlanDeviceByPlanResponse().from_map(self.do_request("QueryEventRecordPlanDeviceByPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_event_record_plan_device_by_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_event_record_plan_device_by_plan_with_options(request, runtime)

    def trigger_capture_picture_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.TriggerCapturePictureResponse().from_map(self.do_request("TriggerCapturePicture", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def trigger_capture_picture(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.trigger_capture_picture_with_options(request, runtime)

    def query_device_event_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDeviceEventRecordResponse().from_map(self.do_request("QueryDeviceEventRecord", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_event_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_event_record_with_options(request, runtime)

    def query_picture_files_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryPictureFilesResponse().from_map(self.do_request("QueryPictureFiles", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_picture_files(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_picture_files_with_options(request, runtime)

    def query_record_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryRecordResponse().from_map(self.do_request("QueryRecord", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_record(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_record_with_options(request, runtime)

    def query_record_url_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryRecordUrlResponse().from_map(self.do_request("QueryRecordUrl", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_record_url(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_record_url_with_options(request, runtime)

    def query_device_file_vod_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.QueryDeviceFileVodResponse().from_map(self.do_request("QueryDeviceFileVod", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def query_device_file_vod(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_device_file_vod_with_options(request, runtime)

    def create_event_record_plan_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return linkvisual_20180120_models.CreateEventRecordPlanResponse().from_map(self.do_request("CreateEventRecordPlan", "HTTPS", "POST", "2018-01-20", "AK", None, request.to_map(), runtime))


    def create_event_record_plan(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_event_record_plan_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
