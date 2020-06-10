<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricDecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricDecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricEncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricEncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricSignRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricSignResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricVerifyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricVerifyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CancelKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CancelKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DisableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DisableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EnableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\EnableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyWithoutPlaintextRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyWithoutPlaintextResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKeyDescriptionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKeyDescriptionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateRotationPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateRotationPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretVersionStageRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretVersionStageResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Kms extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('kms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions(ListSecretsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListSecretsResponse::fromMap($this->doRequest('ListSecrets', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretsResponse
     */
    public function listSecrets(ListSecretsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIdsWithOptions(ListSecretVersionIdsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListSecretVersionIdsResponse::fromMap($this->doRequest('ListSecretVersionIds', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIds(ListSecretVersionIdsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretVersionIdsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecretResponse
     */
    public function describeSecretWithOptions(DescribeSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecretResponse::fromMap($this->doRequest('DescribeSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecretResponse
     */
    public function describeSecret(DescribeSecretRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecretWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretResponse
     */
    public function updateSecretWithOptions(UpdateSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateSecretResponse::fromMap($this->doRequest('UpdateSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretResponse
     */
    public function updateSecret(UpdateSecretRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueWithOptions(GetSecretValueRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetSecretValueResponse::fromMap($this->doRequest('GetSecretValue', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValue(GetSecretValueRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretValueWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRandomPasswordResponse
     */
    public function getRandomPasswordWithOptions(GetRandomPasswordRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRandomPasswordResponse::fromMap($this->doRequest('GetRandomPassword', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRandomPasswordResponse
     */
    public function getRandomPassword(GetRandomPasswordRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRandomPasswordWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestoreSecretResponse
     */
    public function restoreSecretWithOptions(RestoreSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestoreSecretResponse::fromMap($this->doRequest('RestoreSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestoreSecretResponse
     */
    public function restoreSecret(RestoreSecretRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreSecretWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions(CreateSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSecretResponse::fromMap($this->doRequest('CreateSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSecretResponse
     */
    public function createSecret(CreateSecretRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutSecretValueResponse
     */
    public function putSecretValueWithOptions(PutSecretValueRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutSecretValueResponse::fromMap($this->doRequest('PutSecretValue', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutSecretValueResponse
     */
    public function putSecretValue(PutSecretValueRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putSecretValueWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions(DeleteSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSecretResponse::fromMap($this->doRequest('DeleteSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret(DeleteSecretRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStageWithOptions(UpdateSecretVersionStageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateSecretVersionStageResponse::fromMap($this->doRequest('UpdateSecretVersionStage', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStage(UpdateSecretVersionStageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretVersionStageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricDecryptResponse
     */
    public function asymmetricDecryptWithOptions(AsymmetricDecryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricDecryptResponse::fromMap($this->doRequest('AsymmetricDecrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricDecryptResponse
     */
    public function asymmetricDecrypt(AsymmetricDecryptRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricDecryptWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricVerifyResponse
     */
    public function asymmetricVerifyWithOptions(AsymmetricVerifyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricVerifyResponse::fromMap($this->doRequest('AsymmetricVerify', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricVerifyResponse
     */
    public function asymmetricVerify(AsymmetricVerifyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricVerifyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricSignResponse
     */
    public function asymmetricSignWithOptions(AsymmetricSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricSignResponse::fromMap($this->doRequest('AsymmetricSign', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricSignResponse
     */
    public function asymmetricSign(AsymmetricSignRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricSignWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricEncryptResponse
     */
    public function asymmetricEncryptWithOptions(AsymmetricEncryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricEncryptResponse::fromMap($this->doRequest('AsymmetricEncrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricEncryptResponse
     */
    public function asymmetricEncrypt(AsymmetricEncryptRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricEncryptWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPublicKeyResponse
     */
    public function getPublicKeyWithOptions(GetPublicKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPublicKeyResponse::fromMap($this->doRequest('GetPublicKey', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPublicKeyResponse
     */
    public function getPublicKey(GetPublicKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintextWithOptions(GenerateDataKeyWithoutPlaintextRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GenerateDataKeyWithoutPlaintextResponse::fromMap($this->doRequest('GenerateDataKeyWithoutPlaintext', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintext(GenerateDataKeyWithoutPlaintextRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDataKeyWithoutPlaintextWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateKeyDescriptionResponse
     */
    public function updateKeyDescriptionWithOptions(UpdateKeyDescriptionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateKeyDescriptionResponse::fromMap($this->doRequest('UpdateKeyDescription', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateKeyDescriptionResponse
     */
    public function updateKeyDescription(UpdateKeyDescriptionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKeyDescriptionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyVersionResponse
     */
    public function describeKeyVersionWithOptions(DescribeKeyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeKeyVersionResponse::fromMap($this->doRequest('DescribeKeyVersion', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyVersionResponse
     */
    public function describeKeyVersion(DescribeKeyVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRotationPolicyResponse
     */
    public function updateRotationPolicyWithOptions(UpdateRotationPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateRotationPolicyResponse::fromMap($this->doRequest('UpdateRotationPolicy', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRotationPolicyResponse
     */
    public function updateRotationPolicy(UpdateRotationPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRotationPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersionsWithOptions(ListKeyVersionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListKeyVersionsResponse::fromMap($this->doRequest('ListKeyVersions', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersions(ListKeyVersionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeyVersionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyVersionResponse
     */
    public function createKeyVersionWithOptions(CreateKeyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateKeyVersionResponse::fromMap($this->doRequest('CreateKeyVersion', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyVersionResponse
     */
    public function createKeyVersion(CreateKeyVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceResponse
     */
    public function describeServiceWithOptions(DescribeServiceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceResponse::fromMap($this->doRequest('DescribeService', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceResponse
     */
    public function describeService(DescribeServiceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAliasResponse
     */
    public function updateAliasWithOptions(UpdateAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAliasResponse::fromMap($this->doRequest('UpdateAlias', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAliasResponse
     */
    public function updateAlias(UpdateAliasRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAliasWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourceResponse
     */
    public function untagResourceWithOptions(UntagResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UntagResourceResponse::fromMap($this->doRequest('UntagResource', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourceResponse
     */
    public function untagResource(UntagResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TagResourceResponse
     */
    public function tagResourceWithOptions(TagResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TagResourceResponse::fromMap($this->doRequest('TagResource', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TagResourceResponse
     */
    public function tagResource(TagResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletionWithOptions(ScheduleKeyDeletionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ScheduleKeyDeletionResponse::fromMap($this->doRequest('ScheduleKeyDeletion', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletion(ScheduleKeyDeletionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scheduleKeyDeletionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTagsWithOptions(ListResourceTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListResourceTagsResponse::fromMap($this->doRequest('ListResourceTags', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTags(ListResourceTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListKeysResponse
     */
    public function listKeysWithOptions(ListKeysRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListKeysResponse::fromMap($this->doRequest('ListKeys', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListKeysResponse
     */
    public function listKeys(ListKeysRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeysWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesByKeyIdResponse
     */
    public function listAliasesByKeyIdWithOptions(ListAliasesByKeyIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAliasesByKeyIdResponse::fromMap($this->doRequest('ListAliasesByKeyId', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesByKeyIdResponse
     */
    public function listAliasesByKeyId(ListAliasesByKeyIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAliasesByKeyIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesResponse
     */
    public function listAliasesWithOptions(ListAliasesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAliasesResponse::fromMap($this->doRequest('ListAliases', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesResponse
     */
    public function listAliases(ListAliasesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAliasesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterialWithOptions(ImportKeyMaterialRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportKeyMaterialResponse::fromMap($this->doRequest('ImportKeyMaterial', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterial(ImportKeyMaterialRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyMaterialWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetParametersForImportResponse
     */
    public function getParametersForImportWithOptions(GetParametersForImportRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetParametersForImportResponse::fromMap($this->doRequest('GetParametersForImport', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetParametersForImportResponse
     */
    public function getParametersForImport(GetParametersForImportRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersForImportWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyResponse
     */
    public function generateDataKeyWithOptions(GenerateDataKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GenerateDataKeyResponse::fromMap($this->doRequest('GenerateDataKey', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyResponse
     */
    public function generateDataKey(GenerateDataKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDataKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EncryptResponse
     */
    public function encryptWithOptions(EncryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EncryptResponse::fromMap($this->doRequest('Encrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EncryptResponse
     */
    public function encrypt(EncryptRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableKeyResponse
     */
    public function enableKeyWithOptions(EnableKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableKeyResponse::fromMap($this->doRequest('EnableKey', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableKeyResponse
     */
    public function enableKey(EnableKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DisableKeyResponse
     */
    public function disableKeyWithOptions(DisableKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DisableKeyResponse::fromMap($this->doRequest('DisableKey', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DisableKeyResponse
     */
    public function disableKey(DisableKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions(DescribeRegionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyResponse
     */
    public function describeKeyWithOptions(DescribeKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeKeyResponse::fromMap($this->doRequest('DescribeKey', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyResponse
     */
    public function describeKey(DescribeKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterialWithOptions(DeleteKeyMaterialRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteKeyMaterialResponse::fromMap($this->doRequest('DeleteKeyMaterial', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterial(DeleteKeyMaterialRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyMaterialWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAliasResponse
     */
    public function deleteAliasWithOptions(DeleteAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAliasResponse::fromMap($this->doRequest('DeleteAlias', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAliasResponse
     */
    public function deleteAlias(DeleteAliasRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAliasWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DecryptResponse
     */
    public function decryptWithOptions(DecryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DecryptResponse::fromMap($this->doRequest('Decrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DecryptResponse
     */
    public function decrypt(DecryptRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyResponse
     */
    public function createKeyWithOptions(CreateKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateKeyResponse::fromMap($this->doRequest('CreateKey', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyResponse
     */
    public function createKey(CreateKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAliasResponse
     */
    public function createAliasWithOptions(CreateAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAliasResponse::fromMap($this->doRequest('CreateAlias', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAliasResponse
     */
    public function createAlias(CreateAliasRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAliasWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletionWithOptions(CancelKeyDeletionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelKeyDeletionResponse::fromMap($this->doRequest('CancelKeyDeletion', 'HTTPS', 'POST', '2016-01-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletion(CancelKeyDeletionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelKeyDeletionWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
