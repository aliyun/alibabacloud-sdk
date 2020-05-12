// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Kms20160120.Models;

namespace AlibabaCloud.SDK.Kms20160120
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public ListSecretsResponse ListSecretsEx(ListSecretsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListSecretsResponse>(DoRequest("ListSecrets", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListSecretsResponse> ListSecretsExAsync(ListSecretsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListSecretsResponse>(await DoRequestAsync("ListSecrets", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ListSecretsResponse ListSecrets(ListSecretsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListSecretsEx(request, runtime);
        }

        public async Task<ListSecretsResponse> ListSecretsAsync(ListSecretsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListSecretsExAsync(request, runtime);
        }

        public ListSecretVersionIdsResponse ListSecretVersionIdsEx(ListSecretVersionIdsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListSecretVersionIdsResponse>(DoRequest("ListSecretVersionIds", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListSecretVersionIdsResponse> ListSecretVersionIdsExAsync(ListSecretVersionIdsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListSecretVersionIdsResponse>(await DoRequestAsync("ListSecretVersionIds", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ListSecretVersionIdsResponse ListSecretVersionIds(ListSecretVersionIdsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListSecretVersionIdsEx(request, runtime);
        }

        public async Task<ListSecretVersionIdsResponse> ListSecretVersionIdsAsync(ListSecretVersionIdsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListSecretVersionIdsExAsync(request, runtime);
        }

        public DescribeSecretResponse DescribeSecretEx(DescribeSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecretResponse>(DoRequest("DescribeSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeSecretResponse> DescribeSecretExAsync(DescribeSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSecretResponse>(await DoRequestAsync("DescribeSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DescribeSecretResponse DescribeSecret(DescribeSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSecretEx(request, runtime);
        }

        public async Task<DescribeSecretResponse> DescribeSecretAsync(DescribeSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSecretExAsync(request, runtime);
        }

        public UpdateSecretResponse UpdateSecretEx(UpdateSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateSecretResponse>(DoRequest("UpdateSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateSecretResponse> UpdateSecretExAsync(UpdateSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateSecretResponse>(await DoRequestAsync("UpdateSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public UpdateSecretResponse UpdateSecret(UpdateSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateSecretEx(request, runtime);
        }

        public async Task<UpdateSecretResponse> UpdateSecretAsync(UpdateSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateSecretExAsync(request, runtime);
        }

        public GetSecretValueResponse GetSecretValueEx(GetSecretValueRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetSecretValueResponse>(DoRequest("GetSecretValue", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetSecretValueResponse> GetSecretValueExAsync(GetSecretValueRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetSecretValueResponse>(await DoRequestAsync("GetSecretValue", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public GetSecretValueResponse GetSecretValue(GetSecretValueRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetSecretValueEx(request, runtime);
        }

        public async Task<GetSecretValueResponse> GetSecretValueAsync(GetSecretValueRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetSecretValueExAsync(request, runtime);
        }

        public GetRandomPasswordResponse GetRandomPasswordEx(GetRandomPasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRandomPasswordResponse>(DoRequest("GetRandomPassword", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetRandomPasswordResponse> GetRandomPasswordExAsync(GetRandomPasswordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRandomPasswordResponse>(await DoRequestAsync("GetRandomPassword", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public GetRandomPasswordResponse GetRandomPassword(GetRandomPasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetRandomPasswordEx(request, runtime);
        }

        public async Task<GetRandomPasswordResponse> GetRandomPasswordAsync(GetRandomPasswordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetRandomPasswordExAsync(request, runtime);
        }

        public RestoreSecretResponse RestoreSecretEx(RestoreSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestoreSecretResponse>(DoRequest("RestoreSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<RestoreSecretResponse> RestoreSecretExAsync(RestoreSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestoreSecretResponse>(await DoRequestAsync("RestoreSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public RestoreSecretResponse RestoreSecret(RestoreSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestoreSecretEx(request, runtime);
        }

        public async Task<RestoreSecretResponse> RestoreSecretAsync(RestoreSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestoreSecretExAsync(request, runtime);
        }

        public CreateSecretResponse CreateSecretEx(CreateSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSecretResponse>(DoRequest("CreateSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateSecretResponse> CreateSecretExAsync(CreateSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSecretResponse>(await DoRequestAsync("CreateSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public CreateSecretResponse CreateSecret(CreateSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSecretEx(request, runtime);
        }

        public async Task<CreateSecretResponse> CreateSecretAsync(CreateSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSecretExAsync(request, runtime);
        }

        public PutSecretValueResponse PutSecretValueEx(PutSecretValueRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutSecretValueResponse>(DoRequest("PutSecretValue", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<PutSecretValueResponse> PutSecretValueExAsync(PutSecretValueRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutSecretValueResponse>(await DoRequestAsync("PutSecretValue", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public PutSecretValueResponse PutSecretValue(PutSecretValueRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutSecretValueEx(request, runtime);
        }

        public async Task<PutSecretValueResponse> PutSecretValueAsync(PutSecretValueRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutSecretValueExAsync(request, runtime);
        }

        public DeleteSecretResponse DeleteSecretEx(DeleteSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSecretResponse>(DoRequest("DeleteSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteSecretResponse> DeleteSecretExAsync(DeleteSecretRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSecretResponse>(await DoRequestAsync("DeleteSecret", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DeleteSecretResponse DeleteSecret(DeleteSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSecretEx(request, runtime);
        }

        public async Task<DeleteSecretResponse> DeleteSecretAsync(DeleteSecretRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSecretExAsync(request, runtime);
        }

        public UpdateSecretVersionStageResponse UpdateSecretVersionStageEx(UpdateSecretVersionStageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateSecretVersionStageResponse>(DoRequest("UpdateSecretVersionStage", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateSecretVersionStageResponse> UpdateSecretVersionStageExAsync(UpdateSecretVersionStageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateSecretVersionStageResponse>(await DoRequestAsync("UpdateSecretVersionStage", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public UpdateSecretVersionStageResponse UpdateSecretVersionStage(UpdateSecretVersionStageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateSecretVersionStageEx(request, runtime);
        }

        public async Task<UpdateSecretVersionStageResponse> UpdateSecretVersionStageAsync(UpdateSecretVersionStageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateSecretVersionStageExAsync(request, runtime);
        }

        public AsymmetricDecryptResponse AsymmetricDecryptEx(AsymmetricDecryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricDecryptResponse>(DoRequest("AsymmetricDecrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<AsymmetricDecryptResponse> AsymmetricDecryptExAsync(AsymmetricDecryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricDecryptResponse>(await DoRequestAsync("AsymmetricDecrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public AsymmetricDecryptResponse AsymmetricDecrypt(AsymmetricDecryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AsymmetricDecryptEx(request, runtime);
        }

        public async Task<AsymmetricDecryptResponse> AsymmetricDecryptAsync(AsymmetricDecryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AsymmetricDecryptExAsync(request, runtime);
        }

        public AsymmetricVerifyResponse AsymmetricVerifyEx(AsymmetricVerifyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricVerifyResponse>(DoRequest("AsymmetricVerify", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<AsymmetricVerifyResponse> AsymmetricVerifyExAsync(AsymmetricVerifyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricVerifyResponse>(await DoRequestAsync("AsymmetricVerify", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public AsymmetricVerifyResponse AsymmetricVerify(AsymmetricVerifyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AsymmetricVerifyEx(request, runtime);
        }

        public async Task<AsymmetricVerifyResponse> AsymmetricVerifyAsync(AsymmetricVerifyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AsymmetricVerifyExAsync(request, runtime);
        }

        public AsymmetricSignResponse AsymmetricSignEx(AsymmetricSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricSignResponse>(DoRequest("AsymmetricSign", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<AsymmetricSignResponse> AsymmetricSignExAsync(AsymmetricSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricSignResponse>(await DoRequestAsync("AsymmetricSign", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public AsymmetricSignResponse AsymmetricSign(AsymmetricSignRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AsymmetricSignEx(request, runtime);
        }

        public async Task<AsymmetricSignResponse> AsymmetricSignAsync(AsymmetricSignRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AsymmetricSignExAsync(request, runtime);
        }

        public AsymmetricEncryptResponse AsymmetricEncryptEx(AsymmetricEncryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricEncryptResponse>(DoRequest("AsymmetricEncrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<AsymmetricEncryptResponse> AsymmetricEncryptExAsync(AsymmetricEncryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AsymmetricEncryptResponse>(await DoRequestAsync("AsymmetricEncrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public AsymmetricEncryptResponse AsymmetricEncrypt(AsymmetricEncryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AsymmetricEncryptEx(request, runtime);
        }

        public async Task<AsymmetricEncryptResponse> AsymmetricEncryptAsync(AsymmetricEncryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AsymmetricEncryptExAsync(request, runtime);
        }

        public GetPublicKeyResponse GetPublicKeyEx(GetPublicKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPublicKeyResponse>(DoRequest("GetPublicKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetPublicKeyResponse> GetPublicKeyExAsync(GetPublicKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPublicKeyResponse>(await DoRequestAsync("GetPublicKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public GetPublicKeyResponse GetPublicKey(GetPublicKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetPublicKeyEx(request, runtime);
        }

        public async Task<GetPublicKeyResponse> GetPublicKeyAsync(GetPublicKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetPublicKeyExAsync(request, runtime);
        }

        public GenerateDataKeyWithoutPlaintextResponse GenerateDataKeyWithoutPlaintextEx(GenerateDataKeyWithoutPlaintextRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GenerateDataKeyWithoutPlaintextResponse>(DoRequest("GenerateDataKeyWithoutPlaintext", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GenerateDataKeyWithoutPlaintextResponse> GenerateDataKeyWithoutPlaintextExAsync(GenerateDataKeyWithoutPlaintextRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GenerateDataKeyWithoutPlaintextResponse>(await DoRequestAsync("GenerateDataKeyWithoutPlaintext", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public GenerateDataKeyWithoutPlaintextResponse GenerateDataKeyWithoutPlaintext(GenerateDataKeyWithoutPlaintextRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GenerateDataKeyWithoutPlaintextEx(request, runtime);
        }

        public async Task<GenerateDataKeyWithoutPlaintextResponse> GenerateDataKeyWithoutPlaintextAsync(GenerateDataKeyWithoutPlaintextRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GenerateDataKeyWithoutPlaintextExAsync(request, runtime);
        }

        public UpdateKeyDescriptionResponse UpdateKeyDescriptionEx(UpdateKeyDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateKeyDescriptionResponse>(DoRequest("UpdateKeyDescription", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateKeyDescriptionResponse> UpdateKeyDescriptionExAsync(UpdateKeyDescriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateKeyDescriptionResponse>(await DoRequestAsync("UpdateKeyDescription", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public UpdateKeyDescriptionResponse UpdateKeyDescription(UpdateKeyDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateKeyDescriptionEx(request, runtime);
        }

        public async Task<UpdateKeyDescriptionResponse> UpdateKeyDescriptionAsync(UpdateKeyDescriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateKeyDescriptionExAsync(request, runtime);
        }

        public DescribeKeyVersionResponse DescribeKeyVersionEx(DescribeKeyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeKeyVersionResponse>(DoRequest("DescribeKeyVersion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeKeyVersionResponse> DescribeKeyVersionExAsync(DescribeKeyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeKeyVersionResponse>(await DoRequestAsync("DescribeKeyVersion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DescribeKeyVersionResponse DescribeKeyVersion(DescribeKeyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeKeyVersionEx(request, runtime);
        }

        public async Task<DescribeKeyVersionResponse> DescribeKeyVersionAsync(DescribeKeyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeKeyVersionExAsync(request, runtime);
        }

        public UpdateRotationPolicyResponse UpdateRotationPolicyEx(UpdateRotationPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateRotationPolicyResponse>(DoRequest("UpdateRotationPolicy", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateRotationPolicyResponse> UpdateRotationPolicyExAsync(UpdateRotationPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateRotationPolicyResponse>(await DoRequestAsync("UpdateRotationPolicy", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public UpdateRotationPolicyResponse UpdateRotationPolicy(UpdateRotationPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateRotationPolicyEx(request, runtime);
        }

        public async Task<UpdateRotationPolicyResponse> UpdateRotationPolicyAsync(UpdateRotationPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateRotationPolicyExAsync(request, runtime);
        }

        public ListKeyVersionsResponse ListKeyVersionsEx(ListKeyVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListKeyVersionsResponse>(DoRequest("ListKeyVersions", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListKeyVersionsResponse> ListKeyVersionsExAsync(ListKeyVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListKeyVersionsResponse>(await DoRequestAsync("ListKeyVersions", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ListKeyVersionsResponse ListKeyVersions(ListKeyVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListKeyVersionsEx(request, runtime);
        }

        public async Task<ListKeyVersionsResponse> ListKeyVersionsAsync(ListKeyVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListKeyVersionsExAsync(request, runtime);
        }

        public CreateKeyVersionResponse CreateKeyVersionEx(CreateKeyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateKeyVersionResponse>(DoRequest("CreateKeyVersion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateKeyVersionResponse> CreateKeyVersionExAsync(CreateKeyVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateKeyVersionResponse>(await DoRequestAsync("CreateKeyVersion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public CreateKeyVersionResponse CreateKeyVersion(CreateKeyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateKeyVersionEx(request, runtime);
        }

        public async Task<CreateKeyVersionResponse> CreateKeyVersionAsync(CreateKeyVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateKeyVersionExAsync(request, runtime);
        }

        public DescribeServiceResponse DescribeServiceEx(DescribeServiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeServiceResponse>(DoRequest("DescribeService", "HTTPS", "POST", "2016-01-20", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeServiceResponse> DescribeServiceExAsync(DescribeServiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeServiceResponse>(await DoRequestAsync("DescribeService", "HTTPS", "POST", "2016-01-20", "AK", null, request.ToMap(), runtime));
        }

        public DescribeServiceResponse DescribeService(DescribeServiceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeServiceEx(request, runtime);
        }

        public async Task<DescribeServiceResponse> DescribeServiceAsync(DescribeServiceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeServiceExAsync(request, runtime);
        }

        public UpdateAliasResponse UpdateAliasEx(UpdateAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAliasResponse>(DoRequest("UpdateAlias", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateAliasResponse> UpdateAliasExAsync(UpdateAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAliasResponse>(await DoRequestAsync("UpdateAlias", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public UpdateAliasResponse UpdateAlias(UpdateAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAliasEx(request, runtime);
        }

        public async Task<UpdateAliasResponse> UpdateAliasAsync(UpdateAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAliasExAsync(request, runtime);
        }

        public UntagResourceResponse UntagResourceEx(UntagResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourceResponse>(DoRequest("UntagResource", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UntagResourceResponse> UntagResourceExAsync(UntagResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourceResponse>(await DoRequestAsync("UntagResource", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public UntagResourceResponse UntagResource(UntagResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UntagResourceEx(request, runtime);
        }

        public async Task<UntagResourceResponse> UntagResourceAsync(UntagResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UntagResourceExAsync(request, runtime);
        }

        public TagResourceResponse TagResourceEx(TagResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourceResponse>(DoRequest("TagResource", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<TagResourceResponse> TagResourceExAsync(TagResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourceResponse>(await DoRequestAsync("TagResource", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public TagResourceResponse TagResource(TagResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TagResourceEx(request, runtime);
        }

        public async Task<TagResourceResponse> TagResourceAsync(TagResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TagResourceExAsync(request, runtime);
        }

        public ScheduleKeyDeletionResponse ScheduleKeyDeletionEx(ScheduleKeyDeletionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScheduleKeyDeletionResponse>(DoRequest("ScheduleKeyDeletion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ScheduleKeyDeletionResponse> ScheduleKeyDeletionExAsync(ScheduleKeyDeletionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScheduleKeyDeletionResponse>(await DoRequestAsync("ScheduleKeyDeletion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ScheduleKeyDeletionResponse ScheduleKeyDeletion(ScheduleKeyDeletionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ScheduleKeyDeletionEx(request, runtime);
        }

        public async Task<ScheduleKeyDeletionResponse> ScheduleKeyDeletionAsync(ScheduleKeyDeletionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ScheduleKeyDeletionExAsync(request, runtime);
        }

        public ListResourceTagsResponse ListResourceTagsEx(ListResourceTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListResourceTagsResponse>(DoRequest("ListResourceTags", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListResourceTagsResponse> ListResourceTagsExAsync(ListResourceTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListResourceTagsResponse>(await DoRequestAsync("ListResourceTags", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ListResourceTagsResponse ListResourceTags(ListResourceTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListResourceTagsEx(request, runtime);
        }

        public async Task<ListResourceTagsResponse> ListResourceTagsAsync(ListResourceTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListResourceTagsExAsync(request, runtime);
        }

        public ListKeysResponse ListKeysEx(ListKeysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListKeysResponse>(DoRequest("ListKeys", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListKeysResponse> ListKeysExAsync(ListKeysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListKeysResponse>(await DoRequestAsync("ListKeys", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ListKeysResponse ListKeys(ListKeysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListKeysEx(request, runtime);
        }

        public async Task<ListKeysResponse> ListKeysAsync(ListKeysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListKeysExAsync(request, runtime);
        }

        public ListAliasesByKeyIdResponse ListAliasesByKeyIdEx(ListAliasesByKeyIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAliasesByKeyIdResponse>(DoRequest("ListAliasesByKeyId", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListAliasesByKeyIdResponse> ListAliasesByKeyIdExAsync(ListAliasesByKeyIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAliasesByKeyIdResponse>(await DoRequestAsync("ListAliasesByKeyId", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ListAliasesByKeyIdResponse ListAliasesByKeyId(ListAliasesByKeyIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAliasesByKeyIdEx(request, runtime);
        }

        public async Task<ListAliasesByKeyIdResponse> ListAliasesByKeyIdAsync(ListAliasesByKeyIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAliasesByKeyIdExAsync(request, runtime);
        }

        public ListAliasesResponse ListAliasesEx(ListAliasesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAliasesResponse>(DoRequest("ListAliases", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListAliasesResponse> ListAliasesExAsync(ListAliasesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAliasesResponse>(await DoRequestAsync("ListAliases", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ListAliasesResponse ListAliases(ListAliasesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAliasesEx(request, runtime);
        }

        public async Task<ListAliasesResponse> ListAliasesAsync(ListAliasesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAliasesExAsync(request, runtime);
        }

        public ImportKeyMaterialResponse ImportKeyMaterialEx(ImportKeyMaterialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportKeyMaterialResponse>(DoRequest("ImportKeyMaterial", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ImportKeyMaterialResponse> ImportKeyMaterialExAsync(ImportKeyMaterialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportKeyMaterialResponse>(await DoRequestAsync("ImportKeyMaterial", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public ImportKeyMaterialResponse ImportKeyMaterial(ImportKeyMaterialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ImportKeyMaterialEx(request, runtime);
        }

        public async Task<ImportKeyMaterialResponse> ImportKeyMaterialAsync(ImportKeyMaterialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ImportKeyMaterialExAsync(request, runtime);
        }

        public GetParametersForImportResponse GetParametersForImportEx(GetParametersForImportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetParametersForImportResponse>(DoRequest("GetParametersForImport", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetParametersForImportResponse> GetParametersForImportExAsync(GetParametersForImportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetParametersForImportResponse>(await DoRequestAsync("GetParametersForImport", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public GetParametersForImportResponse GetParametersForImport(GetParametersForImportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetParametersForImportEx(request, runtime);
        }

        public async Task<GetParametersForImportResponse> GetParametersForImportAsync(GetParametersForImportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetParametersForImportExAsync(request, runtime);
        }

        public GenerateDataKeyResponse GenerateDataKeyEx(GenerateDataKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GenerateDataKeyResponse>(DoRequest("GenerateDataKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GenerateDataKeyResponse> GenerateDataKeyExAsync(GenerateDataKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GenerateDataKeyResponse>(await DoRequestAsync("GenerateDataKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public GenerateDataKeyResponse GenerateDataKey(GenerateDataKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GenerateDataKeyEx(request, runtime);
        }

        public async Task<GenerateDataKeyResponse> GenerateDataKeyAsync(GenerateDataKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GenerateDataKeyExAsync(request, runtime);
        }

        public EncryptResponse EncryptEx(EncryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EncryptResponse>(DoRequest("Encrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<EncryptResponse> EncryptExAsync(EncryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EncryptResponse>(await DoRequestAsync("Encrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public EncryptResponse Encrypt(EncryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EncryptEx(request, runtime);
        }

        public async Task<EncryptResponse> EncryptAsync(EncryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EncryptExAsync(request, runtime);
        }

        public EnableKeyResponse EnableKeyEx(EnableKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableKeyResponse>(DoRequest("EnableKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<EnableKeyResponse> EnableKeyExAsync(EnableKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableKeyResponse>(await DoRequestAsync("EnableKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public EnableKeyResponse EnableKey(EnableKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableKeyEx(request, runtime);
        }

        public async Task<EnableKeyResponse> EnableKeyAsync(EnableKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableKeyExAsync(request, runtime);
        }

        public DisableKeyResponse DisableKeyEx(DisableKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableKeyResponse>(DoRequest("DisableKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DisableKeyResponse> DisableKeyExAsync(DisableKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableKeyResponse>(await DoRequestAsync("DisableKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DisableKeyResponse DisableKey(DisableKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableKeyEx(request, runtime);
        }

        public async Task<DisableKeyResponse> DisableKeyAsync(DisableKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableKeyExAsync(request, runtime);
        }

        public DescribeRegionsResponse DescribeRegionsEx(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2016-01-20", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsExAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2016-01-20", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRegionsResponse DescribeRegions(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRegionsEx(request, runtime);
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsAsync(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRegionsExAsync(request, runtime);
        }

        public DescribeKeyResponse DescribeKeyEx(DescribeKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeKeyResponse>(DoRequest("DescribeKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeKeyResponse> DescribeKeyExAsync(DescribeKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeKeyResponse>(await DoRequestAsync("DescribeKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DescribeKeyResponse DescribeKey(DescribeKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeKeyEx(request, runtime);
        }

        public async Task<DescribeKeyResponse> DescribeKeyAsync(DescribeKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeKeyExAsync(request, runtime);
        }

        public DeleteKeyMaterialResponse DeleteKeyMaterialEx(DeleteKeyMaterialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteKeyMaterialResponse>(DoRequest("DeleteKeyMaterial", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteKeyMaterialResponse> DeleteKeyMaterialExAsync(DeleteKeyMaterialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteKeyMaterialResponse>(await DoRequestAsync("DeleteKeyMaterial", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DeleteKeyMaterialResponse DeleteKeyMaterial(DeleteKeyMaterialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteKeyMaterialEx(request, runtime);
        }

        public async Task<DeleteKeyMaterialResponse> DeleteKeyMaterialAsync(DeleteKeyMaterialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteKeyMaterialExAsync(request, runtime);
        }

        public DeleteAliasResponse DeleteAliasEx(DeleteAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAliasResponse>(DoRequest("DeleteAlias", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteAliasResponse> DeleteAliasExAsync(DeleteAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAliasResponse>(await DoRequestAsync("DeleteAlias", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DeleteAliasResponse DeleteAlias(DeleteAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAliasEx(request, runtime);
        }

        public async Task<DeleteAliasResponse> DeleteAliasAsync(DeleteAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAliasExAsync(request, runtime);
        }

        public DecryptResponse DecryptEx(DecryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DecryptResponse>(DoRequest("Decrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DecryptResponse> DecryptExAsync(DecryptRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DecryptResponse>(await DoRequestAsync("Decrypt", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public DecryptResponse Decrypt(DecryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DecryptEx(request, runtime);
        }

        public async Task<DecryptResponse> DecryptAsync(DecryptRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DecryptExAsync(request, runtime);
        }

        public CreateKeyResponse CreateKeyEx(CreateKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateKeyResponse>(DoRequest("CreateKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateKeyResponse> CreateKeyExAsync(CreateKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateKeyResponse>(await DoRequestAsync("CreateKey", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public CreateKeyResponse CreateKey(CreateKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateKeyEx(request, runtime);
        }

        public async Task<CreateKeyResponse> CreateKeyAsync(CreateKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateKeyExAsync(request, runtime);
        }

        public CreateAliasResponse CreateAliasEx(CreateAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAliasResponse>(DoRequest("CreateAlias", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateAliasResponse> CreateAliasExAsync(CreateAliasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAliasResponse>(await DoRequestAsync("CreateAlias", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public CreateAliasResponse CreateAlias(CreateAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAliasEx(request, runtime);
        }

        public async Task<CreateAliasResponse> CreateAliasAsync(CreateAliasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAliasExAsync(request, runtime);
        }

        public CancelKeyDeletionResponse CancelKeyDeletionEx(CancelKeyDeletionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelKeyDeletionResponse>(DoRequest("CancelKeyDeletion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CancelKeyDeletionResponse> CancelKeyDeletionExAsync(CancelKeyDeletionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelKeyDeletionResponse>(await DoRequestAsync("CancelKeyDeletion", "HTTPS", "POST", "2016-01-20", "AK", request.ToMap(), null, runtime));
        }

        public CancelKeyDeletionResponse CancelKeyDeletion(CancelKeyDeletionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelKeyDeletionEx(request, runtime);
        }

        public async Task<CancelKeyDeletionResponse> CancelKeyDeletionAsync(CancelKeyDeletionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelKeyDeletionExAsync(request, runtime);
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.IsUnset(endpointMap) && !AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}
