# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_dysmsapi20170525 import models as dysmsapi_20170525_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "central"
        self._endpoint_map = {
            "ap-northeast-1": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-northeast-2-pop": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-south-1": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "cn-beijing": "dysmsapi-proxy.cn-beijing.aliyuncs.com",
            "eu-central-1": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "eu-west-1": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "eu-west-1-oxs": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "me-east-1": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "rus-west-1-pop": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "us-east-1": "dysmsapi.ap-southeast-1.aliyuncs.com",
            "us-west-1": "dysmsapi.ap-southeast-1.aliyuncs.com"
        }
        self.check_config(config)
        self._endpoint = self.get_endpoint("dysmsapi", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def query_sms_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.QuerySmsTemplateResponse().from_map(self.do_request("QuerySmsTemplate", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_sms_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_sms_template_with_options(request, runtime)

    def query_sms_sign_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.QuerySmsSignResponse().from_map(self.do_request("QuerySmsSign", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_sms_sign(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_sms_sign_with_options(request, runtime)

    def modify_sms_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.ModifySmsTemplateResponse().from_map(self.do_request("ModifySmsTemplate", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def modify_sms_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_sms_template_with_options(request, runtime)

    def modify_sms_sign_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.ModifySmsSignResponse().from_map(self.do_request("ModifySmsSign", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def modify_sms_sign(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_sms_sign_with_options(request, runtime)

    def delete_sms_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.DeleteSmsTemplateResponse().from_map(self.do_request("DeleteSmsTemplate", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def delete_sms_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_sms_template_with_options(request, runtime)

    def delete_sms_sign_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.DeleteSmsSignResponse().from_map(self.do_request("DeleteSmsSign", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def delete_sms_sign(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_sms_sign_with_options(request, runtime)

    def add_sms_template_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.AddSmsTemplateResponse().from_map(self.do_request("AddSmsTemplate", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def add_sms_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_sms_template_with_options(request, runtime)

    def add_sms_sign_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.AddSmsSignResponse().from_map(self.do_request("AddSmsSign", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def add_sms_sign(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_sms_sign_with_options(request, runtime)

    def send_batch_sms_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.SendBatchSmsResponse().from_map(self.do_request("SendBatchSms", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def send_batch_sms(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.send_batch_sms_with_options(request, runtime)

    def send_sms_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.SendSmsResponse().from_map(self.do_request("SendSms", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def send_sms(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.send_sms_with_options(request, runtime)

    def query_send_details_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return dysmsapi_20170525_models.QuerySendDetailsResponse().from_map(self.do_request("QuerySendDetails", "HTTPS", "POST", "2017-05-25", "AK", None, request.to_map(), runtime))


    def query_send_details(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.query_send_details_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
