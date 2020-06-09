# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_videorecog20200320 import models as videorecog_20200320_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_tea_rpc import models as _rpc_models
from alibabacloud_openplatform20191219.client import Client as OpenPlatformClient
from alibabacloud_openplatform20191219 import models as open_platform_models
from alibabacloud_oss_sdk import models as _oss_models
from alibabacloud_rpc_util.client import Client as RPCUtilClient
from alibabacloud_oss_sdk.client import Client as OSSClient
from alibabacloud_tea_fileform import models as file_form_models
from alibabacloud_oss_util import models as ossutil_models
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self.check_config(config)
        self._endpoint = self.get_endpoint("videorecog", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def detect_video_shot(self, request, runtime):
        UtilClient.validate_model(request)
        return videorecog_20200320_models.DetectVideoShotResponse().from_map(self.do_request("DetectVideoShot", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def detect_video_shot_advance(self, request, runtime):
        # Step 0: init client
        access_key_id = self._credential.get_access_key_id()
        access_key_secret = self._credential.get_access_key_secret()
        auth_config = _rpc_models.Config(
            access_key_id=access_key_id,
            access_key_secret=access_key_secret,
            type="access_key",
            endpoint="openplatform.aliyuncs.com",
            protocol=self._protocol,
            region_id=self._region_id
        )
        auth_client = OpenPlatformClient(auth_config)
        auth_request = open_platform_models.AuthorizeFileUploadRequest(
            product="videorecog",
            region_id=self._region_id
        )
        auth_response = auth_client.authorize_file_upload_with_options(auth_request, runtime)
        # Step 1: request OSS api to upload file
        oss_config = _oss_models.Config(
            access_key_id=auth_response.access_key_id,
            access_key_secret=access_key_secret,
            type="access_key",
            endpoint=RPCUtilClient.get_endpoint(auth_response.endpoint, auth_response.use_accelerate, self._endpoint_type),
            protocol=self._protocol,
            region_id=self._region_id
        )
        oss_client = OSSClient(oss_config)
        file_obj = file_form_models.FileField(
            filename=auth_response.object_key,
            content=request.video_url_object,
            content_type=""
        )
        oss_header = _oss_models.PostObjectRequestHeader(
            access_key_id=auth_response.access_key_id,
            policy=auth_response.encoded_policy,
            signature=auth_response.signature,
            key=auth_response.object_key,
            file=file_obj,
            success_action_status="201"
        )
        upload_request = _oss_models.PostObjectRequest(
            bucket_name=auth_response.bucket,
            header=oss_header
        )
        oss_runtime = ossutil_models.RuntimeOptions(

        )
        RPCUtilClient.convert(runtime, oss_runtime)
        oss_client.post_object(upload_request, oss_runtime)
        # Step 2: request final api
        detect_video_shotreq = videorecog_20200320_models.DetectVideoShotRequest(

        )
        RPCUtilClient.convert(request, detect_video_shotreq)
        detect_video_shotreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        detect_video_shot_resp = self.detect_video_shot(detect_video_shotreq, runtime)
        return detect_video_shot_resp

    def generate_video_cover(self, request, runtime):
        UtilClient.validate_model(request)
        return videorecog_20200320_models.GenerateVideoCoverResponse().from_map(self.do_request("GenerateVideoCover", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def generate_video_cover_advance(self, request, runtime):
        # Step 0: init client
        access_key_id = self._credential.get_access_key_id()
        access_key_secret = self._credential.get_access_key_secret()
        auth_config = _rpc_models.Config(
            access_key_id=access_key_id,
            access_key_secret=access_key_secret,
            type="access_key",
            endpoint="openplatform.aliyuncs.com",
            protocol=self._protocol,
            region_id=self._region_id
        )
        auth_client = OpenPlatformClient(auth_config)
        auth_request = open_platform_models.AuthorizeFileUploadRequest(
            product="videorecog",
            region_id=self._region_id
        )
        auth_response = auth_client.authorize_file_upload_with_options(auth_request, runtime)
        # Step 1: request OSS api to upload file
        oss_config = _oss_models.Config(
            access_key_id=auth_response.access_key_id,
            access_key_secret=access_key_secret,
            type="access_key",
            endpoint=RPCUtilClient.get_endpoint(auth_response.endpoint, auth_response.use_accelerate, self._endpoint_type),
            protocol=self._protocol,
            region_id=self._region_id
        )
        oss_client = OSSClient(oss_config)
        file_obj = file_form_models.FileField(
            filename=auth_response.object_key,
            content=request.video_url_object,
            content_type=""
        )
        oss_header = _oss_models.PostObjectRequestHeader(
            access_key_id=auth_response.access_key_id,
            policy=auth_response.encoded_policy,
            signature=auth_response.signature,
            key=auth_response.object_key,
            file=file_obj,
            success_action_status="201"
        )
        upload_request = _oss_models.PostObjectRequest(
            bucket_name=auth_response.bucket,
            header=oss_header
        )
        oss_runtime = ossutil_models.RuntimeOptions(

        )
        RPCUtilClient.convert(runtime, oss_runtime)
        oss_client.post_object(upload_request, oss_runtime)
        # Step 2: request final api
        generate_video_coverreq = videorecog_20200320_models.GenerateVideoCoverRequest(

        )
        RPCUtilClient.convert(request, generate_video_coverreq)
        generate_video_coverreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        generate_video_cover_resp = self.generate_video_cover(generate_video_coverreq, runtime)
        return generate_video_cover_resp

    def get_async_job_result(self, request, runtime):
        UtilClient.validate_model(request)
        return videorecog_20200320_models.GetAsyncJobResultResponse().from_map(self.do_request("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
