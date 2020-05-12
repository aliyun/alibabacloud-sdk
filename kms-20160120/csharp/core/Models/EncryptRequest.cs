// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class EncryptRequest : TeaModel {
        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("Plaintext")]
        [Validation(Required=true)]
        public string Plaintext { get; set; }

        [NameInMap("EncryptionContext")]
        [Validation(Required=false)]
        public Dictionary<string, string> EncryptionContext { get; set; }

    }

}
