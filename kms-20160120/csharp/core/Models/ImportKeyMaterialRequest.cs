// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ImportKeyMaterialRequest : TeaModel {
        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("EncryptedKeyMaterial")]
        [Validation(Required=true)]
        public string EncryptedKeyMaterial { get; set; }

        [NameInMap("ImportToken")]
        [Validation(Required=true)]
        public string ImportToken { get; set; }

        [NameInMap("KeyMaterialExpireUnix")]
        [Validation(Required=true)]
        public long KeyMaterialExpireUnix { get; set; }

    }

}
