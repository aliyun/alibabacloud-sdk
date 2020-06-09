# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_videoenhan20200320 import models as videoenhan_20200320_models
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
        self._endpoint = self.get_endpoint("videoenhan", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def generate_video(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.GenerateVideoResponse().from_map(self.do_request("GenerateVideo", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def get_async_job_result(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.GetAsyncJobResultResponse().from_map(self.do_request("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def super_resolve_video(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.SuperResolveVideoResponse().from_map(self.do_request("SuperResolveVideo", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def super_resolve_video_advance(self, request, runtime):
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
            product="videoenhan",
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
        super_resolve_videoreq = videoenhan_20200320_models.SuperResolveVideoRequest(

        )
        RPCUtilClient.convert(request, super_resolve_videoreq)
        super_resolve_videoreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        super_resolve_video_resp = self.super_resolve_video(super_resolve_videoreq, runtime)
        return super_resolve_video_resp

    def erase_video_logo(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.EraseVideoLogoResponse().from_map(self.do_request("EraseVideoLogo", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def erase_video_logo_advance(self, request, runtime):
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
            product="videoenhan",
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
        erase_video_logoreq = videoenhan_20200320_models.EraseVideoLogoRequest(

        )
        RPCUtilClient.convert(request, erase_video_logoreq)
        erase_video_logoreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        erase_video_logo_resp = self.erase_video_logo(erase_video_logoreq, runtime)
        return erase_video_logo_resp

    def erase_video_subtitles(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.EraseVideoSubtitlesResponse().from_map(self.do_request("EraseVideoSubtitles", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def erase_video_subtitles_advance(self, request, runtime):
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
            product="videoenhan",
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
        erase_video_subtitlesreq = videoenhan_20200320_models.EraseVideoSubtitlesRequest(

        )
        RPCUtilClient.convert(request, erase_video_subtitlesreq)
        erase_video_subtitlesreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        erase_video_subtitles_resp = self.erase_video_subtitles(erase_video_subtitlesreq, runtime)
        return erase_video_subtitles_resp

    def abstract_ecommerce_video(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.AbstractEcommerceVideoResponse().from_map(self.do_request("AbstractEcommerceVideo", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def abstract_ecommerce_video_advance(self, request, runtime):
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
            product="videoenhan",
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
        abstract_ecommerce_videoreq = videoenhan_20200320_models.AbstractEcommerceVideoRequest(

        )
        RPCUtilClient.convert(request, abstract_ecommerce_videoreq)
        abstract_ecommerce_videoreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        abstract_ecommerce_video_resp = self.abstract_ecommerce_video(abstract_ecommerce_videoreq, runtime)
        return abstract_ecommerce_video_resp

    def abstract_film_video(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.AbstractFilmVideoResponse().from_map(self.do_request("AbstractFilmVideo", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def abstract_film_video_advance(self, request, runtime):
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
            product="videoenhan",
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
        abstract_film_videoreq = videoenhan_20200320_models.AbstractFilmVideoRequest(

        )
        RPCUtilClient.convert(request, abstract_film_videoreq)
        abstract_film_videoreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        abstract_film_video_resp = self.abstract_film_video(abstract_film_videoreq, runtime)
        return abstract_film_video_resp

    def adjust_video_color(self, request, runtime):
        UtilClient.validate_model(request)
        return videoenhan_20200320_models.AdjustVideoColorResponse().from_map(self.do_request("AdjustVideoColor", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def adjust_video_color_advance(self, request, runtime):
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
            product="videoenhan",
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
        adjust_video_colorreq = videoenhan_20200320_models.AdjustVideoColorRequest(

        )
        RPCUtilClient.convert(request, adjust_video_colorreq)
        adjust_video_colorreq.video_url = "http://" + str(auth_response.bucket) + "." + str(auth_response.endpoint) + "/" + str(auth_response.object_key) + ""
        adjust_video_color_resp = self.adjust_video_color(adjust_video_colorreq, runtime)
        return adjust_video_color_resp

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
