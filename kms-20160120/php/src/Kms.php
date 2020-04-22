<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricDecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricDecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricEncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricEncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricSignRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricSignResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricVerifyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\AsymmetricVerifyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CancelKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CancelKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\CreateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DeleteAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DeleteAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DeleteKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DeleteKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DeleteSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DeleteSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeRegionsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeRegionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeServiceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeServiceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DisableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\DisableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\EnableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\EnableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\EncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\EncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GenerateDataKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GenerateDataKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GenerateDataKeyWithoutPlaintextRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GenerateDataKeyWithoutPlaintextResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetParametersForImportRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetParametersForImportResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetPublicKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetPublicKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetRandomPasswordRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetRandomPasswordResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\GetSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ImportKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ImportKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListAliasesByKeyIdRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListAliasesByKeyIdResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListAliasesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListAliasesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListKeysRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListKeysResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListKeyVersionsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListKeyVersionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListResourceTagsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListResourceTagsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretVersionIdsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretVersionIdsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\PutSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\PutSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\RestoreSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\RestoreSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ScheduleKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\ScheduleKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\TagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\TagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UntagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UntagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateKeyDescriptionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateKeyDescriptionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateRotationPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateRotationPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateSecretVersionStageRequest;
use AlibabaCloud\SDK\Kms\V20160120\Kms\UpdateSecretVersionStageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Kms
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretsResponse
     */
    public function listSecretsEx(ListSecretsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListSecretsResponse::fromMap($this->doRequest('ListSecrets', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretsResponse
     */
    public function listSecrets(ListSecretsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listSecretsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIdsEx(ListSecretVersionIdsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListSecretVersionIdsResponse::fromMap($this->doRequest('ListSecretVersionIds', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIds(ListSecretVersionIdsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listSecretVersionIdsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecretResponse
     */
    public function describeSecretEx(DescribeSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecretResponse::fromMap($this->doRequest('DescribeSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecretResponse
     */
    public function describeSecret(DescribeSecretRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeSecretEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretResponse
     */
    public function updateSecretEx(UpdateSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateSecretResponse::fromMap($this->doRequest('UpdateSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretResponse
     */
    public function updateSecret(UpdateSecretRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->updateSecretEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueEx(GetSecretValueRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetSecretValueResponse::fromMap($this->doRequest('GetSecretValue', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValue(GetSecretValueRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->getSecretValueEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRandomPasswordResponse
     */
    public function getRandomPasswordEx(GetRandomPasswordRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRandomPasswordResponse::fromMap($this->doRequest('GetRandomPassword', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRandomPasswordResponse
     */
    public function getRandomPassword(GetRandomPasswordRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->getRandomPasswordEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestoreSecretResponse
     */
    public function restoreSecretEx(RestoreSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestoreSecretResponse::fromMap($this->doRequest('RestoreSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestoreSecretResponse
     */
    public function restoreSecret(RestoreSecretRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->restoreSecretEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSecretResponse
     */
    public function createSecretEx(CreateSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSecretResponse::fromMap($this->doRequest('CreateSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSecretResponse
     */
    public function createSecret(CreateSecretRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->createSecretEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutSecretValueResponse
     */
    public function putSecretValueEx(PutSecretValueRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutSecretValueResponse::fromMap($this->doRequest('PutSecretValue', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutSecretValueResponse
     */
    public function putSecretValue(PutSecretValueRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->putSecretValueEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretEx(DeleteSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSecretResponse::fromMap($this->doRequest('DeleteSecret', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret(DeleteSecretRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->deleteSecretEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStageEx(UpdateSecretVersionStageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateSecretVersionStageResponse::fromMap($this->doRequest('UpdateSecretVersionStage', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStage(UpdateSecretVersionStageRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->updateSecretVersionStageEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricDecryptResponse
     */
    public function asymmetricDecryptEx(AsymmetricDecryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricDecryptResponse::fromMap($this->doRequest('AsymmetricDecrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricDecryptResponse
     */
    public function asymmetricDecrypt(AsymmetricDecryptRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->asymmetricDecryptEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricVerifyResponse
     */
    public function asymmetricVerifyEx(AsymmetricVerifyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricVerifyResponse::fromMap($this->doRequest('AsymmetricVerify', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricVerifyResponse
     */
    public function asymmetricVerify(AsymmetricVerifyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->asymmetricVerifyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricSignResponse
     */
    public function asymmetricSignEx(AsymmetricSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricSignResponse::fromMap($this->doRequest('AsymmetricSign', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricSignResponse
     */
    public function asymmetricSign(AsymmetricSignRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->asymmetricSignEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricEncryptResponse
     */
    public function asymmetricEncryptEx(AsymmetricEncryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AsymmetricEncryptResponse::fromMap($this->doRequest('AsymmetricEncrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AsymmetricEncryptResponse
     */
    public function asymmetricEncrypt(AsymmetricEncryptRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->asymmetricEncryptEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPublicKeyResponse
     */
    public function getPublicKeyEx(GetPublicKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPublicKeyResponse::fromMap($this->doRequest('GetPublicKey', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPublicKeyResponse
     */
    public function getPublicKey(GetPublicKeyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->getPublicKeyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintextEx(GenerateDataKeyWithoutPlaintextRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GenerateDataKeyWithoutPlaintextResponse::fromMap($this->doRequest('GenerateDataKeyWithoutPlaintext', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintext(GenerateDataKeyWithoutPlaintextRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->generateDataKeyWithoutPlaintextEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateKeyDescriptionResponse
     */
    public function updateKeyDescriptionEx(UpdateKeyDescriptionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateKeyDescriptionResponse::fromMap($this->doRequest('UpdateKeyDescription', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateKeyDescriptionResponse
     */
    public function updateKeyDescription(UpdateKeyDescriptionRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->updateKeyDescriptionEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyVersionResponse
     */
    public function describeKeyVersionEx(DescribeKeyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeKeyVersionResponse::fromMap($this->doRequest('DescribeKeyVersion', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyVersionResponse
     */
    public function describeKeyVersion(DescribeKeyVersionRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeKeyVersionEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRotationPolicyResponse
     */
    public function updateRotationPolicyEx(UpdateRotationPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateRotationPolicyResponse::fromMap($this->doRequest('UpdateRotationPolicy', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRotationPolicyResponse
     */
    public function updateRotationPolicy(UpdateRotationPolicyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->updateRotationPolicyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersionsEx(ListKeyVersionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListKeyVersionsResponse::fromMap($this->doRequest('ListKeyVersions', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersions(ListKeyVersionsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listKeyVersionsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyVersionResponse
     */
    public function createKeyVersionEx(CreateKeyVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateKeyVersionResponse::fromMap($this->doRequest('CreateKeyVersion', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyVersionResponse
     */
    public function createKeyVersion(CreateKeyVersionRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->createKeyVersionEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceResponse
     */
    public function describeServiceEx(DescribeServiceRequest $request, RuntimeOptions $runtime)
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
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeServiceEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAliasResponse
     */
    public function updateAliasEx(UpdateAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAliasResponse::fromMap($this->doRequest('UpdateAlias', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAliasResponse
     */
    public function updateAlias(UpdateAliasRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->updateAliasEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourceResponse
     */
    public function untagResourceEx(UntagResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UntagResourceResponse::fromMap($this->doRequest('UntagResource', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourceResponse
     */
    public function untagResource(UntagResourceRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->untagResourceEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TagResourceResponse
     */
    public function tagResourceEx(TagResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TagResourceResponse::fromMap($this->doRequest('TagResource', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TagResourceResponse
     */
    public function tagResource(TagResourceRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->tagResourceEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletionEx(ScheduleKeyDeletionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ScheduleKeyDeletionResponse::fromMap($this->doRequest('ScheduleKeyDeletion', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletion(ScheduleKeyDeletionRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->scheduleKeyDeletionEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTagsEx(ListResourceTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListResourceTagsResponse::fromMap($this->doRequest('ListResourceTags', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTags(ListResourceTagsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listResourceTagsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListKeysResponse
     */
    public function listKeysEx(ListKeysRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListKeysResponse::fromMap($this->doRequest('ListKeys', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListKeysResponse
     */
    public function listKeys(ListKeysRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listKeysEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesByKeyIdResponse
     */
    public function listAliasesByKeyIdEx(ListAliasesByKeyIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAliasesByKeyIdResponse::fromMap($this->doRequest('ListAliasesByKeyId', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesByKeyIdResponse
     */
    public function listAliasesByKeyId(ListAliasesByKeyIdRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listAliasesByKeyIdEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesResponse
     */
    public function listAliasesEx(ListAliasesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAliasesResponse::fromMap($this->doRequest('ListAliases', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAliasesResponse
     */
    public function listAliases(ListAliasesRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->listAliasesEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterialEx(ImportKeyMaterialRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportKeyMaterialResponse::fromMap($this->doRequest('ImportKeyMaterial', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterial(ImportKeyMaterialRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->importKeyMaterialEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetParametersForImportResponse
     */
    public function getParametersForImportEx(GetParametersForImportRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetParametersForImportResponse::fromMap($this->doRequest('GetParametersForImport', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetParametersForImportResponse
     */
    public function getParametersForImport(GetParametersForImportRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->getParametersForImportEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyResponse
     */
    public function generateDataKeyEx(GenerateDataKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GenerateDataKeyResponse::fromMap($this->doRequest('GenerateDataKey', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GenerateDataKeyResponse
     */
    public function generateDataKey(GenerateDataKeyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->generateDataKeyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EncryptResponse
     */
    public function encryptEx(EncryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EncryptResponse::fromMap($this->doRequest('Encrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EncryptResponse
     */
    public function encrypt(EncryptRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->encryptEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableKeyResponse
     */
    public function enableKeyEx(EnableKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableKeyResponse::fromMap($this->doRequest('EnableKey', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableKeyResponse
     */
    public function enableKey(EnableKeyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->enableKeyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DisableKeyResponse
     */
    public function disableKeyEx(DisableKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DisableKeyResponse::fromMap($this->doRequest('DisableKey', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DisableKeyResponse
     */
    public function disableKey(DisableKeyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->disableKeyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsEx(DescribeRegionsRequest $request, RuntimeOptions $runtime)
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
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeRegionsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyResponse
     */
    public function describeKeyEx(DescribeKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeKeyResponse::fromMap($this->doRequest('DescribeKey', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyResponse
     */
    public function describeKey(DescribeKeyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeKeyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterialEx(DeleteKeyMaterialRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteKeyMaterialResponse::fromMap($this->doRequest('DeleteKeyMaterial', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterial(DeleteKeyMaterialRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->deleteKeyMaterialEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAliasResponse
     */
    public function deleteAliasEx(DeleteAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAliasResponse::fromMap($this->doRequest('DeleteAlias', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAliasResponse
     */
    public function deleteAlias(DeleteAliasRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->deleteAliasEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DecryptResponse
     */
    public function decryptEx(DecryptRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DecryptResponse::fromMap($this->doRequest('Decrypt', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DecryptResponse
     */
    public function decrypt(DecryptRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->decryptEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyResponse
     */
    public function createKeyEx(CreateKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateKeyResponse::fromMap($this->doRequest('CreateKey', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyResponse
     */
    public function createKey(CreateKeyRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->createKeyEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAliasResponse
     */
    public function createAliasEx(CreateAliasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAliasResponse::fromMap($this->doRequest('CreateAlias', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAliasResponse
     */
    public function createAlias(CreateAliasRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->createAliasEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletionEx(CancelKeyDeletionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelKeyDeletionResponse::fromMap($this->doRequest('CancelKeyDeletion', 'HTTPS', 'POST', '2016-01-20', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletion(CancelKeyDeletionRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->cancelKeyDeletionEx($request, $runtime);
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
