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
use AlibabaCloud\Tea\Model;
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

        return Model::toModel($this->doRequest('ListSecrets', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ListSecretsResponse());
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

        return Model::toModel($this->doRequest('ListSecretVersionIds', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ListSecretVersionIdsResponse());
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

        return Model::toModel($this->doRequest('DescribeSecret', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DescribeSecretResponse());
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

        return Model::toModel($this->doRequest('UpdateSecret', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new UpdateSecretResponse());
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

        return Model::toModel($this->doRequest('GetSecretValue', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new GetSecretValueResponse());
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

        return Model::toModel($this->doRequest('GetRandomPassword', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new GetRandomPasswordResponse());
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

        return Model::toModel($this->doRequest('RestoreSecret', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new RestoreSecretResponse());
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

        return Model::toModel($this->doRequest('CreateSecret', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new CreateSecretResponse());
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

        return Model::toModel($this->doRequest('PutSecretValue', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new PutSecretValueResponse());
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

        return Model::toModel($this->doRequest('DeleteSecret', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DeleteSecretResponse());
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

        return Model::toModel($this->doRequest('UpdateSecretVersionStage', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new UpdateSecretVersionStageResponse());
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

        return Model::toModel($this->doRequest('AsymmetricDecrypt', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new AsymmetricDecryptResponse());
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

        return Model::toModel($this->doRequest('AsymmetricVerify', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new AsymmetricVerifyResponse());
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

        return Model::toModel($this->doRequest('AsymmetricSign', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new AsymmetricSignResponse());
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

        return Model::toModel($this->doRequest('AsymmetricEncrypt', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new AsymmetricEncryptResponse());
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

        return Model::toModel($this->doRequest('GetPublicKey', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new GetPublicKeyResponse());
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

        return Model::toModel($this->doRequest('GenerateDataKeyWithoutPlaintext', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new GenerateDataKeyWithoutPlaintextResponse());
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

        return Model::toModel($this->doRequest('UpdateKeyDescription', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new UpdateKeyDescriptionResponse());
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

        return Model::toModel($this->doRequest('DescribeKeyVersion', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DescribeKeyVersionResponse());
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

        return Model::toModel($this->doRequest('UpdateRotationPolicy', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new UpdateRotationPolicyResponse());
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

        return Model::toModel($this->doRequest('ListKeyVersions', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ListKeyVersionsResponse());
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

        return Model::toModel($this->doRequest('CreateKeyVersion', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new CreateKeyVersionResponse());
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

        return Model::toModel($this->doRequest('DescribeService', 'HTTPS', 'GET', '2016-01-20', 'AK', null, $request, $runtime), new DescribeServiceResponse());
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

        return Model::toModel($this->doRequest('UpdateAlias', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new UpdateAliasResponse());
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

        return Model::toModel($this->doRequest('UntagResource', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new UntagResourceResponse());
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

        return Model::toModel($this->doRequest('TagResource', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new TagResourceResponse());
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

        return Model::toModel($this->doRequest('ScheduleKeyDeletion', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ScheduleKeyDeletionResponse());
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

        return Model::toModel($this->doRequest('ListResourceTags', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ListResourceTagsResponse());
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

        return Model::toModel($this->doRequest('ListKeys', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ListKeysResponse());
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

        return Model::toModel($this->doRequest('ListAliasesByKeyId', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ListAliasesByKeyIdResponse());
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

        return Model::toModel($this->doRequest('ListAliases', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ListAliasesResponse());
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

        return Model::toModel($this->doRequest('ImportKeyMaterial', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new ImportKeyMaterialResponse());
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

        return Model::toModel($this->doRequest('GetParametersForImport', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new GetParametersForImportResponse());
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

        return Model::toModel($this->doRequest('GenerateDataKey', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new GenerateDataKeyResponse());
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

        return Model::toModel($this->doRequest('Encrypt', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new EncryptResponse());
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

        return Model::toModel($this->doRequest('EnableKey', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new EnableKeyResponse());
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

        return Model::toModel($this->doRequest('DisableKey', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DisableKeyResponse());
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

        return Model::toModel($this->doRequest('DescribeRegions', 'HTTPS', 'GET', '2016-01-20', 'AK', null, $request, $runtime), new DescribeRegionsResponse());
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

        return Model::toModel($this->doRequest('DescribeKey', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DescribeKeyResponse());
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

        return Model::toModel($this->doRequest('DeleteKeyMaterial', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DeleteKeyMaterialResponse());
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

        return Model::toModel($this->doRequest('DeleteAlias', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DeleteAliasResponse());
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

        return Model::toModel($this->doRequest('Decrypt', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new DecryptResponse());
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

        return Model::toModel($this->doRequest('CreateKey', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new CreateKeyResponse());
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

        return Model::toModel($this->doRequest('CreateAlias', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new CreateAliasResponse());
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

        return Model::toModel($this->doRequest('CancelKeyDeletion', 'HTTPS', 'GET', '2016-01-20', 'AK', $request, null, $runtime), new CancelKeyDeletionResponse());
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
