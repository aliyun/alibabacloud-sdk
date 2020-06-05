# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_kms20160120 import models as kms_20160120_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self.check_config(config)
        self._endpoint = self.get_endpoint("kms", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def list_secrets_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ListSecretsResponse().from_map(self.do_request("ListSecrets", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def list_secrets(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_secrets_with_options(request, runtime)

    def list_secret_version_ids_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ListSecretVersionIdsResponse().from_map(self.do_request("ListSecretVersionIds", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def list_secret_version_ids(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_secret_version_ids_with_options(request, runtime)

    def describe_secret_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DescribeSecretResponse().from_map(self.do_request("DescribeSecret", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def describe_secret(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_secret_with_options(request, runtime)

    def update_secret_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.UpdateSecretResponse().from_map(self.do_request("UpdateSecret", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def update_secret(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_secret_with_options(request, runtime)

    def get_secret_value_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.GetSecretValueResponse().from_map(self.do_request("GetSecretValue", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def get_secret_value(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_secret_value_with_options(request, runtime)

    def get_random_password_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.GetRandomPasswordResponse().from_map(self.do_request("GetRandomPassword", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def get_random_password(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_random_password_with_options(request, runtime)

    def restore_secret_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.RestoreSecretResponse().from_map(self.do_request("RestoreSecret", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def restore_secret(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.restore_secret_with_options(request, runtime)

    def create_secret_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.CreateSecretResponse().from_map(self.do_request("CreateSecret", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def create_secret(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_secret_with_options(request, runtime)

    def put_secret_value_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.PutSecretValueResponse().from_map(self.do_request("PutSecretValue", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def put_secret_value(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.put_secret_value_with_options(request, runtime)

    def delete_secret_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DeleteSecretResponse().from_map(self.do_request("DeleteSecret", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def delete_secret(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_secret_with_options(request, runtime)

    def update_secret_version_stage_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.UpdateSecretVersionStageResponse().from_map(self.do_request("UpdateSecretVersionStage", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def update_secret_version_stage(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_secret_version_stage_with_options(request, runtime)

    def asymmetric_decrypt_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.AsymmetricDecryptResponse().from_map(self.do_request("AsymmetricDecrypt", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def asymmetric_decrypt(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.asymmetric_decrypt_with_options(request, runtime)

    def asymmetric_verify_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.AsymmetricVerifyResponse().from_map(self.do_request("AsymmetricVerify", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def asymmetric_verify(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.asymmetric_verify_with_options(request, runtime)

    def asymmetric_sign_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.AsymmetricSignResponse().from_map(self.do_request("AsymmetricSign", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def asymmetric_sign(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.asymmetric_sign_with_options(request, runtime)

    def asymmetric_encrypt_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.AsymmetricEncryptResponse().from_map(self.do_request("AsymmetricEncrypt", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def asymmetric_encrypt(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.asymmetric_encrypt_with_options(request, runtime)

    def get_public_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.GetPublicKeyResponse().from_map(self.do_request("GetPublicKey", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def get_public_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_public_key_with_options(request, runtime)

    def generate_data_key_without_plaintext_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.GenerateDataKeyWithoutPlaintextResponse().from_map(self.do_request("GenerateDataKeyWithoutPlaintext", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def generate_data_key_without_plaintext(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.generate_data_key_without_plaintext_with_options(request, runtime)

    def update_key_description_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.UpdateKeyDescriptionResponse().from_map(self.do_request("UpdateKeyDescription", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def update_key_description(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_key_description_with_options(request, runtime)

    def describe_key_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DescribeKeyVersionResponse().from_map(self.do_request("DescribeKeyVersion", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def describe_key_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_key_version_with_options(request, runtime)

    def update_rotation_policy_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.UpdateRotationPolicyResponse().from_map(self.do_request("UpdateRotationPolicy", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def update_rotation_policy(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_rotation_policy_with_options(request, runtime)

    def list_key_versions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ListKeyVersionsResponse().from_map(self.do_request("ListKeyVersions", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def list_key_versions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_key_versions_with_options(request, runtime)

    def create_key_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.CreateKeyVersionResponse().from_map(self.do_request("CreateKeyVersion", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def create_key_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_key_version_with_options(request, runtime)

    def describe_service_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DescribeServiceResponse().from_map(self.do_request("DescribeService", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def describe_service(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_service_with_options(request, runtime)

    def update_alias_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.UpdateAliasResponse().from_map(self.do_request("UpdateAlias", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def update_alias(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_alias_with_options(request, runtime)

    def untag_resource_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.UntagResourceResponse().from_map(self.do_request("UntagResource", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def untag_resource(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.untag_resource_with_options(request, runtime)

    def tag_resource_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.TagResourceResponse().from_map(self.do_request("TagResource", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def tag_resource(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.tag_resource_with_options(request, runtime)

    def schedule_key_deletion_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ScheduleKeyDeletionResponse().from_map(self.do_request("ScheduleKeyDeletion", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def schedule_key_deletion(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.schedule_key_deletion_with_options(request, runtime)

    def list_resource_tags_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ListResourceTagsResponse().from_map(self.do_request("ListResourceTags", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def list_resource_tags(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_resource_tags_with_options(request, runtime)

    def list_keys_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ListKeysResponse().from_map(self.do_request("ListKeys", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def list_keys(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_keys_with_options(request, runtime)

    def list_aliases_by_key_id_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ListAliasesByKeyIdResponse().from_map(self.do_request("ListAliasesByKeyId", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def list_aliases_by_key_id(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_aliases_by_key_id_with_options(request, runtime)

    def list_aliases_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ListAliasesResponse().from_map(self.do_request("ListAliases", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def list_aliases(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_aliases_with_options(request, runtime)

    def import_key_material_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.ImportKeyMaterialResponse().from_map(self.do_request("ImportKeyMaterial", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def import_key_material(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.import_key_material_with_options(request, runtime)

    def get_parameters_for_import_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.GetParametersForImportResponse().from_map(self.do_request("GetParametersForImport", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def get_parameters_for_import(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_parameters_for_import_with_options(request, runtime)

    def generate_data_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.GenerateDataKeyResponse().from_map(self.do_request("GenerateDataKey", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def generate_data_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.generate_data_key_with_options(request, runtime)

    def encrypt_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.EncryptResponse().from_map(self.do_request("Encrypt", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def encrypt(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.encrypt_with_options(request, runtime)

    def enable_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.EnableKeyResponse().from_map(self.do_request("EnableKey", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def enable_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.enable_key_with_options(request, runtime)

    def disable_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DisableKeyResponse().from_map(self.do_request("DisableKey", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def disable_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.disable_key_with_options(request, runtime)

    def describe_regions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DescribeRegionsResponse().from_map(self.do_request("DescribeRegions", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def describe_regions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_regions_with_options(request, runtime)

    def describe_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DescribeKeyResponse().from_map(self.do_request("DescribeKey", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def describe_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_key_with_options(request, runtime)

    def delete_key_material_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DeleteKeyMaterialResponse().from_map(self.do_request("DeleteKeyMaterial", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def delete_key_material(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_key_material_with_options(request, runtime)

    def delete_alias_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DeleteAliasResponse().from_map(self.do_request("DeleteAlias", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def delete_alias(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_alias_with_options(request, runtime)

    def decrypt_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.DecryptResponse().from_map(self.do_request("Decrypt", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def decrypt(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.decrypt_with_options(request, runtime)

    def create_key_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.CreateKeyResponse().from_map(self.do_request("CreateKey", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def create_key(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_key_with_options(request, runtime)

    def create_alias_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.CreateAliasResponse().from_map(self.do_request("CreateAlias", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def create_alias(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_alias_with_options(request, runtime)

    def cancel_key_deletion_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return kms_20160120_models.CancelKeyDeletionResponse().from_map(self.do_request("CancelKeyDeletion", "HTTPS", "POST", "2016-01-20", "AK", None, request.to_map(), runtime))


    def cancel_key_deletion(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_key_deletion_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
