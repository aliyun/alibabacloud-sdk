// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class ListSecretsRequest extends $tea.Model {
  fetchTags?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      fetchTags: 'FetchTags',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fetchTags: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  secretList: ListSecretsResponseSecretList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      secretList: 'SecretList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      secretList: ListSecretsResponseSecretList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretVersionIdsRequest extends $tea.Model {
  secretName: string;
  includeDeprecated?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      includeDeprecated: 'IncludeDeprecated',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      includeDeprecated: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretVersionIdsResponse extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  requestId: string;
  secretName: string;
  totalCount: number;
  versionIds: ListSecretVersionIdsResponseVersionIds;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      secretName: 'SecretName',
      totalCount: 'TotalCount',
      versionIds: 'VersionIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      secretName: 'string',
      totalCount: 'number',
      versionIds: ListSecretVersionIdsResponseVersionIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSecretRequest extends $tea.Model {
  secretName: string;
  fetchTags?: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      fetchTags: 'FetchTags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      fetchTags: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSecretResponse extends $tea.Model {
  requestId: string;
  arn: string;
  secretName: string;
  encryptionKeyId: string;
  description: string;
  createTime: string;
  updateTime: string;
  plannedDeleteTime: string;
  tags: DescribeSecretResponseTags;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      arn: 'Arn',
      secretName: 'SecretName',
      encryptionKeyId: 'EncryptionKeyId',
      description: 'Description',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      plannedDeleteTime: 'PlannedDeleteTime',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      arn: 'string',
      secretName: 'string',
      encryptionKeyId: 'string',
      description: 'string',
      createTime: 'string',
      updateTime: 'string',
      plannedDeleteTime: 'string',
      tags: DescribeSecretResponseTags,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateSecretRequest extends $tea.Model {
  secretName: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateSecretResponse extends $tea.Model {
  requestId: string;
  secretName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      secretName: 'SecretName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      secretName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecretValueRequest extends $tea.Model {
  secretName: string;
  versionStage?: string;
  versionId?: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      versionStage: 'VersionStage',
      versionId: 'VersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      versionStage: 'string',
      versionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecretValueResponse extends $tea.Model {
  requestId: string;
  secretName: string;
  versionId: string;
  createTime: string;
  secretData: string;
  secretDataType: string;
  versionStages: GetSecretValueResponseVersionStages[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      secretName: 'SecretName',
      versionId: 'VersionId',
      createTime: 'CreateTime',
      secretData: 'SecretData',
      secretDataType: 'SecretDataType',
      versionStages: 'VersionStages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      secretName: 'string',
      versionId: 'string',
      createTime: 'string',
      secretData: 'string',
      secretDataType: 'string',
      versionStages: { 'type': 'array', 'itemType': GetSecretValueResponseVersionStages },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRandomPasswordRequest extends $tea.Model {
  passwordLength?: string;
  excludeCharacters?: string;
  excludeLowercase?: string;
  excludeUppercase?: string;
  excludeNumbers?: string;
  excludePunctuation?: string;
  requireEachIncludedType?: string;
  static names(): { [key: string]: string } {
    return {
      passwordLength: 'PasswordLength',
      excludeCharacters: 'ExcludeCharacters',
      excludeLowercase: 'ExcludeLowercase',
      excludeUppercase: 'ExcludeUppercase',
      excludeNumbers: 'ExcludeNumbers',
      excludePunctuation: 'ExcludePunctuation',
      requireEachIncludedType: 'RequireEachIncludedType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      passwordLength: 'string',
      excludeCharacters: 'string',
      excludeLowercase: 'string',
      excludeUppercase: 'string',
      excludeNumbers: 'string',
      excludePunctuation: 'string',
      requireEachIncludedType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRandomPasswordResponse extends $tea.Model {
  requestId: string;
  randomPassword: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      randomPassword: 'RandomPassword',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      randomPassword: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestoreSecretRequest extends $tea.Model {
  secretName: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestoreSecretResponse extends $tea.Model {
  requestId: string;
  secretName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      secretName: 'SecretName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      secretName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSecretRequest extends $tea.Model {
  secretName: string;
  versionId: string;
  encryptionKeyId?: string;
  secretData: string;
  secretDataType?: string;
  description?: string;
  tags?: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      versionId: 'VersionId',
      encryptionKeyId: 'EncryptionKeyId',
      secretData: 'SecretData',
      secretDataType: 'SecretDataType',
      description: 'Description',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      versionId: 'string',
      encryptionKeyId: 'string',
      secretData: 'string',
      secretDataType: 'string',
      description: 'string',
      tags: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSecretResponse extends $tea.Model {
  requestId: string;
  arn: string;
  versionId: string;
  secretName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      arn: 'Arn',
      versionId: 'VersionId',
      secretName: 'SecretName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      arn: 'string',
      versionId: 'string',
      secretName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutSecretValueRequest extends $tea.Model {
  versionId: string;
  secretName: string;
  secretData: string;
  secretDataType?: string;
  versionStages?: string;
  static names(): { [key: string]: string } {
    return {
      versionId: 'VersionId',
      secretName: 'SecretName',
      secretData: 'SecretData',
      secretDataType: 'SecretDataType',
      versionStages: 'VersionStages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionId: 'string',
      secretName: 'string',
      secretData: 'string',
      secretDataType: 'string',
      versionStages: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutSecretValueResponse extends $tea.Model {
  requestId: string;
  secretName: string;
  versionId: string;
  versionStages: PutSecretValueResponseVersionStages[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      secretName: 'SecretName',
      versionId: 'VersionId',
      versionStages: 'VersionStages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      secretName: 'string',
      versionId: 'string',
      versionStages: { 'type': 'array', 'itemType': PutSecretValueResponseVersionStages },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSecretRequest extends $tea.Model {
  secretName: string;
  forceDeleteWithoutRecovery?: string;
  recoveryWindowInDays?: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      forceDeleteWithoutRecovery: 'ForceDeleteWithoutRecovery',
      recoveryWindowInDays: 'RecoveryWindowInDays',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      forceDeleteWithoutRecovery: 'string',
      recoveryWindowInDays: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSecretResponse extends $tea.Model {
  requestId: string;
  secretName: string;
  plannedDeleteTime: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      secretName: 'SecretName',
      plannedDeleteTime: 'PlannedDeleteTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      secretName: 'string',
      plannedDeleteTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateSecretVersionStageRequest extends $tea.Model {
  secretName: string;
  versionStage: string;
  removeFromVersion?: string;
  moveToVersion?: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      versionStage: 'VersionStage',
      removeFromVersion: 'RemoveFromVersion',
      moveToVersion: 'MoveToVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      versionStage: 'string',
      removeFromVersion: 'string',
      moveToVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateSecretVersionStageResponse extends $tea.Model {
  secretName: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricDecryptRequest extends $tea.Model {
  ciphertextBlob: string;
  keyId: string;
  keyVersionId: string;
  algorithm: string;
  static names(): { [key: string]: string } {
    return {
      ciphertextBlob: 'CiphertextBlob',
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
      algorithm: 'Algorithm',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ciphertextBlob: 'string',
      keyId: 'string',
      keyVersionId: 'string',
      algorithm: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricDecryptResponse extends $tea.Model {
  plaintext: string;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      plaintext: 'Plaintext',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      plaintext: 'string',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricVerifyRequest extends $tea.Model {
  keyId: string;
  keyVersionId: string;
  algorithm: string;
  digest: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
      algorithm: 'Algorithm',
      digest: 'Digest',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyVersionId: 'string',
      algorithm: 'string',
      digest: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricVerifyResponse extends $tea.Model {
  value: boolean;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      value: 'Value',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      value: 'boolean',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricSignRequest extends $tea.Model {
  keyId: string;
  keyVersionId: string;
  algorithm: string;
  digest: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
      algorithm: 'Algorithm',
      digest: 'Digest',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyVersionId: 'string',
      algorithm: 'string',
      digest: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricSignResponse extends $tea.Model {
  value: string;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      value: 'Value',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      value: 'string',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricEncryptRequest extends $tea.Model {
  plaintext: string;
  keyId: string;
  keyVersionId: string;
  algorithm: string;
  static names(): { [key: string]: string } {
    return {
      plaintext: 'Plaintext',
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
      algorithm: 'Algorithm',
    };
  }

  static types(): { [key: string]: any } {
    return {
      plaintext: 'string',
      keyId: 'string',
      keyVersionId: 'string',
      algorithm: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AsymmetricEncryptResponse extends $tea.Model {
  ciphertextBlob: string;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      ciphertextBlob: 'CiphertextBlob',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ciphertextBlob: 'string',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPublicKeyRequest extends $tea.Model {
  keyId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPublicKeyResponse extends $tea.Model {
  publicKey: string;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      publicKey: 'PublicKey',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      publicKey: 'string',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GenerateDataKeyWithoutPlaintextRequest extends $tea.Model {
  keyId: string;
  keySpec?: string;
  numberOfBytes?: number;
  encryptionContext?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keySpec: 'KeySpec',
      numberOfBytes: 'NumberOfBytes',
      encryptionContext: 'EncryptionContext',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keySpec: 'string',
      numberOfBytes: 'number',
      encryptionContext: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GenerateDataKeyWithoutPlaintextResponse extends $tea.Model {
  ciphertextBlob: string;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      ciphertextBlob: 'CiphertextBlob',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ciphertextBlob: 'string',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateKeyDescriptionRequest extends $tea.Model {
  keyId: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateKeyDescriptionResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeKeyVersionRequest extends $tea.Model {
  keyId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeKeyVersionResponse extends $tea.Model {
  requestId: string;
  keyVersion: DescribeKeyVersionResponseKeyVersion;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      keyVersion: 'KeyVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      keyVersion: DescribeKeyVersionResponseKeyVersion,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateRotationPolicyRequest extends $tea.Model {
  keyId: string;
  enableAutomaticRotation: boolean;
  rotationInterval?: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      enableAutomaticRotation: 'EnableAutomaticRotation',
      rotationInterval: 'RotationInterval',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      enableAutomaticRotation: 'boolean',
      rotationInterval: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateRotationPolicyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeyVersionsRequest extends $tea.Model {
  keyId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeyVersionsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  keyVersions: ListKeyVersionsResponseKeyVersions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      keyVersions: 'KeyVersions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      keyVersions: ListKeyVersionsResponseKeyVersions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateKeyVersionRequest extends $tea.Model {
  keyId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateKeyVersionResponse extends $tea.Model {
  requestId: string;
  keyVersion: CreateKeyVersionResponseKeyVersion;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      keyVersion: 'KeyVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      keyVersion: CreateKeyVersionResponseKeyVersion,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceResponse extends $tea.Model {
  requestId: string;
  protectionLevels: DescribeServiceResponseProtectionLevels;
  keySpecs: DescribeServiceResponseKeySpecs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      protectionLevels: 'ProtectionLevels',
      keySpecs: 'KeySpecs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      protectionLevels: DescribeServiceResponseProtectionLevels,
      keySpecs: DescribeServiceResponseKeySpecs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAliasRequest extends $tea.Model {
  keyId: string;
  aliasName: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      aliasName: 'AliasName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      aliasName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAliasResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UntagResourceRequest extends $tea.Model {
  keyId?: string;
  tagKeys: string;
  secretName?: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      tagKeys: 'TagKeys',
      secretName: 'SecretName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      tagKeys: 'string',
      secretName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UntagResourceResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourceRequest extends $tea.Model {
  keyId?: string;
  tags: string;
  secretName?: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      tags: 'Tags',
      secretName: 'SecretName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      tags: 'string',
      secretName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourceResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScheduleKeyDeletionRequest extends $tea.Model {
  keyId: string;
  pendingWindowInDays?: number;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      pendingWindowInDays: 'PendingWindowInDays',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      pendingWindowInDays: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScheduleKeyDeletionResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListResourceTagsRequest extends $tea.Model {
  keyId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListResourceTagsResponse extends $tea.Model {
  requestId: string;
  tags: ListResourceTagsResponseTags;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      tags: ListResourceTagsResponseTags,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeysRequest extends $tea.Model {
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeysResponse extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  requestId: string;
  keys: ListKeysResponseKeys;
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      keys: 'Keys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      keys: ListKeysResponseKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesByKeyIdRequest extends $tea.Model {
  keyId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesByKeyIdResponse extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  requestId: string;
  aliases: ListAliasesByKeyIdResponseAliases;
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      aliases: 'Aliases',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      aliases: ListAliasesByKeyIdResponseAliases,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesRequest extends $tea.Model {
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesResponse extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  requestId: string;
  aliases: ListAliasesResponseAliases;
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      aliases: 'Aliases',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      aliases: ListAliasesResponseAliases,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImportKeyMaterialRequest extends $tea.Model {
  keyId: string;
  encryptedKeyMaterial: string;
  importToken: string;
  keyMaterialExpireUnix: number;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      encryptedKeyMaterial: 'EncryptedKeyMaterial',
      importToken: 'ImportToken',
      keyMaterialExpireUnix: 'KeyMaterialExpireUnix',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      encryptedKeyMaterial: 'string',
      importToken: 'string',
      keyMaterialExpireUnix: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImportKeyMaterialResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetParametersForImportRequest extends $tea.Model {
  keyId: string;
  wrappingAlgorithm: string;
  wrappingKeySpec: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      wrappingAlgorithm: 'WrappingAlgorithm',
      wrappingKeySpec: 'WrappingKeySpec',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      wrappingAlgorithm: 'string',
      wrappingKeySpec: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetParametersForImportResponse extends $tea.Model {
  keyId: string;
  requestId: string;
  importToken: string;
  publicKey: string;
  tokenExpireTime: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      requestId: 'RequestId',
      importToken: 'ImportToken',
      publicKey: 'PublicKey',
      tokenExpireTime: 'TokenExpireTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      requestId: 'string',
      importToken: 'string',
      publicKey: 'string',
      tokenExpireTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GenerateDataKeyRequest extends $tea.Model {
  keyId: string;
  keySpec?: string;
  numberOfBytes?: number;
  encryptionContext?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keySpec: 'KeySpec',
      numberOfBytes: 'NumberOfBytes',
      encryptionContext: 'EncryptionContext',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keySpec: 'string',
      numberOfBytes: 'number',
      encryptionContext: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GenerateDataKeyResponse extends $tea.Model {
  ciphertextBlob: string;
  keyId: string;
  plaintext: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      ciphertextBlob: 'CiphertextBlob',
      keyId: 'KeyId',
      plaintext: 'Plaintext',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ciphertextBlob: 'string',
      keyId: 'string',
      plaintext: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EncryptRequest extends $tea.Model {
  keyId: string;
  plaintext: string;
  encryptionContext?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      plaintext: 'Plaintext',
      encryptionContext: 'EncryptionContext',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      plaintext: 'string',
      encryptionContext: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EncryptResponse extends $tea.Model {
  ciphertextBlob: string;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      ciphertextBlob: 'CiphertextBlob',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ciphertextBlob: 'string',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableKeyRequest extends $tea.Model {
  keyId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableKeyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableKeyRequest extends $tea.Model {
  keyId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableKeyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponse extends $tea.Model {
  requestId: string;
  regions: DescribeRegionsResponseRegions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regions: DescribeRegionsResponseRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeKeyRequest extends $tea.Model {
  keyId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeKeyResponse extends $tea.Model {
  requestId: string;
  keyMetadata: DescribeKeyResponseKeyMetadata;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      keyMetadata: 'KeyMetadata',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      keyMetadata: DescribeKeyResponseKeyMetadata,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteKeyMaterialRequest extends $tea.Model {
  keyId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteKeyMaterialResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAliasRequest extends $tea.Model {
  aliasName: string;
  static names(): { [key: string]: string } {
    return {
      aliasName: 'AliasName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      aliasName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAliasResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DecryptRequest extends $tea.Model {
  ciphertextBlob: string;
  encryptionContext?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      ciphertextBlob: 'CiphertextBlob',
      encryptionContext: 'EncryptionContext',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ciphertextBlob: 'string',
      encryptionContext: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DecryptResponse extends $tea.Model {
  plaintext: string;
  keyId: string;
  requestId: string;
  keyVersionId: string;
  static names(): { [key: string]: string } {
    return {
      plaintext: 'Plaintext',
      keyId: 'KeyId',
      requestId: 'RequestId',
      keyVersionId: 'KeyVersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      plaintext: 'string',
      keyId: 'string',
      requestId: 'string',
      keyVersionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateKeyRequest extends $tea.Model {
  description?: string;
  keyUsage?: string;
  origin?: string;
  protectionLevel?: string;
  enableAutomaticRotation?: boolean;
  rotationInterval?: string;
  keySpec?: string;
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      keyUsage: 'KeyUsage',
      origin: 'Origin',
      protectionLevel: 'ProtectionLevel',
      enableAutomaticRotation: 'EnableAutomaticRotation',
      rotationInterval: 'RotationInterval',
      keySpec: 'KeySpec',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      keyUsage: 'string',
      origin: 'string',
      protectionLevel: 'string',
      enableAutomaticRotation: 'boolean',
      rotationInterval: 'string',
      keySpec: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateKeyResponse extends $tea.Model {
  requestId: string;
  keyMetadata: CreateKeyResponseKeyMetadata;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      keyMetadata: 'KeyMetadata',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      keyMetadata: CreateKeyResponseKeyMetadata,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAliasRequest extends $tea.Model {
  keyId: string;
  aliasName: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      aliasName: 'AliasName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      aliasName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAliasResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelKeyDeletionRequest extends $tea.Model {
  keyId: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelKeyDeletionResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretsResponseSecretListSecretTagsTag extends $tea.Model {
  tagKey: string;
  tagValue: string;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      tagValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretsResponseSecretListSecretTags extends $tea.Model {
  tag: ListSecretsResponseSecretListSecretTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': ListSecretsResponseSecretListSecretTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretsResponseSecretListSecret extends $tea.Model {
  secretName: string;
  createTime: string;
  updateTime: string;
  plannedDeleteTime: string;
  tags: ListSecretsResponseSecretListSecretTags;
  static names(): { [key: string]: string } {
    return {
      secretName: 'SecretName',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      plannedDeleteTime: 'PlannedDeleteTime',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secretName: 'string',
      createTime: 'string',
      updateTime: 'string',
      plannedDeleteTime: 'string',
      tags: ListSecretsResponseSecretListSecretTags,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretsResponseSecretList extends $tea.Model {
  secret: ListSecretsResponseSecretListSecret[];
  static names(): { [key: string]: string } {
    return {
      secret: 'Secret',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secret: { 'type': 'array', 'itemType': ListSecretsResponseSecretListSecret },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretVersionIdsResponseVersionIdsVersionIdVersionStages extends $tea.Model {
  versionStage: string;
  static names(): { [key: string]: string } {
    return {
      versionStage: 'VersionStage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionStage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretVersionIdsResponseVersionIdsVersionId extends $tea.Model {
  createTime: string;
  versionId: string;
  versionStages: ListSecretVersionIdsResponseVersionIdsVersionIdVersionStages[];
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      versionId: 'VersionId',
      versionStages: 'VersionStages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      versionId: 'string',
      versionStages: { 'type': 'array', 'itemType': ListSecretVersionIdsResponseVersionIdsVersionIdVersionStages },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSecretVersionIdsResponseVersionIds extends $tea.Model {
  versionId: ListSecretVersionIdsResponseVersionIdsVersionId[];
  static names(): { [key: string]: string } {
    return {
      versionId: 'VersionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionId: { 'type': 'array', 'itemType': ListSecretVersionIdsResponseVersionIdsVersionId },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSecretResponseTagsTag extends $tea.Model {
  tagKey: string;
  tagValue: string;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      tagValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSecretResponseTags extends $tea.Model {
  tag: DescribeSecretResponseTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeSecretResponseTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSecretValueResponseVersionStages extends $tea.Model {
  versionStage: string;
  static names(): { [key: string]: string } {
    return {
      versionStage: 'VersionStage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionStage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutSecretValueResponseVersionStages extends $tea.Model {
  versionStage: string;
  static names(): { [key: string]: string } {
    return {
      versionStage: 'VersionStage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      versionStage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeKeyVersionResponseKeyVersion extends $tea.Model {
  keyId: string;
  keyVersionId: string;
  creationDate: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
      creationDate: 'CreationDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyVersionId: 'string',
      creationDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeyVersionsResponseKeyVersionsKeyVersion extends $tea.Model {
  keyId: string;
  keyVersionId: string;
  creationDate: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
      creationDate: 'CreationDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyVersionId: 'string',
      creationDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeyVersionsResponseKeyVersions extends $tea.Model {
  keyVersion: ListKeyVersionsResponseKeyVersionsKeyVersion[];
  static names(): { [key: string]: string } {
    return {
      keyVersion: 'KeyVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyVersion: { 'type': 'array', 'itemType': ListKeyVersionsResponseKeyVersionsKeyVersion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateKeyVersionResponseKeyVersion extends $tea.Model {
  keyId: string;
  keyVersionId: string;
  creationDate: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyVersionId: 'KeyVersionId',
      creationDate: 'CreationDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyVersionId: 'string',
      creationDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceResponseProtectionLevelsProtectionLevel extends $tea.Model {
  type: string;
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceResponseProtectionLevels extends $tea.Model {
  protectionLevel: DescribeServiceResponseProtectionLevelsProtectionLevel[];
  static names(): { [key: string]: string } {
    return {
      protectionLevel: 'ProtectionLevel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      protectionLevel: { 'type': 'array', 'itemType': DescribeServiceResponseProtectionLevelsProtectionLevel },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceResponseKeySpecsKeySpecSupportedProtectionLevels extends $tea.Model {
  supportedProtectionLevel: string;
  static names(): { [key: string]: string } {
    return {
      supportedProtectionLevel: 'SupportedProtectionLevel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      supportedProtectionLevel: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceResponseKeySpecsKeySpecUsages extends $tea.Model {
  usage: string;
  static names(): { [key: string]: string } {
    return {
      usage: 'Usage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      usage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceResponseKeySpecsKeySpec extends $tea.Model {
  name: string;
  supportedProtectionLevels: DescribeServiceResponseKeySpecsKeySpecSupportedProtectionLevels[];
  usages: DescribeServiceResponseKeySpecsKeySpecUsages[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      supportedProtectionLevels: 'SupportedProtectionLevels',
      usages: 'Usages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      supportedProtectionLevels: { 'type': 'array', 'itemType': DescribeServiceResponseKeySpecsKeySpecSupportedProtectionLevels },
      usages: { 'type': 'array', 'itemType': DescribeServiceResponseKeySpecsKeySpecUsages },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceResponseKeySpecs extends $tea.Model {
  keySpec: DescribeServiceResponseKeySpecsKeySpec[];
  static names(): { [key: string]: string } {
    return {
      keySpec: 'KeySpec',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keySpec: { 'type': 'array', 'itemType': DescribeServiceResponseKeySpecsKeySpec },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListResourceTagsResponseTagsTag extends $tea.Model {
  keyId: string;
  tagKey: string;
  tagValue: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      tagKey: 'TagKey',
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      tagKey: 'string',
      tagValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListResourceTagsResponseTags extends $tea.Model {
  tag: ListResourceTagsResponseTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': ListResourceTagsResponseTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeysResponseKeysKey extends $tea.Model {
  keyId: string;
  keyArn: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      keyArn: 'KeyArn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      keyArn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListKeysResponseKeys extends $tea.Model {
  key: ListKeysResponseKeysKey[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: { 'type': 'array', 'itemType': ListKeysResponseKeysKey },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesByKeyIdResponseAliasesAlias extends $tea.Model {
  keyId: string;
  aliasName: string;
  aliasArn: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      aliasName: 'AliasName',
      aliasArn: 'AliasArn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      aliasName: 'string',
      aliasArn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesByKeyIdResponseAliases extends $tea.Model {
  alias: ListAliasesByKeyIdResponseAliasesAlias[];
  static names(): { [key: string]: string } {
    return {
      alias: 'Alias',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alias: { 'type': 'array', 'itemType': ListAliasesByKeyIdResponseAliasesAlias },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesResponseAliasesAlias extends $tea.Model {
  keyId: string;
  aliasName: string;
  aliasArn: string;
  static names(): { [key: string]: string } {
    return {
      keyId: 'KeyId',
      aliasName: 'AliasName',
      aliasArn: 'AliasArn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyId: 'string',
      aliasName: 'string',
      aliasArn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAliasesResponseAliases extends $tea.Model {
  alias: ListAliasesResponseAliasesAlias[];
  static names(): { [key: string]: string } {
    return {
      alias: 'Alias',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alias: { 'type': 'array', 'itemType': ListAliasesResponseAliasesAlias },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegionsRegion extends $tea.Model {
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegions extends $tea.Model {
  region: DescribeRegionsResponseRegionsRegion[];
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: { 'type': 'array', 'itemType': DescribeRegionsResponseRegionsRegion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeKeyResponseKeyMetadata extends $tea.Model {
  creationDate: string;
  description: string;
  keyId: string;
  keyState: string;
  keyUsage: string;
  deleteDate: string;
  creator: string;
  arn: string;
  origin: string;
  materialExpireTime: string;
  protectionLevel: string;
  primaryKeyVersion: string;
  lastRotationDate: string;
  automaticRotation: string;
  rotationInterval: string;
  nextRotationDate: string;
  keySpec: string;
  static names(): { [key: string]: string } {
    return {
      creationDate: 'CreationDate',
      description: 'Description',
      keyId: 'KeyId',
      keyState: 'KeyState',
      keyUsage: 'KeyUsage',
      deleteDate: 'DeleteDate',
      creator: 'Creator',
      arn: 'Arn',
      origin: 'Origin',
      materialExpireTime: 'MaterialExpireTime',
      protectionLevel: 'ProtectionLevel',
      primaryKeyVersion: 'PrimaryKeyVersion',
      lastRotationDate: 'LastRotationDate',
      automaticRotation: 'AutomaticRotation',
      rotationInterval: 'RotationInterval',
      nextRotationDate: 'NextRotationDate',
      keySpec: 'KeySpec',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationDate: 'string',
      description: 'string',
      keyId: 'string',
      keyState: 'string',
      keyUsage: 'string',
      deleteDate: 'string',
      creator: 'string',
      arn: 'string',
      origin: 'string',
      materialExpireTime: 'string',
      protectionLevel: 'string',
      primaryKeyVersion: 'string',
      lastRotationDate: 'string',
      automaticRotation: 'string',
      rotationInterval: 'string',
      nextRotationDate: 'string',
      keySpec: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateKeyResponseKeyMetadata extends $tea.Model {
  creationDate: string;
  description: string;
  keyId: string;
  keyState: string;
  keyUsage: string;
  deleteDate: string;
  creator: string;
  arn: string;
  origin: string;
  materialExpireTime: string;
  protectionLevel: string;
  primaryKeyVersion: string;
  lastRotationDate: string;
  automaticRotation: string;
  rotationInterval: string;
  nextRotationDate: string;
  keySpec: string;
  static names(): { [key: string]: string } {
    return {
      creationDate: 'CreationDate',
      description: 'Description',
      keyId: 'KeyId',
      keyState: 'KeyState',
      keyUsage: 'KeyUsage',
      deleteDate: 'DeleteDate',
      creator: 'Creator',
      arn: 'Arn',
      origin: 'Origin',
      materialExpireTime: 'MaterialExpireTime',
      protectionLevel: 'ProtectionLevel',
      primaryKeyVersion: 'PrimaryKeyVersion',
      lastRotationDate: 'LastRotationDate',
      automaticRotation: 'AutomaticRotation',
      rotationInterval: 'RotationInterval',
      nextRotationDate: 'NextRotationDate',
      keySpec: 'KeySpec',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationDate: 'string',
      description: 'string',
      keyId: 'string',
      keyState: 'string',
      keyUsage: 'string',
      deleteDate: 'string',
      creator: 'string',
      arn: 'string',
      origin: 'string',
      materialExpireTime: 'string',
      protectionLevel: 'string',
      primaryKeyVersion: 'string',
      lastRotationDate: 'string',
      automaticRotation: 'string',
      rotationInterval: 'string',
      nextRotationDate: 'string',
      keySpec: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async listSecretsEx(request: ListSecretsRequest, runtime: $Util.RuntimeOptions): Promise<ListSecretsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListSecretsResponse>(await this.doRequest("ListSecrets", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ListSecretsResponse({}));
  }

  async listSecrets(request: ListSecretsRequest): Promise<ListSecretsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listSecretsEx(request, runtime);
  }

  async listSecretVersionIdsEx(request: ListSecretVersionIdsRequest, runtime: $Util.RuntimeOptions): Promise<ListSecretVersionIdsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListSecretVersionIdsResponse>(await this.doRequest("ListSecretVersionIds", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ListSecretVersionIdsResponse({}));
  }

  async listSecretVersionIds(request: ListSecretVersionIdsRequest): Promise<ListSecretVersionIdsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listSecretVersionIdsEx(request, runtime);
  }

  async describeSecretEx(request: DescribeSecretRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSecretResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSecretResponse>(await this.doRequest("DescribeSecret", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DescribeSecretResponse({}));
  }

  async describeSecret(request: DescribeSecretRequest): Promise<DescribeSecretResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSecretEx(request, runtime);
  }

  async updateSecretEx(request: UpdateSecretRequest, runtime: $Util.RuntimeOptions): Promise<UpdateSecretResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateSecretResponse>(await this.doRequest("UpdateSecret", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new UpdateSecretResponse({}));
  }

  async updateSecret(request: UpdateSecretRequest): Promise<UpdateSecretResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateSecretEx(request, runtime);
  }

  async getSecretValueEx(request: GetSecretValueRequest, runtime: $Util.RuntimeOptions): Promise<GetSecretValueResponse> {
    Util.validateModel(request);
    return $tea.cast<GetSecretValueResponse>(await this.doRequest("GetSecretValue", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new GetSecretValueResponse({}));
  }

  async getSecretValue(request: GetSecretValueRequest): Promise<GetSecretValueResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getSecretValueEx(request, runtime);
  }

  async getRandomPasswordEx(request: GetRandomPasswordRequest, runtime: $Util.RuntimeOptions): Promise<GetRandomPasswordResponse> {
    Util.validateModel(request);
    return $tea.cast<GetRandomPasswordResponse>(await this.doRequest("GetRandomPassword", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new GetRandomPasswordResponse({}));
  }

  async getRandomPassword(request: GetRandomPasswordRequest): Promise<GetRandomPasswordResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getRandomPasswordEx(request, runtime);
  }

  async restoreSecretEx(request: RestoreSecretRequest, runtime: $Util.RuntimeOptions): Promise<RestoreSecretResponse> {
    Util.validateModel(request);
    return $tea.cast<RestoreSecretResponse>(await this.doRequest("RestoreSecret", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new RestoreSecretResponse({}));
  }

  async restoreSecret(request: RestoreSecretRequest): Promise<RestoreSecretResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.restoreSecretEx(request, runtime);
  }

  async createSecretEx(request: CreateSecretRequest, runtime: $Util.RuntimeOptions): Promise<CreateSecretResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateSecretResponse>(await this.doRequest("CreateSecret", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new CreateSecretResponse({}));
  }

  async createSecret(request: CreateSecretRequest): Promise<CreateSecretResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createSecretEx(request, runtime);
  }

  async putSecretValueEx(request: PutSecretValueRequest, runtime: $Util.RuntimeOptions): Promise<PutSecretValueResponse> {
    Util.validateModel(request);
    return $tea.cast<PutSecretValueResponse>(await this.doRequest("PutSecretValue", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new PutSecretValueResponse({}));
  }

  async putSecretValue(request: PutSecretValueRequest): Promise<PutSecretValueResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putSecretValueEx(request, runtime);
  }

  async deleteSecretEx(request: DeleteSecretRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSecretResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSecretResponse>(await this.doRequest("DeleteSecret", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DeleteSecretResponse({}));
  }

  async deleteSecret(request: DeleteSecretRequest): Promise<DeleteSecretResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteSecretEx(request, runtime);
  }

  async updateSecretVersionStageEx(request: UpdateSecretVersionStageRequest, runtime: $Util.RuntimeOptions): Promise<UpdateSecretVersionStageResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateSecretVersionStageResponse>(await this.doRequest("UpdateSecretVersionStage", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new UpdateSecretVersionStageResponse({}));
  }

  async updateSecretVersionStage(request: UpdateSecretVersionStageRequest): Promise<UpdateSecretVersionStageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateSecretVersionStageEx(request, runtime);
  }

  async asymmetricDecryptEx(request: AsymmetricDecryptRequest, runtime: $Util.RuntimeOptions): Promise<AsymmetricDecryptResponse> {
    Util.validateModel(request);
    return $tea.cast<AsymmetricDecryptResponse>(await this.doRequest("AsymmetricDecrypt", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new AsymmetricDecryptResponse({}));
  }

  async asymmetricDecrypt(request: AsymmetricDecryptRequest): Promise<AsymmetricDecryptResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.asymmetricDecryptEx(request, runtime);
  }

  async asymmetricVerifyEx(request: AsymmetricVerifyRequest, runtime: $Util.RuntimeOptions): Promise<AsymmetricVerifyResponse> {
    Util.validateModel(request);
    return $tea.cast<AsymmetricVerifyResponse>(await this.doRequest("AsymmetricVerify", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new AsymmetricVerifyResponse({}));
  }

  async asymmetricVerify(request: AsymmetricVerifyRequest): Promise<AsymmetricVerifyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.asymmetricVerifyEx(request, runtime);
  }

  async asymmetricSignEx(request: AsymmetricSignRequest, runtime: $Util.RuntimeOptions): Promise<AsymmetricSignResponse> {
    Util.validateModel(request);
    return $tea.cast<AsymmetricSignResponse>(await this.doRequest("AsymmetricSign", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new AsymmetricSignResponse({}));
  }

  async asymmetricSign(request: AsymmetricSignRequest): Promise<AsymmetricSignResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.asymmetricSignEx(request, runtime);
  }

  async asymmetricEncryptEx(request: AsymmetricEncryptRequest, runtime: $Util.RuntimeOptions): Promise<AsymmetricEncryptResponse> {
    Util.validateModel(request);
    return $tea.cast<AsymmetricEncryptResponse>(await this.doRequest("AsymmetricEncrypt", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new AsymmetricEncryptResponse({}));
  }

  async asymmetricEncrypt(request: AsymmetricEncryptRequest): Promise<AsymmetricEncryptResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.asymmetricEncryptEx(request, runtime);
  }

  async getPublicKeyEx(request: GetPublicKeyRequest, runtime: $Util.RuntimeOptions): Promise<GetPublicKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<GetPublicKeyResponse>(await this.doRequest("GetPublicKey", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new GetPublicKeyResponse({}));
  }

  async getPublicKey(request: GetPublicKeyRequest): Promise<GetPublicKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getPublicKeyEx(request, runtime);
  }

  async generateDataKeyWithoutPlaintextEx(request: GenerateDataKeyWithoutPlaintextRequest, runtime: $Util.RuntimeOptions): Promise<GenerateDataKeyWithoutPlaintextResponse> {
    Util.validateModel(request);
    return $tea.cast<GenerateDataKeyWithoutPlaintextResponse>(await this.doRequest("GenerateDataKeyWithoutPlaintext", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new GenerateDataKeyWithoutPlaintextResponse({}));
  }

  async generateDataKeyWithoutPlaintext(request: GenerateDataKeyWithoutPlaintextRequest): Promise<GenerateDataKeyWithoutPlaintextResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.generateDataKeyWithoutPlaintextEx(request, runtime);
  }

  async updateKeyDescriptionEx(request: UpdateKeyDescriptionRequest, runtime: $Util.RuntimeOptions): Promise<UpdateKeyDescriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateKeyDescriptionResponse>(await this.doRequest("UpdateKeyDescription", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new UpdateKeyDescriptionResponse({}));
  }

  async updateKeyDescription(request: UpdateKeyDescriptionRequest): Promise<UpdateKeyDescriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateKeyDescriptionEx(request, runtime);
  }

  async describeKeyVersionEx(request: DescribeKeyVersionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeKeyVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeKeyVersionResponse>(await this.doRequest("DescribeKeyVersion", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DescribeKeyVersionResponse({}));
  }

  async describeKeyVersion(request: DescribeKeyVersionRequest): Promise<DescribeKeyVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeKeyVersionEx(request, runtime);
  }

  async updateRotationPolicyEx(request: UpdateRotationPolicyRequest, runtime: $Util.RuntimeOptions): Promise<UpdateRotationPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateRotationPolicyResponse>(await this.doRequest("UpdateRotationPolicy", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new UpdateRotationPolicyResponse({}));
  }

  async updateRotationPolicy(request: UpdateRotationPolicyRequest): Promise<UpdateRotationPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateRotationPolicyEx(request, runtime);
  }

  async listKeyVersionsEx(request: ListKeyVersionsRequest, runtime: $Util.RuntimeOptions): Promise<ListKeyVersionsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListKeyVersionsResponse>(await this.doRequest("ListKeyVersions", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ListKeyVersionsResponse({}));
  }

  async listKeyVersions(request: ListKeyVersionsRequest): Promise<ListKeyVersionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listKeyVersionsEx(request, runtime);
  }

  async createKeyVersionEx(request: CreateKeyVersionRequest, runtime: $Util.RuntimeOptions): Promise<CreateKeyVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateKeyVersionResponse>(await this.doRequest("CreateKeyVersion", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new CreateKeyVersionResponse({}));
  }

  async createKeyVersion(request: CreateKeyVersionRequest): Promise<CreateKeyVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createKeyVersionEx(request, runtime);
  }

  async describeServiceEx(request: DescribeServiceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeServiceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeServiceResponse>(await this.doRequest("DescribeService", "HTTPS", "GET", "2016-01-20", "AK", null, $tea.toMap(request), runtime), new DescribeServiceResponse({}));
  }

  async describeService(request: DescribeServiceRequest): Promise<DescribeServiceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeServiceEx(request, runtime);
  }

  async updateAliasEx(request: UpdateAliasRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAliasResponse>(await this.doRequest("UpdateAlias", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new UpdateAliasResponse({}));
  }

  async updateAlias(request: UpdateAliasRequest): Promise<UpdateAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAliasEx(request, runtime);
  }

  async untagResourceEx(request: UntagResourceRequest, runtime: $Util.RuntimeOptions): Promise<UntagResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<UntagResourceResponse>(await this.doRequest("UntagResource", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new UntagResourceResponse({}));
  }

  async untagResource(request: UntagResourceRequest): Promise<UntagResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.untagResourceEx(request, runtime);
  }

  async tagResourceEx(request: TagResourceRequest, runtime: $Util.RuntimeOptions): Promise<TagResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<TagResourceResponse>(await this.doRequest("TagResource", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new TagResourceResponse({}));
  }

  async tagResource(request: TagResourceRequest): Promise<TagResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.tagResourceEx(request, runtime);
  }

  async scheduleKeyDeletionEx(request: ScheduleKeyDeletionRequest, runtime: $Util.RuntimeOptions): Promise<ScheduleKeyDeletionResponse> {
    Util.validateModel(request);
    return $tea.cast<ScheduleKeyDeletionResponse>(await this.doRequest("ScheduleKeyDeletion", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ScheduleKeyDeletionResponse({}));
  }

  async scheduleKeyDeletion(request: ScheduleKeyDeletionRequest): Promise<ScheduleKeyDeletionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.scheduleKeyDeletionEx(request, runtime);
  }

  async listResourceTagsEx(request: ListResourceTagsRequest, runtime: $Util.RuntimeOptions): Promise<ListResourceTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListResourceTagsResponse>(await this.doRequest("ListResourceTags", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ListResourceTagsResponse({}));
  }

  async listResourceTags(request: ListResourceTagsRequest): Promise<ListResourceTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listResourceTagsEx(request, runtime);
  }

  async listKeysEx(request: ListKeysRequest, runtime: $Util.RuntimeOptions): Promise<ListKeysResponse> {
    Util.validateModel(request);
    return $tea.cast<ListKeysResponse>(await this.doRequest("ListKeys", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ListKeysResponse({}));
  }

  async listKeys(request: ListKeysRequest): Promise<ListKeysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listKeysEx(request, runtime);
  }

  async listAliasesByKeyIdEx(request: ListAliasesByKeyIdRequest, runtime: $Util.RuntimeOptions): Promise<ListAliasesByKeyIdResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAliasesByKeyIdResponse>(await this.doRequest("ListAliasesByKeyId", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ListAliasesByKeyIdResponse({}));
  }

  async listAliasesByKeyId(request: ListAliasesByKeyIdRequest): Promise<ListAliasesByKeyIdResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAliasesByKeyIdEx(request, runtime);
  }

  async listAliasesEx(request: ListAliasesRequest, runtime: $Util.RuntimeOptions): Promise<ListAliasesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAliasesResponse>(await this.doRequest("ListAliases", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ListAliasesResponse({}));
  }

  async listAliases(request: ListAliasesRequest): Promise<ListAliasesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAliasesEx(request, runtime);
  }

  async importKeyMaterialEx(request: ImportKeyMaterialRequest, runtime: $Util.RuntimeOptions): Promise<ImportKeyMaterialResponse> {
    Util.validateModel(request);
    return $tea.cast<ImportKeyMaterialResponse>(await this.doRequest("ImportKeyMaterial", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new ImportKeyMaterialResponse({}));
  }

  async importKeyMaterial(request: ImportKeyMaterialRequest): Promise<ImportKeyMaterialResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.importKeyMaterialEx(request, runtime);
  }

  async getParametersForImportEx(request: GetParametersForImportRequest, runtime: $Util.RuntimeOptions): Promise<GetParametersForImportResponse> {
    Util.validateModel(request);
    return $tea.cast<GetParametersForImportResponse>(await this.doRequest("GetParametersForImport", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new GetParametersForImportResponse({}));
  }

  async getParametersForImport(request: GetParametersForImportRequest): Promise<GetParametersForImportResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getParametersForImportEx(request, runtime);
  }

  async generateDataKeyEx(request: GenerateDataKeyRequest, runtime: $Util.RuntimeOptions): Promise<GenerateDataKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<GenerateDataKeyResponse>(await this.doRequest("GenerateDataKey", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new GenerateDataKeyResponse({}));
  }

  async generateDataKey(request: GenerateDataKeyRequest): Promise<GenerateDataKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.generateDataKeyEx(request, runtime);
  }

  async encryptEx(request: EncryptRequest, runtime: $Util.RuntimeOptions): Promise<EncryptResponse> {
    Util.validateModel(request);
    return $tea.cast<EncryptResponse>(await this.doRequest("Encrypt", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new EncryptResponse({}));
  }

  async encrypt(request: EncryptRequest): Promise<EncryptResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.encryptEx(request, runtime);
  }

  async enableKeyEx(request: EnableKeyRequest, runtime: $Util.RuntimeOptions): Promise<EnableKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableKeyResponse>(await this.doRequest("EnableKey", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new EnableKeyResponse({}));
  }

  async enableKey(request: EnableKeyRequest): Promise<EnableKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableKeyEx(request, runtime);
  }

  async disableKeyEx(request: DisableKeyRequest, runtime: $Util.RuntimeOptions): Promise<DisableKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableKeyResponse>(await this.doRequest("DisableKey", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DisableKeyResponse({}));
  }

  async disableKey(request: DisableKeyRequest): Promise<DisableKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableKeyEx(request, runtime);
  }

  async describeRegionsEx(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "GET", "2016-01-20", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsEx(request, runtime);
  }

  async describeKeyEx(request: DescribeKeyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeKeyResponse>(await this.doRequest("DescribeKey", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DescribeKeyResponse({}));
  }

  async describeKey(request: DescribeKeyRequest): Promise<DescribeKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeKeyEx(request, runtime);
  }

  async deleteKeyMaterialEx(request: DeleteKeyMaterialRequest, runtime: $Util.RuntimeOptions): Promise<DeleteKeyMaterialResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteKeyMaterialResponse>(await this.doRequest("DeleteKeyMaterial", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DeleteKeyMaterialResponse({}));
  }

  async deleteKeyMaterial(request: DeleteKeyMaterialRequest): Promise<DeleteKeyMaterialResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteKeyMaterialEx(request, runtime);
  }

  async deleteAliasEx(request: DeleteAliasRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAliasResponse>(await this.doRequest("DeleteAlias", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DeleteAliasResponse({}));
  }

  async deleteAlias(request: DeleteAliasRequest): Promise<DeleteAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAliasEx(request, runtime);
  }

  async decryptEx(request: DecryptRequest, runtime: $Util.RuntimeOptions): Promise<DecryptResponse> {
    Util.validateModel(request);
    return $tea.cast<DecryptResponse>(await this.doRequest("Decrypt", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new DecryptResponse({}));
  }

  async decrypt(request: DecryptRequest): Promise<DecryptResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.decryptEx(request, runtime);
  }

  async createKeyEx(request: CreateKeyRequest, runtime: $Util.RuntimeOptions): Promise<CreateKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateKeyResponse>(await this.doRequest("CreateKey", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new CreateKeyResponse({}));
  }

  async createKey(request: CreateKeyRequest): Promise<CreateKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createKeyEx(request, runtime);
  }

  async createAliasEx(request: CreateAliasRequest, runtime: $Util.RuntimeOptions): Promise<CreateAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAliasResponse>(await this.doRequest("CreateAlias", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new CreateAliasResponse({}));
  }

  async createAlias(request: CreateAliasRequest): Promise<CreateAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAliasEx(request, runtime);
  }

  async cancelKeyDeletionEx(request: CancelKeyDeletionRequest, runtime: $Util.RuntimeOptions): Promise<CancelKeyDeletionResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelKeyDeletionResponse>(await this.doRequest("CancelKeyDeletion", "HTTPS", "GET", "2016-01-20", "AK", $tea.toMap(request), null, runtime), new CancelKeyDeletionResponse({}));
  }

  async cancelKeyDeletion(request: CancelKeyDeletionRequest): Promise<CancelKeyDeletionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelKeyDeletionEx(request, runtime);
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.isUnset(endpointMap) && !Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}
