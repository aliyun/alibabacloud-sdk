![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# Alibaba Cloud KMS client for TypeScript/Node.js


## Installation

```bash
npm install @alicloud/kms20160120
```

**Node.js >= 8.5.0** required.

## Usage

### Client with accessKeyId & accessKeySecret

```ts
import Client, * as KMS from '@alicloud/kms20160120';
const client = new Client({
  endpoint: 'kms.cn-hangzhou.aliyuncs.com', // check this from kms console
  accessKeyId: '***************', // check this from aliyun console
  accessKeySecret: '***************', // check this from aliyun console
  type: 'access_key'
});
```

### SDK demo

```ts
async function demo() {
  // describe regions
  const describeRegionsRequest = new KMS.DescribeRegionsRequest();
  const regions = await client.describeRegions(describeRegionsRequest);
  console.log(`regions: ${JSON.stringify(regions)}`);

  // create key
  const createKeyRequest = new KMS.CreateKeyRequest({
    description: `sample create key`,
    keyUsage: 'ENCRYPT/DECRYPT',
    origin: 'Aliyun_KMS',
  });
  const creation = await client.createKey(createKeyRequest);
  const keyId = creation.keyMetadata.keyId;
  console.log(`creation: ${JSON.stringify(creation)}`);

  // list keys
  const listKeysRequest = new KMS.ListKeysRequest({
    pageNumber: 1,
    pageSize: 100,
  });
  const keys = await client.listKeys(listKeysRequest);
  console.log(`keys: ${JSON.stringify(keys)}`);

  // describe key
  const describeKeysRequest = new KMS.DescribeKeysRequest({
    keyId: keyId,
  });
  const description = await client.describeKey(describeKeysRequest);
  console.log(`description: ${JSON.stringify(description)}`);

  // encrypt
  const plaintext = Buffer.from('hello kms sdk for node.js');
  const encryptRequest = new KMS.EncryptRequest({
      plaintext: plaintext.toString('base64'),
      keyId: keyId,
      encryptionContext: JSON.stringify({ k: 'v' }),
    });
  const encrypt = await client.encrypt(encryptRequest);
  const blob = encrypt.ciphertextBlob;
  console.log(`description: ${JSON.stringify(description)}`);

  // decrypt
  const decryptRequest = new KMS.DecryptRequest({
    ciphertextBlob: blob,
    encryptionContext: JSON.stringify({ k: 'v' }),
  });
  const decrypt = await client.decrypt(decryptRequest);
  const rawtext = decrypt.plaintext;
  console.log(`rawtext: ${rawtext}`);

  // disable key
  const disableKeyRequest = new KMS.DisableKeyRequest({
    keyId: keyId,
  });
  const disable = await client.disableKey(disableKeyRequest);
  console.log(`disable: ${JSON.stringify(disable)}`);

  // enable key
  const enableKeyRequest = new KMS.EnableKeyRequest({
    keyId: keyId,
  });
  const enable = await client.enableKey(enableKeyRequest);
  console.log(`enable: ${JSON.stringify(enable)}`);

  // generate local data key
  const generateDataKeyRequest = new KMS.GenerateDataKeyRequest({
    keyId: keyId,
  });
  const generateKey = await client.generateDataKey(generateDataKeyRequest);
  console.log(`generateKey: ${JSON.stringify(generateKey)}`);

  // schedule delete key
  const scheduleKeyDeletionRequest = new KMS.ScheduleKeyDeletionRequest({
    keyId: keyId,
    pendingWindowInDays: 7,
  });
  const deletion = await client.scheduleKeyDeletion(scheduleKeyDeletionRequest);
  console.log(`deletion: ${JSON.stringify(deletion)}`);

  // cancel deletion
  const cancelKeyDeletionRequest = new KMS.CancelKeyDeletionRequest({
    keyId: keyId,
  });
  const cancel = await client.cancelKeyDeletion(cancelKeyDeletionRequest);
  console.log(`cancel: ${JSON.stringify(cancel)}`);

  // create alias
  const alias = 'alias/demo';
  const createAliasRequest = new KMS.CreateAliasRequest({
    keyId: keyId,
    aliasName: alias,
  });
  const createAlias = await client.createAlias(createAliasRequest);
  console.log(`createAlias: ${JSON.stringify(createAlias)}`);

  // update alias
  const alias1 = 'alias/demo1';
  const updateAliasRequest = new KMS.UpdateAliasRequest({
    keyId: keyId,
    aliasName: alias1,
  });
  const updateAlias = await client.updateAlias(updateAliasRequest);
  console.log(`updateAlias: ${JSON.stringify(updateAlias)}`);

  // list aliases
  const listAliasesRequest = new KMS.ListAliasesRequest({
    pageNumber: 1,
    pageSize: 100,
  });
  const listAlias = await client.listAliases(listAliasesRequest);
  console.log(`listAlias: ${JSON.stringify(listAlias)}`);

  // list alias by id
  const listAliasesByKeyIdRequest = new KMS.ListAliasesByKeyIdRequest({
    keyId: keyId,
    pageNumber: 1,
    pageSize: 100,
  });
  const listAliasById = await client.listAliasesByKeyId(listAliasesByKeyIdRequest);
  console.log(`listAliasById: ${JSON.stringify(listAliasById)}`);

  // delete alias
  const deleteAliasesRequest = new KMS.DeleteAliasesRequest({
    aliasName: alias,
  });
  const deleteAlias = await client.deleteAlias(deleteAliasesRequest);
  console.log(`deleteAlias: ${JSON.stringify(deleteAlias)}`);
}

demo();
```

## Issues
[Opening an Issue](https://github.com/aliyun/alibabacloud-sdk/issues/new), Issues not conforming to the guidelines may be closed immediately.

## References
* [Latest Release](https://github.com/aliyun/alibabacloud-sdk)

## License
[Apache-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Copyright 1999-present, Alibaba Cloud All rights reserved.