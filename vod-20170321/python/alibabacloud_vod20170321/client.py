# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_vod20170321 import models as vod_20170321_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self._endpoint_map = {
            "cn-beijing": "vod.cn-shanghai.aliyuncs.com",
            "cn-hangzhou": "vod.cn-shanghai.aliyuncs.com",
            "cn-shenzhen": "vod.cn-shanghai.aliyuncs.com",
            "ap-northeast-2-pop": "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-2": "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3": "vod.ap-northeast-1.aliyuncs.com",
            "cn-beijing-finance-1": "vod.aliyuncs.com",
            "cn-beijing-finance-pop": "vod.aliyuncs.com",
            "cn-beijing-gov-1": "vod.aliyuncs.com",
            "cn-beijing-nu16-b01": "vod.aliyuncs.com",
            "cn-chengdu": "vod.aliyuncs.com",
            "cn-edge-1": "vod.aliyuncs.com",
            "cn-fujian": "vod.aliyuncs.com",
            "cn-haidian-cm12-c01": "vod.aliyuncs.com",
            "cn-hangzhou-bj-b01": "vod.aliyuncs.com",
            "cn-hangzhou-finance": "vod.aliyuncs.com",
            "cn-hangzhou-internal-prod-1": "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-1": "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-2": "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-3": "vod.aliyuncs.com",
            "cn-hangzhou-test-306": "vod.aliyuncs.com",
            "cn-hongkong-finance-pop": "vod.aliyuncs.com",
            "cn-huhehaote": "vod.aliyuncs.com",
            "cn-qingdao": "vod.aliyuncs.com",
            "cn-qingdao-nebula": "vod.aliyuncs.com",
            "cn-shanghai-et15-b01": "vod.aliyuncs.com",
            "cn-shanghai-et2-b01": "vod.aliyuncs.com",
            "cn-shanghai-finance-1": "vod.aliyuncs.com",
            "cn-shanghai-inner": "vod.aliyuncs.com",
            "cn-shanghai-internal-test-1": "vod.aliyuncs.com",
            "cn-shenzhen-finance-1": "vod.aliyuncs.com",
            "cn-shenzhen-inner": "vod.aliyuncs.com",
            "cn-shenzhen-st4-d01": "vod.aliyuncs.com",
            "cn-shenzhen-su18-b01": "vod.aliyuncs.com",
            "cn-wuhan": "vod.aliyuncs.com",
            "cn-yushanfang": "vod.aliyuncs.com",
            "cn-zhangbei-na61-b01": "vod.aliyuncs.com",
            "cn-zhangjiakou-na62-a01": "vod.aliyuncs.com",
            "cn-zhengzhou-nebula-1": "vod.aliyuncs.com",
            "eu-west-1-oxs": "vod.ap-northeast-1.aliyuncs.com",
            "me-east-1": "vod.ap-northeast-1.aliyuncs.com",
            "rus-west-1-pop": "vod.ap-northeast-1.aliyuncs.com",
            "us-east-1": "vod.ap-northeast-1.aliyuncs.com"
        }
        self.check_config(config)
        self._endpoint = self.get_endpoint("vod", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def submit_media_dnadelete_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitMediaDNADeleteJobResponse().from_map(self.do_request("SubmitMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_media_dnadelete_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_media_dnadelete_job_with_options(request, runtime)

    def list_media_dnadelete_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListMediaDNADeleteJobResponse().from_map(self.do_request("ListMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_media_dnadelete_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_media_dnadelete_job_with_options(request, runtime)

    def get_media_audit_audio_result_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetMediaAuditAudioResultDetailResponse().from_map(self.do_request("GetMediaAuditAudioResultDetail", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_media_audit_audio_result_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_media_audit_audio_result_detail_with_options(request, runtime)

    def submit_dynamic_image_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitDynamicImageJobResponse().from_map(self.do_request("SubmitDynamicImageJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_dynamic_image_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_dynamic_image_job_with_options(request, runtime)

    def submit_workflow_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitWorkflowJobResponse().from_map(self.do_request("SubmitWorkflowJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_workflow_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_workflow_job_with_options(request, runtime)

    def get_aivideo_tag_result_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetAIVideoTagResultResponse().from_map(self.do_request("GetAIVideoTagResult", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_aivideo_tag_result(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_aivideo_tag_result_with_options(request, runtime)

    def get_upload_details_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetUploadDetailsResponse().from_map(self.do_request("GetUploadDetails", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_upload_details(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_upload_details_with_options(request, runtime)

    def describe_vod_storage_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodStorageDataResponse().from_map(self.do_request("DescribeVodStorageData", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_storage_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_storage_data_with_options(request, runtime)

    def describe_vod_aidata_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodAIDataResponse().from_map(self.do_request("DescribeVodAIData", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_aidata(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_aidata_with_options(request, runtime)

    def describe_vod_transcode_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodTranscodeDataResponse().from_map(self.do_request("DescribeVodTranscodeData", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_transcode_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_transcode_data_with_options(request, runtime)

    def delete_multipart_upload_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteMultipartUploadResponse().from_map(self.do_request("DeleteMultipartUpload", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_multipart_upload(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_multipart_upload_with_options(request, runtime)

    def get_attached_media_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetAttachedMediaInfoResponse().from_map(self.do_request("GetAttachedMediaInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_attached_media_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_attached_media_info_with_options(request, runtime)

    def delete_attached_media_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteAttachedMediaResponse().from_map(self.do_request("DeleteAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_attached_media(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_attached_media_with_options(request, runtime)

    def update_attached_media_infos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateAttachedMediaInfosResponse().from_map(self.do_request("UpdateAttachedMediaInfos", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_attached_media_infos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_attached_media_infos_with_options(request, runtime)

    def attach_app_policy_to_identity_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AttachAppPolicyToIdentityResponse().from_map(self.do_request("AttachAppPolicyToIdentity", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def attach_app_policy_to_identity(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.attach_app_policy_to_identity_with_options(request, runtime)

    def detach_app_policy_from_identity_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DetachAppPolicyFromIdentityResponse().from_map(self.do_request("DetachAppPolicyFromIdentity", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def detach_app_policy_from_identity(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.detach_app_policy_from_identity_with_options(request, runtime)

    def list_app_policies_for_identity_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListAppPoliciesForIdentityResponse().from_map(self.do_request("ListAppPoliciesForIdentity", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_app_policies_for_identity(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_app_policies_for_identity_with_options(request, runtime)

    def create_app_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.CreateAppInfoResponse().from_map(self.do_request("CreateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def create_app_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_app_info_with_options(request, runtime)

    def get_app_infos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetAppInfosResponse().from_map(self.do_request("GetAppInfos", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_app_infos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_app_infos_with_options(request, runtime)

    def update_app_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateAppInfoResponse().from_map(self.do_request("UpdateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_app_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_app_info_with_options(request, runtime)

    def delete_app_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteAppInfoResponse().from_map(self.do_request("DeleteAppInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_app_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_app_info_with_options(request, runtime)

    def list_app_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListAppInfoResponse().from_map(self.do_request("ListAppInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_app_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_app_info_with_options(request, runtime)

    def move_app_resource_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.MoveAppResourceResponse().from_map(self.do_request("MoveAppResource", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def move_app_resource(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.move_app_resource_with_options(request, runtime)

    def delete_message_callback_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteMessageCallbackResponse().from_map(self.do_request("DeleteMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_message_callback(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_message_callback_with_options(request, runtime)

    def get_transcode_summary_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetTranscodeSummaryResponse().from_map(self.do_request("GetTranscodeSummary", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_transcode_summary(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_transcode_summary_with_options(request, runtime)

    def list_transcode_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListTranscodeTaskResponse().from_map(self.do_request("ListTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_transcode_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_transcode_task_with_options(request, runtime)

    def get_transcode_task_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetTranscodeTaskResponse().from_map(self.do_request("GetTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_transcode_task(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_transcode_task_with_options(request, runtime)

    def get_urlupload_infos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetURLUploadInfosResponse().from_map(self.do_request("GetURLUploadInfos", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_urlupload_infos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_urlupload_infos_with_options(request, runtime)

    def update_transcode_template_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateTranscodeTemplateGroupResponse().from_map(self.do_request("UpdateTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_transcode_template_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_transcode_template_group_with_options(request, runtime)

    def add_transcode_template_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AddTranscodeTemplateGroupResponse().from_map(self.do_request("AddTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def add_transcode_template_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_transcode_template_group_with_options(request, runtime)

    def delete_transcode_template_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteTranscodeTemplateGroupResponse().from_map(self.do_request("DeleteTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_transcode_template_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_transcode_template_group_with_options(request, runtime)

    def get_transcode_template_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetTranscodeTemplateGroupResponse().from_map(self.do_request("GetTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_transcode_template_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_transcode_template_group_with_options(request, runtime)

    def set_default_transcode_template_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SetDefaultTranscodeTemplateGroupResponse().from_map(self.do_request("SetDefaultTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def set_default_transcode_template_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_default_transcode_template_group_with_options(request, runtime)

    def list_transcode_template_group_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListTranscodeTemplateGroupResponse().from_map(self.do_request("ListTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_transcode_template_group(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_transcode_template_group_with_options(request, runtime)

    def get_aimedia_audit_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetAIMediaAuditJobResponse().from_map(self.do_request("GetAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_aimedia_audit_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_aimedia_audit_job_with_options(request, runtime)

    def submit_aimedia_audit_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitAIMediaAuditJobResponse().from_map(self.do_request("SubmitAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_aimedia_audit_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_aimedia_audit_job_with_options(request, runtime)

    def get_media_audit_result_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetMediaAuditResultResponse().from_map(self.do_request("GetMediaAuditResult", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_media_audit_result(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_media_audit_result_with_options(request, runtime)

    def get_media_audit_result_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetMediaAuditResultDetailResponse().from_map(self.do_request("GetMediaAuditResultDetail", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_media_audit_result_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_media_audit_result_detail_with_options(request, runtime)

    def get_media_audit_result_timeline_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetMediaAuditResultTimelineResponse().from_map(self.do_request("GetMediaAuditResultTimeline", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_media_audit_result_timeline(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_media_audit_result_timeline_with_options(request, runtime)

    def add_aitemplate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AddAITemplateResponse().from_map(self.do_request("AddAITemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def add_aitemplate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_aitemplate_with_options(request, runtime)

    def delete_aitemplate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteAITemplateResponse().from_map(self.do_request("DeleteAITemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_aitemplate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_aitemplate_with_options(request, runtime)

    def update_aitemplate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateAITemplateResponse().from_map(self.do_request("UpdateAITemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_aitemplate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_aitemplate_with_options(request, runtime)

    def get_aitemplate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetAITemplateResponse().from_map(self.do_request("GetAITemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_aitemplate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_aitemplate_with_options(request, runtime)

    def list_aitemplate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListAITemplateResponse().from_map(self.do_request("ListAITemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_aitemplate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_aitemplate_with_options(request, runtime)

    def get_default_aitemplate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetDefaultAITemplateResponse().from_map(self.do_request("GetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_default_aitemplate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_default_aitemplate_with_options(request, runtime)

    def set_default_aitemplate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SetDefaultAITemplateResponse().from_map(self.do_request("SetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def set_default_aitemplate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_default_aitemplate_with_options(request, runtime)

    def describe_vod_domain_log_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodDomainLogResponse().from_map(self.do_request("DescribeVodDomainLog", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_domain_log(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_domain_log_with_options(request, runtime)

    def describe_vod_domain_certificate_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodDomainCertificateInfoResponse().from_map(self.do_request("DescribeVodDomainCertificateInfo", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_domain_certificate_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_domain_certificate_info_with_options(request, runtime)

    def describe_vod_domain_traffic_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodDomainTrafficDataResponse().from_map(self.do_request("DescribeVodDomainTrafficData", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_domain_traffic_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_domain_traffic_data_with_options(request, runtime)

    def describe_vod_domain_bps_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodDomainBpsDataResponse().from_map(self.do_request("DescribeVodDomainBpsData", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_domain_bps_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_domain_bps_data_with_options(request, runtime)

    def describe_vod_domain_usage_data_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodDomainUsageDataResponse().from_map(self.do_request("DescribeVodDomainUsageData", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_vod_domain_usage_data(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_domain_usage_data_with_options(request, runtime)

    def describe_vod_certificate_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodCertificateListResponse().from_map(self.do_request("DescribeVodCertificateList", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def describe_vod_certificate_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_certificate_list_with_options(request, runtime)

    def batch_stop_vod_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.BatchStopVodDomainResponse().from_map(self.do_request("BatchStopVodDomain", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def batch_stop_vod_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.batch_stop_vod_domain_with_options(request, runtime)

    def delete_vod_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteVodDomainResponse().from_map(self.do_request("DeleteVodDomain", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_vod_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_vod_domain_with_options(request, runtime)

    def set_vod_domain_certificate_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SetVodDomainCertificateResponse().from_map(self.do_request("SetVodDomainCertificate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def set_vod_domain_certificate(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_vod_domain_certificate_with_options(request, runtime)

    def delete_vod_specific_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteVodSpecificConfigResponse().from_map(self.do_request("DeleteVodSpecificConfig", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_vod_specific_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_vod_specific_config_with_options(request, runtime)

    def batch_set_vod_domain_configs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.BatchSetVodDomainConfigsResponse().from_map(self.do_request("BatchSetVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def batch_set_vod_domain_configs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.batch_set_vod_domain_configs_with_options(request, runtime)

    def add_vod_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AddVodDomainResponse().from_map(self.do_request("AddVodDomain", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def add_vod_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_vod_domain_with_options(request, runtime)

    def describe_vod_refresh_quota_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodRefreshQuotaResponse().from_map(self.do_request("DescribeVodRefreshQuota", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def describe_vod_refresh_quota(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_refresh_quota_with_options(request, runtime)

    def describe_vod_refresh_tasks_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodRefreshTasksResponse().from_map(self.do_request("DescribeVodRefreshTasks", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def describe_vod_refresh_tasks(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_refresh_tasks_with_options(request, runtime)

    def describe_vod_domain_configs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodDomainConfigsResponse().from_map(self.do_request("DescribeVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def describe_vod_domain_configs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_domain_configs_with_options(request, runtime)

    def describe_vod_user_domains_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodUserDomainsResponse().from_map(self.do_request("DescribeVodUserDomains", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def describe_vod_user_domains(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_user_domains_with_options(request, runtime)

    def update_vod_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateVodDomainResponse().from_map(self.do_request("UpdateVodDomain", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_vod_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_vod_domain_with_options(request, runtime)

    def refresh_vod_object_caches_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.RefreshVodObjectCachesResponse().from_map(self.do_request("RefreshVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def refresh_vod_object_caches(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.refresh_vod_object_caches_with_options(request, runtime)

    def preload_vod_object_caches_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.PreloadVodObjectCachesResponse().from_map(self.do_request("PreloadVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def preload_vod_object_caches(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.preload_vod_object_caches_with_options(request, runtime)

    def batch_start_vod_domain_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.BatchStartVodDomainResponse().from_map(self.do_request("BatchStartVodDomain", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def batch_start_vod_domain(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.batch_start_vod_domain_with_options(request, runtime)

    def describe_vod_domain_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribeVodDomainDetailResponse().from_map(self.do_request("DescribeVodDomainDetail", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def describe_vod_domain_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_vod_domain_detail_with_options(request, runtime)

    def delete_vod_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteVodTemplateResponse().from_map(self.do_request("DeleteVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_vod_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_vod_template_with_options(request, runtime)

    def get_vod_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetVodTemplateResponse().from_map(self.do_request("GetVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_vod_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_vod_template_with_options(request, runtime)

    def list_vod_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListVodTemplateResponse().from_map(self.do_request("ListVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_vod_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_vod_template_with_options(request, runtime)

    def update_vod_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateVodTemplateResponse().from_map(self.do_request("UpdateVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_vod_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_vod_template_with_options(request, runtime)

    def add_vod_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AddVodTemplateResponse().from_map(self.do_request("AddVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def add_vod_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_vod_template_with_options(request, runtime)

    def create_upload_attached_media_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.CreateUploadAttachedMediaResponse().from_map(self.do_request("CreateUploadAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def create_upload_attached_media(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_upload_attached_media_with_options(request, runtime)

    def register_media_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.RegisterMediaResponse().from_map(self.do_request("RegisterMedia", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def register_media(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.register_media_with_options(request, runtime)

    def delete_watermark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteWatermarkResponse().from_map(self.do_request("DeleteWatermark", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_watermark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_watermark_with_options(request, runtime)

    def get_watermark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetWatermarkResponse().from_map(self.do_request("GetWatermark", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_watermark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_watermark_with_options(request, runtime)

    def set_default_watermark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SetDefaultWatermarkResponse().from_map(self.do_request("SetDefaultWatermark", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def set_default_watermark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_default_watermark_with_options(request, runtime)

    def list_watermark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListWatermarkResponse().from_map(self.do_request("ListWatermark", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_watermark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_watermark_with_options(request, runtime)

    def update_watermark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateWatermarkResponse().from_map(self.do_request("UpdateWatermark", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_watermark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_watermark_with_options(request, runtime)

    def add_watermark_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AddWatermarkResponse().from_map(self.do_request("AddWatermark", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def add_watermark(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_watermark_with_options(request, runtime)

    def get_media_dnaresult_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetMediaDNAResultResponse().from_map(self.do_request("GetMediaDNAResult", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_media_dnaresult(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_media_dnaresult_with_options(request, runtime)

    def delete_mezzanines_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteMezzaninesResponse().from_map(self.do_request("DeleteMezzanines", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_mezzanines(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_mezzanines_with_options(request, runtime)

    def update_image_infos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateImageInfosResponse().from_map(self.do_request("UpdateImageInfos", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_image_infos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_image_infos_with_options(request, runtime)

    def delete_image_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteImageResponse().from_map(self.do_request("DeleteImage", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_image(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_image_with_options(request, runtime)

    def list_audit_security_ip_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListAuditSecurityIpResponse().from_map(self.do_request("ListAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_audit_security_ip(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_audit_security_ip_with_options(request, runtime)

    def set_audit_security_ip_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SetAuditSecurityIpResponse().from_map(self.do_request("SetAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def set_audit_security_ip(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_audit_security_ip_with_options(request, runtime)

    def upload_media_by_urlwith_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UploadMediaByURLResponse().from_map(self.do_request("UploadMediaByURL", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def upload_media_by_url(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.upload_media_by_urlwith_options(request, runtime)

    def update_video_infos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateVideoInfosResponse().from_map(self.do_request("UpdateVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_video_infos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_video_infos_with_options(request, runtime)

    def search_media_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SearchMediaResponse().from_map(self.do_request("SearchMedia", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def search_media(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_media_with_options(request, runtime)

    def get_video_infos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetVideoInfosResponse().from_map(self.do_request("GetVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_video_infos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_video_infos_with_options(request, runtime)

    def submit_preprocess_jobs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitPreprocessJobsResponse().from_map(self.do_request("SubmitPreprocessJobs", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_preprocess_jobs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_preprocess_jobs_with_options(request, runtime)

    def describe_play_video_statis_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribePlayVideoStatisResponse().from_map(self.do_request("DescribePlayVideoStatis", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_play_video_statis(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_play_video_statis_with_options(request, runtime)

    def describe_play_user_total_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribePlayUserTotalResponse().from_map(self.do_request("DescribePlayUserTotal", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_play_user_total(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_play_user_total_with_options(request, runtime)

    def describe_play_user_avg_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribePlayUserAvgResponse().from_map(self.do_request("DescribePlayUserAvg", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_play_user_avg(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_play_user_avg_with_options(request, runtime)

    def describe_play_top_videos_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DescribePlayTopVideosResponse().from_map(self.do_request("DescribePlayTopVideos", "HTTPS", "POST", "2017-03-21", "AK", request.to_map(), None, runtime))


    def describe_play_top_videos(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_play_top_videos_with_options(request, runtime)

    def list_snapshots_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListSnapshotsResponse().from_map(self.do_request("ListSnapshots", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_snapshots(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_snapshots_with_options(request, runtime)

    def submit_transcode_jobs_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitTranscodeJobsResponse().from_map(self.do_request("SubmitTranscodeJobs", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_transcode_jobs(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_transcode_jobs_with_options(request, runtime)

    def list_live_record_video_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListLiveRecordVideoResponse().from_map(self.do_request("ListLiveRecordVideo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_live_record_video(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_live_record_video_with_options(request, runtime)

    def create_audit_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.CreateAuditResponse().from_map(self.do_request("CreateAudit", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def create_audit(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_audit_with_options(request, runtime)

    def get_audit_history_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetAuditHistoryResponse().from_map(self.do_request("GetAuditHistory", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_audit_history(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_audit_history_with_options(request, runtime)

    def list_aijob_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ListAIJobResponse().from_map(self.do_request("ListAIJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def list_aijob(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_aijob_with_options(request, runtime)

    def submit_aijob_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitAIJobResponse().from_map(self.do_request("SubmitAIJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_aijob(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_aijob_with_options(request, runtime)

    def get_image_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetImageInfoResponse().from_map(self.do_request("GetImageInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_image_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_image_info_with_options(request, runtime)

    def delete_stream_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteStreamResponse().from_map(self.do_request("DeleteStream", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_stream(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_stream_with_options(request, runtime)

    def submit_snapshot_job_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SubmitSnapshotJobResponse().from_map(self.do_request("SubmitSnapshotJob", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def submit_snapshot_job(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.submit_snapshot_job_with_options(request, runtime)

    def update_editing_project_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateEditingProjectResponse().from_map(self.do_request("UpdateEditingProject", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_editing_project(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_editing_project_with_options(request, runtime)

    def set_editing_project_materials_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SetEditingProjectMaterialsResponse().from_map(self.do_request("SetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def set_editing_project_materials(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_editing_project_materials_with_options(request, runtime)

    def search_editing_project_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SearchEditingProjectResponse().from_map(self.do_request("SearchEditingProject", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def search_editing_project(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_editing_project_with_options(request, runtime)

    def produce_editing_project_video_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.ProduceEditingProjectVideoResponse().from_map(self.do_request("ProduceEditingProjectVideo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def produce_editing_project_video(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.produce_editing_project_video_with_options(request, runtime)

    def get_editing_project_materials_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetEditingProjectMaterialsResponse().from_map(self.do_request("GetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_editing_project_materials(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_editing_project_materials_with_options(request, runtime)

    def get_editing_project_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetEditingProjectResponse().from_map(self.do_request("GetEditingProject", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_editing_project(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_editing_project_with_options(request, runtime)

    def delete_editing_project_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteEditingProjectResponse().from_map(self.do_request("DeleteEditingProject", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_editing_project(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_editing_project_with_options(request, runtime)

    def add_editing_project_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AddEditingProjectResponse().from_map(self.do_request("AddEditingProject", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def add_editing_project(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_editing_project_with_options(request, runtime)

    def get_mezzanine_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetMezzanineInfoResponse().from_map(self.do_request("GetMezzanineInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_mezzanine_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_mezzanine_info_with_options(request, runtime)

    def update_category_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateCategoryResponse().from_map(self.do_request("UpdateCategory", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_category(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_category_with_options(request, runtime)

    def get_categories_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetCategoriesResponse().from_map(self.do_request("GetCategories", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_categories(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_categories_with_options(request, runtime)

    def delete_category_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteCategoryResponse().from_map(self.do_request("DeleteCategory", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_category(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_category_with_options(request, runtime)

    def add_category_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.AddCategoryResponse().from_map(self.do_request("AddCategory", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def add_category(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_category_with_options(request, runtime)

    def get_play_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetPlayInfoResponse().from_map(self.do_request("GetPlayInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_play_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_play_info_with_options(request, runtime)

    def create_upload_image_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.CreateUploadImageResponse().from_map(self.do_request("CreateUploadImage", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def create_upload_image(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_upload_image_with_options(request, runtime)

    def set_message_callback_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.SetMessageCallbackResponse().from_map(self.do_request("SetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def set_message_callback(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.set_message_callback_with_options(request, runtime)

    def get_message_callback_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetMessageCallbackResponse().from_map(self.do_request("GetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_message_callback(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_message_callback_with_options(request, runtime)

    def update_video_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.UpdateVideoInfoResponse().from_map(self.do_request("UpdateVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def update_video_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_video_info_with_options(request, runtime)

    def get_video_play_auth_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetVideoPlayAuthResponse().from_map(self.do_request("GetVideoPlayAuth", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_video_play_auth(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_video_play_auth_with_options(request, runtime)

    def get_video_list_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetVideoListResponse().from_map(self.do_request("GetVideoList", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_video_list(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_video_list_with_options(request, runtime)

    def get_video_info_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.GetVideoInfoResponse().from_map(self.do_request("GetVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def get_video_info(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_video_info_with_options(request, runtime)

    def delete_video_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.DeleteVideoResponse().from_map(self.do_request("DeleteVideo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def delete_video(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_video_with_options(request, runtime)

    def refresh_upload_video_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.RefreshUploadVideoResponse().from_map(self.do_request("RefreshUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def refresh_upload_video(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.refresh_upload_video_with_options(request, runtime)

    def create_upload_video_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vod_20170321_models.CreateUploadVideoResponse().from_map(self.do_request("CreateUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", None, request.to_map(), runtime))


    def create_upload_video(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_upload_video_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
