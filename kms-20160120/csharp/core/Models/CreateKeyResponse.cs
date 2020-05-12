// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class CreateKeyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("KeyMetadata")]
        [Validation(Required=true)]
        public CreateKeyResponseKeyMetadata KeyMetadata { get; set; }
        public class CreateKeyResponseKeyMetadata : TeaModel {
            [NameInMap("CreationDate")]
            [Validation(Required=true)]
            public string CreationDate { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("KeyId")]
            [Validation(Required=true)]
            public string KeyId { get; set; }
            [NameInMap("KeyState")]
            [Validation(Required=true)]
            public string KeyState { get; set; }
            [NameInMap("KeyUsage")]
            [Validation(Required=true)]
            public string KeyUsage { get; set; }
            [NameInMap("DeleteDate")]
            [Validation(Required=true)]
            public string DeleteDate { get; set; }
            [NameInMap("Creator")]
            [Validation(Required=true)]
            public string Creator { get; set; }
            [NameInMap("Arn")]
            [Validation(Required=true)]
            public string Arn { get; set; }
            [NameInMap("Origin")]
            [Validation(Required=true)]
            public string Origin { get; set; }
            [NameInMap("MaterialExpireTime")]
            [Validation(Required=true)]
            public string MaterialExpireTime { get; set; }
            [NameInMap("ProtectionLevel")]
            [Validation(Required=true)]
            public string ProtectionLevel { get; set; }
            [NameInMap("PrimaryKeyVersion")]
            [Validation(Required=true)]
            public string PrimaryKeyVersion { get; set; }
            [NameInMap("LastRotationDate")]
            [Validation(Required=true)]
            public string LastRotationDate { get; set; }
            [NameInMap("AutomaticRotation")]
            [Validation(Required=true)]
            public string AutomaticRotation { get; set; }
            [NameInMap("RotationInterval")]
            [Validation(Required=true)]
            public string RotationInterval { get; set; }
            [NameInMap("NextRotationDate")]
            [Validation(Required=true)]
            public string NextRotationDate { get; set; }
            [NameInMap("KeySpec")]
            [Validation(Required=true)]
            public string KeySpec { get; set; }
        };

    }

}
