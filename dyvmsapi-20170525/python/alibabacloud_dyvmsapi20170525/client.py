# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_dyvmsapi20170525 import models as dyvmsapi_20170525_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "central"
        self.check_config(config)
        self._endpoint = self.get_endpoint("dyvmsapi", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def list_robot_task_calls_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.ListRobotTaskCallsResponse().from_map(self.do_request("ListRobotTaskCalls", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def list_robot_task_calls(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_robot_task_calls_with_options(request, runtime)

    def do_rtc_number_auth_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.DoRtcNumberAuthResponse().from_map(self.do_request("DoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def do_rtc_number_auth(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.do_rtc_number_auth_with_options(request, runtime)

    def undo_rtc_number_auth_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.UndoRtcNumberAuthResponse().from_map(self.do_request("UndoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def undo_rtc_number_auth(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.undo_rtc_number_auth_with_options(request, runtime)

    def query_rtc_number_auth_status_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryRtcNumberAuthStatusResponse().from_map(self.do_request("QueryRtcNumberAuthStatus", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_rtc_number_auth_status(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_rtc_number_auth_status_with_options(request, runtime)

    def list_ordered_numbers_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.ListOrderedNumbersResponse().from_map(self.do_request("ListOrderedNumbers", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def list_ordered_numbers(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_ordered_numbers_with_options(request, runtime)

    def start_micro_outbound_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.StartMicroOutboundResponse().from_map(self.do_request("StartMicroOutbound", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def start_micro_outbound(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.start_micro_outbound_with_options(request, runtime)

    def list_outbound_strategies_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.ListOutboundStrategiesResponse().from_map(self.do_request("ListOutboundStrategies", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def list_outbound_strategies(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_outbound_strategies_with_options(request, runtime)

    def describe_record_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.DescribeRecordDataResponse().from_map(self.do_request("DescribeRecordData", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def describe_record_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_record_data_with_options(request, runtime)

    def query_voip_number_bind_infos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryVoipNumberBindInfosResponse().from_map(self.do_request("QueryVoipNumberBindInfos", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_voip_number_bind_infos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_voip_number_bind_infos_with_options(request, runtime)

    def report_voip_problems_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.ReportVoipProblemsResponse().from_map(self.do_request("ReportVoipProblems", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def report_voip_problems(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.report_voip_problems_with_options(request, runtime)

    def unbind_number_and_voip_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.UnbindNumberAndVoipIdResponse().from_map(self.do_request("UnbindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def unbind_number_and_voip_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.unbind_number_and_voip_id_with_options(request, runtime)

    def bind_number_and_voip_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.BindNumberAndVoipIdResponse().from_map(self.do_request("BindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def bind_number_and_voip_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.bind_number_and_voip_id_with_options(request, runtime)

    def cancel_robot_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.CancelRobotTaskResponse().from_map(self.do_request("CancelRobotTask", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def cancel_robot_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_robot_task_with_options(request, runtime)

    def upload_robot_task_called_file_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.UploadRobotTaskCalledFileResponse().from_map(self.do_request("UploadRobotTaskCalledFile", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def upload_robot_task_called_file(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.upload_robot_task_called_file_with_options(request, runtime)

    def delete_robot_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.DeleteRobotTaskResponse().from_map(self.do_request("DeleteRobotTask", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def delete_robot_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_robot_task_with_options(request, runtime)

    def stop_robot_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.StopRobotTaskResponse().from_map(self.do_request("StopRobotTask", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def stop_robot_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_robot_task_with_options(request, runtime)

    def query_robot_task_call_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryRobotTaskCallDetailResponse().from_map(self.do_request("QueryRobotTaskCallDetail", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_robot_task_call_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_robot_task_call_detail_with_options(request, runtime)

    def query_robotv_2all_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryRobotv2AllListResponse().from_map(self.do_request("QueryRobotv2AllList", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_robotv_2all_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_robotv_2all_list_with_options(request, runtime)

    def query_robot_task_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryRobotTaskDetailResponse().from_map(self.do_request("QueryRobotTaskDetail", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_robot_task_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_robot_task_detail_with_options(request, runtime)

    def query_robot_task_call_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryRobotTaskCallListResponse().from_map(self.do_request("QueryRobotTaskCallList", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_robot_task_call_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_robot_task_call_list_with_options(request, runtime)

    def start_robot_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.StartRobotTaskResponse().from_map(self.do_request("StartRobotTask", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def start_robot_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.start_robot_task_with_options(request, runtime)

    def query_robot_task_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryRobotTaskListResponse().from_map(self.do_request("QueryRobotTaskList", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_robot_task_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_robot_task_list_with_options(request, runtime)

    def create_robot_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.CreateRobotTaskResponse().from_map(self.do_request("CreateRobotTask", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def create_robot_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_robot_task_with_options(request, runtime)

    def cancel_order_robot_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.CancelOrderRobotTaskResponse().from_map(self.do_request("CancelOrderRobotTask", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def cancel_order_robot_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_order_robot_task_with_options(request, runtime)

    def smart_call_operate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.SmartCallOperateResponse().from_map(self.do_request("SmartCallOperate", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def smart_call_operate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.smart_call_operate_with_options(request, runtime)

    def query_robot_info_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryRobotInfoListResponse().from_map(self.do_request("QueryRobotInfoList", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_robot_info_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_robot_info_list_with_options(request, runtime)

    def batch_robot_smart_call_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.BatchRobotSmartCallResponse().from_map(self.do_request("BatchRobotSmartCall", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def batch_robot_smart_call(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.batch_robot_smart_call_with_options(request, runtime)

    def query_call_detail_by_task_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryCallDetailByTaskIdResponse().from_map(self.do_request("QueryCallDetailByTaskId", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_call_detail_by_task_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_call_detail_by_task_id_with_options(request, runtime)

    def get_rtc_token_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.GetRtcTokenResponse().from_map(self.do_request("GetRtcToken", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def get_rtc_token(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_rtc_token_with_options(request, runtime)

    def add_rtc_account_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.AddRtcAccountResponse().from_map(self.do_request("AddRtcAccount", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def add_rtc_account(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_rtc_account_with_options(request, runtime)

    def voip_add_account_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.VoipAddAccountResponse().from_map(self.do_request("VoipAddAccount", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def voip_add_account(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.voip_add_account_with_options(request, runtime)

    def voip_get_token_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.VoipGetTokenResponse().from_map(self.do_request("VoipGetToken", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def voip_get_token(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.voip_get_token_with_options(request, runtime)

    def smart_call_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.SmartCallResponse().from_map(self.do_request("SmartCall", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def smart_call(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.smart_call_with_options(request, runtime)

    def query_call_detail_by_call_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.QueryCallDetailByCallIdResponse().from_map(self.do_request("QueryCallDetailByCallId", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_call_detail_by_call_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_call_detail_by_call_id_with_options(request, runtime)

    def cancel_call_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.CancelCallResponse().from_map(self.do_request("CancelCall", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def cancel_call(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_call_with_options(request, runtime)

    def click_to_dial_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.ClickToDialResponse().from_map(self.do_request("ClickToDial", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def click_to_dial(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.click_to_dial_with_options(request, runtime)

    def ivr_call_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.IvrCallResponse().from_map(self.do_request("IvrCall", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def ivr_call(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.ivr_call_with_options(request, runtime)

    def single_call_by_voice_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.SingleCallByVoiceResponse().from_map(self.do_request("SingleCallByVoice", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def single_call_by_voice(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.single_call_by_voice_with_options(request, runtime)

    def single_call_by_tts_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dyvmsapi_20170525_models.SingleCallByTtsResponse().from_map(self.do_request("SingleCallByTts", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def single_call_by_tts(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.single_call_by_tts_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
